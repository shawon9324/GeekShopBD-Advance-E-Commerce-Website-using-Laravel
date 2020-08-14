<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $page_name = "index";
        $featured_item_count = Product::where('is_featured','Yes')->count();
        $featured_items = Product::where('is_featured','Yes')->get()->toArray();
        // $featured_items_chunk =array_chunk($featured_items,4);
        // echo "<pre>";
        // dd($featured_items_chunk);die;
        
        return view('front.index')->with(compact('page_name','featured_items'));
    }
}
