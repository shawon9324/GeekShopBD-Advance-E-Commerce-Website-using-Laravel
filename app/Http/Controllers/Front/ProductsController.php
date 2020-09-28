<?php

namespace App\Http\Controllers\Front;

use Illuminate\Pagination\Paginator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductsController extends Controller
{
    public function listing($url,Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            $page_name = 'listing';
            $url= $data['url'];
            $categoryCount = Category::where(['url' => $url, 'status' => 1])->count();
            if ($categoryCount > 0) {
                
                Paginator::useBootstrap();
                //echo "Category Exists";die;
                $categoryDetails = Category::catDetails($url);
                // echo "<pre>";print_r($categoryDetails);die;
                $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1);
                //checking sort option selection
                if(isset($data['sort']) && !empty($data['sort'])){
                    if($data['sort']=="product_default"){
                        $categoryProducts->orderBy('id','asc');
                    }else if($data['sort']=="product_name_a_z"){
                        $categoryProducts->orderBy('product_name','asc');
                    }else if($data['sort']=="product_name_z_a"){
                        $categoryProducts->orderBy('product_name','desc');
                    }else if($data['sort']=="price_lowest"){
                        $categoryProducts->orderBy('product_price','asc');
                    }else if($data['sort']=="price_highest"){
                        $categoryProducts->orderBy('product_price','desc');
                    }
                }else{
                    
                }
                $categoryProducts = $categoryProducts->paginate(2);
                return view('front.products.ajax_products_listing')->with(compact('categoryDetails', 'categoryProducts', 'page_name','url'));
            }else {
                abort(404);
            }
            
        }
        
        
        else{
            $page_name = 'listing';
            $categoryCount = Category::where(['url' => $url, 'status' => 1])->count();
            if ($categoryCount > 0) {
                Paginator::useBootstrap();
                //echo "Category Exists";die;
                $categoryDetails = Category::catDetails($url);
                // echo "<pre>";print_r($categoryDetails);die;
                $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1);
                //checking sort option selection
                
                $categoryProducts = $categoryProducts->paginate(2);

                //product filters
                $productFilters = Product::productFilters();
                $generationArray =$productFilters['generationArray'];
                $processorArray =$productFilters['processorArray'];
                $graphicsArray =$productFilters['graphicsArray'];
                $hddArray =$productFilters['hddArray'];
                $ssdArray =$productFilters['ssdArray'];
                $ramArray =$productFilters['ramArray'];

                
                $latest_products_discounted = Product::where('status', 1)->where('product_discount','>',0)->orderby('id', 'Desc')->limit(5)->get()->toArray();

                return view('front.products.listing')->with(compact('categoryDetails', 'categoryProducts', 'page_name','url',
                'generationArray',
                'processorArray',
                'graphicsArray',
                'hddArray',
                'ssdArray',
                'ramArray',
                'latest_products_discounted',
            ));
            }else {
                abort(404);
            }
        }

    }
}
