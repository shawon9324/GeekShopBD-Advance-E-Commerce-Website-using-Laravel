<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function listing($url)
    {
        $page_name = 'Products';
        $categoryCount = Category::where(['url' => $url, 'status' => 1])->count();
        if ($categoryCount > 0) {
            //echo "Category Exists";die;
            $categoryDetails = Category::catDetails($url);
            // echo "<pre>";print_r($categoryDetails);die;
            $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1)->get()->toArray();
            return view('front.products.listing')->with(compact('categoryDetails', 'categoryProducts', 'page_name'));
        } else {
            abort(404);
        }
    }
}
