<?php

namespace App\Http\Controllers\Front;

use Illuminate\Pagination\Paginator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductsController extends Controller
{
    public function listing($url)
    {

        $page_name = 'Products';
        $categoryCount = Category::where(['url' => $url, 'status' => 1])->count();
        if ($categoryCount > 0) {
            Paginator::useBootstrap();
            //echo "Category Exists";die;
            $categoryDetails = Category::catDetails($url);
            // echo "<pre>";print_r($categoryDetails);die;
            $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1);
            //checking sort option selection
            if(isset($_GET['sort']) && !empty($_GET['sort'])){
                if($_GET['sort']=="product_latest"){
                    $categoryProducts->orderBy('id','desc');
                }else if($_GET['sort']=="product_name_a_z"){
                    $categoryProducts->orderBy('product_name','asc');
                }else if($_GET['sort']=="product_name_z_a"){
                    $categoryProducts->orderBy('product_name','desc');
                }else if($_GET['sort']=="price_lowest"){
                    $categoryProducts->orderBy('product_price','asc');
                }else if($_GET['sort']=="price_highest"){
                    $categoryProducts->orderBy('product_price','desc');
                }
            }else{
            }
            $categoryProducts = $categoryProducts->paginate(3);
            return view('front.products.listing')->with(compact('categoryDetails', 'categoryProducts', 'page_name'));
        } else {
            abort(404);
        }
    }
}
