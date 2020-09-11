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
            $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1)->paginate(3);
            // $categoryProducts = $categoryProducts->paginate(2);
            return view('front.products.listing')->with(compact('categoryDetails', 'categoryProducts', 'page_name'));
        } else {
            abort(404);
        }
    }
}
