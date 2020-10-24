<?php

namespace App\Http\Controllers\Front;

use Illuminate\Pagination\Paginator; //LARAVEL 8.0 NEW PAGINATOR
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductsAttribute;

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
                } else if (isset($data['processor']) && !empty($data['processor'])) {
                    $categoryProducts->whereIn('products.processor', $data['processor']);
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
                $categoryProducts = $categoryProducts->paginate(100);
                return view('front.products.ajax_products_listing')->with(compact('categoryDetails', 'categoryProducts', 'page_name', 'url'));
            }else {
                abort(404);
            }
        } else {
            $url = Route::getFacadeRoot()->current()->uri();
            $page_name = 'listing';
            $categoryCount = Category::where(['url' => $url, 'status' => 1])->count();
            $section_id = Category::where(['url' => $url, 'status' => 1])->pluck('section_id')->toArray();
            if ($categoryCount > 0) {
                //echo "Category Exists";die;
                $categoryDetails = Category::catDetails($url);
                // echo "<pre>";print_r($categoryDetails);die;
                $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1);
                //checking sort option selection
                $categoryProducts = $categoryProducts->paginate(5);
                // $categoryProducts = $categoryProducts->paginate(3)->toJson();
                // echo "<pre>"; print_r($categoryProducts); die;


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
                    'section_id'
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
            // echo $getAttributes->price;
            echo $price;
        }
    }
    public function getProductDiscountPrice(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $getAttributes = ProductsAttribute::where(['product_id' => $data['product_id'], 'color' => $data['color']])->first();
            $getDiscount = Product::where('id', $data['product_id'])->first();
            // $discount_price=product_price'])-(round(($productDetails['product_price']*$productDetails['product_discount'])/100)));
            $discount = $getDiscount->product_discount;
            $price = $getAttributes->price;
            $discounted_price = ($price - (round(($price * $discount) / 100)));
            echo $discounted_price;
        }
    }
}
