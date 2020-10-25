<?php

namespace App\Http\Controllers\Front;

use App\Banner;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $page_name = "index";
        $featured_item_count = Product::where('is_featured', 'Yes')->count();
        $featured_items = Product::with(['category' => function ($query) {
            $query->select('id', 'category_name','url');
        }])->where(['is_featured'=>'Yes','status'=>1])->orderby('id','Desc')->limit(8)->get()->toArray();
        // echo "<pre>";
        // print_r($featured_items);die;

        $latest_desktop_pc_products = Product::where(['section_id' => 1, 'status' => 1])->orderby('id', 'Desc')->limit(8)->get()->toArray();
        $latest_laptop_netbook_products = Product::where(['section_id' => 2, 'status' => 1])->orderby('id', 'Desc')->limit(8)->get()->toArray();
        $latest_smartphone_tablets = Product::where(['section_id' => 3, 'status' => 1])->orderby('id', 'Desc')->limit(8)->get()->toArray();

        $banner_top_slider_1 = Banner::where(['banner_position' => 'Top-Slider-1', 'status' => 1])->limit(1)->get()->toArray();
        $banner_top_slider_2 = Banner::where(['banner_position' => 'Top-Slider-2', 'status' => 1])->limit(1)->get()->toArray();
        $banner_top_slider_3 = Banner::where(['banner_position' => 'Top-Slider-3', 'status' => 1])->limit(1)->get()->toArray();
        $banner_middle = Banner::where(['banner_position' => 'Middle', 'status' => 1])->limit(1)->get()->toArray();
        $banner_bottom = Banner::where(['banner_position' => 'Bottom', 'status' => 1])->limit(1)->get()->toArray();
       
        // $featured_items_chunk =array_chunk($featured_items,4);
        // echo "<pre>";
        // dd($footer_category);die;
        return view('front.index')->with(compact(
            'page_name',
            'featured_items',
            'latest_desktop_pc_products',
            'latest_laptop_netbook_products',
            'latest_laptop_netbook_products',
            'latest_smartphone_tablets',
            'banner_top_slider_1',
            'banner_top_slider_2',
            'banner_top_slider_3',
            'banner_middle',
            'banner_bottom',

            
        ));
    }
    public function aboutUs(){
        return view('front.others.about_us');
    }
    public function contactUs(){
        return view('front.others.contact_us');
    }
    public function faqs(){
        return view('front.others.faqs');
    }
    public function termsConditions(){
        return view('front.others.terms_conditions');
    }
    public function storeDirectory(){
        return view('front.others.store_directory');
    }


}
