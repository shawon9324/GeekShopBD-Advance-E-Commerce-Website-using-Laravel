<?php

namespace App\Http\Controllers\Front;

use App\Cart;
use Illuminate\Pagination\Paginator; //LARAVEL 8.0 NEW PAGINATOR
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductsAttribute;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductsController extends Controller
{
    public function listing(Request $request)
    {
        Paginator::useBootstrap();  //LARAVEL 8.0 NEW PAGINATOR
        if ($request->ajax()) {
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            $page_name = 'listing';
            $url = $data['url'];
            $categoryCount = Category::where(['url' => $url, 'status' => 1])->count();
            if ($categoryCount > 0) {
                $categoryDetails = Category::catDetails($url);
                // echo "<pre>";print_r($categoryDetails);die;
                $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1);
                //ajax filtering 
                if (isset($data['generation']) && !empty($data['generation'])) {
                    $categoryProducts->whereIn('products.generation', $data['generation']);
                }
                else if (isset($data['processor']) && !empty($data['processor'])) {
                    $categoryProducts->whereIn('products.processor', $data['processor']);
                }
                else if (isset($data['graphics']) && !empty($data['graphics'])) {
                    $categoryProducts->whereIn('products.graphics', $data['graphics']);
                }
                else if (isset($data['ram']) && !empty($data['ram'])) {
                    $categoryProducts->whereIn('products.ram', $data['ram']);
                }
                else if (isset($data['hdd']) && !empty($data['hdd'])) {
                    $categoryProducts->whereIn('products.hdd', $data['hdd']);
                }
                else if (isset($data['ssd']) && !empty($data['ssd'])) {
                    $categoryProducts->whereIn('products.ssd', $data['ssd']);
                }

                //checking sort option selection
                if (isset($data['sort']) && !empty($data['sort'])) {
                    if ($data['sort'] == "product_default") {
                        $categoryProducts->orderBy('id', 'asc');
                    } else if ($data['sort'] == "product_name_a_z") {
                        $categoryProducts->orderBy('product_name', 'asc');
                    } else if ($data['sort'] == "product_name_z_a") {
                        $categoryProducts->orderBy('product_name', 'desc');
                    } else if ($data['sort'] == "price_lowest") {
                        $categoryProducts->orderBy('product_price', 'asc');
                    } else if ($data['sort'] == "price_highest") {
                        $categoryProducts->orderBy('product_price', 'desc');
                    }
                } else {
                }
                $categoryProducts = $categoryProducts->paginate(3);
                // return view('front.products.ajax_products_listing')->with(compact('categoryDetails', 'categoryProducts', 'page_name', 'url'))->render();
                return view('front.products.ajax_product_listing_duel_view')->with(compact('categoryDetails', 'categoryProducts', 'page_name', 'url'))->render();
            }else {
                abort(404);
            }
        } else {
            $url = Route::getFacadeRoot()->current()->uri();
            $page_name = 'listing';
            $categoryCount = Category::where(['url' => $url, 'status' => 1])->count();
            $section_id = Category::where(['url' => $url, 'status' => 1])->pluck('section_id')->toArray();
            if ($categoryCount > 0) {
                $categoryDetails = Category::catDetails($url);
                // echo "<pre>";print_r($categoryDetails);die;
                $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1);
                //checking sort option selection
                $paginateCount = round(($categoryProducts->count('id'))/3);
                $categoryProducts = $categoryProducts->paginate(3);
                // $categoryProducts = $categoryProducts->paginate(3)->toJson();
                //product filters
                $productFilters = Product::productFilters();
                $generationArray = $productFilters['generationArray'];
                $processorArray = $productFilters['processorArray'];
                $graphicsArray = $productFilters['graphicsArray'];
                $hddArray = $productFilters['hddArray'];
                $ssdArray = $productFilters['ssdArray'];
                $ramArray = $productFilters['ramArray'];

                $latest_products_discounted = Product::where('status', 1)->where('product_discount', '>', 0)->orderby('id', 'Desc')->limit(5)->get()->toArray();

                return view('front.products.listing')->with(compact(
                    'categoryDetails',
                    'categoryProducts',
                    'page_name',
                    'url',
                    'generationArray',
                    'processorArray',
                    'graphicsArray',
                    'hddArray',
                    'ssdArray',
                    'ramArray',
                    'latest_products_discounted',
                    'section_id',
                    'paginateCount'
                ));
            } else {
                abort(404);
            }
        }
    }
    public function productDetails($id)
    {
        $productDetails = Product::with([
            'section' => function ($query) {
                $query->select('id', 'name');
            },
            'category' => function ($query) {
                $query->select('id', 'category_name', 'url');
            },
            'brand' => function ($query) {
                $query->select('id', 'name');
            },
            'attributes',
            'images'
        ])->find($id)->toArray();

        $total_stock = ProductsAttribute::where(['product_id' => $id, 'status' => 1])->sum('stock');
        $total_stock_status = ProductsAttribute::where('product_id', $id)->sum('status');
        $relatedProuducts = Product::where('category_id', $productDetails['category']['id'])->where('id', '!=', $id)->limit(4)->inRandomOrder()->get()->toArray();
        return view('front.products.product_single_details')->with(compact('productDetails', 'total_stock', 'total_stock_status', 'relatedProuducts'));
    }
    public function getProductPrice(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $getAttributes = ProductsAttribute::where(['product_id' => $data['product_id'], 'color' => $data['color']])->first();
            $price = $getAttributes->price;
            echo $price;
        }
    }
    public function getProductDiscountPrice(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $getAttributes = ProductsAttribute::where(['product_id' => $data['product_id'], 'color' => $data['color']])->first();
            $getDiscount = Product::where('id', $data['product_id'])->first();
            $discount = $getDiscount->product_discount;
            $price = $getAttributes->price;
            $discounted_price = ($price - (round(($price * $discount) / 100)));
            echo $discounted_price;
        }
    }
    public function productCategories($id){
        $section_id = $id;
        return view('front.products.category_listing')->with(compact('section_id'));
    }
    public function addtoCart(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            $getProductStock = ProductsAttribute::where([ 'product_id'=>$data['product_id'],'color'=>$data['color'] ])->first()->toArray();

            if($getProductStock['stock']<$data['quantity']){
                alert()->error('Sorry :(','Selected '.$data['color'] .'   color is only   '. $getProductStock['stock'] .'   available!');
                return redirect()->back();
            }
            $session_id = Session::get('session_id');
            if(empty($session_id)){
                $session_id = Session::getId();
                Session::put('session_id',$session_id);
            }
            $productName = Product::select('product_name')->where('id',$data['product_id'])->get()->first()->toArray();
            // echo "<pre>"; print_r($productName);die;
            if(Auth::check()){
                //customer is login
                $countProducts = Cart::where(['product_id'=>$data['product_id'],'color'=>$data['color'] ,'user_id'=>Auth::user()->id])->count();
            }else{
                //customer is not login 
                $countProducts = Cart::where(['product_id'=>$data['product_id'],'color'=>$data['color'] ,'session_id'=>$session_id])->count();
            }
            
            if($countProducts>0){
                alert()->error('Opps!','Product '.$data['color'] .' color already exists in Shopping Cart!');
                return redirect()->back();
            }
            $cart = new Cart;
            $cart->session_id =$session_id;
            $cart->product_id =$data['product_id'];
            $cart->color =$data['color'];
            $cart->quantity =$data['quantity'];
            $cart->save();


            session::flash('success_message',$productName['product_name']);
            return redirect()->back();
        }
    }
    public function shoppingCart(){
        return view('front.products.shopping_cart');
    }
    
}
