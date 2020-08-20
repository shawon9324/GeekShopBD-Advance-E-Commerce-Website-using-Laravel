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
        $latest_products = Product::where('status',1)->orderby('id','Desc')->limit(20)->get()->toArray();
        $latest_desktop_pc_products = Product::where(['section_id'=>1,'status'=>1])->orderby('id','Desc')->limit(20)->get()->toArray();
        $latest_laptop_netbook_products = Product::where(['section_id'=>2,'status'=>1])->orderby('id','Desc')->limit(20)->get()->toArray();
        // $featured_items_chunk =array_chunk($featured_items,4);
        //echo "<pre>";
        //dd($latest_desktop_pc_products);die;
        
        return view('front.index')->with(compact('page_name',
                                                 'featured_items',
                                                 'latest_products',
                                                 'latest_desktop_pc_products',
                                                 'latest_laptop_netbook_products'));
    }
}
