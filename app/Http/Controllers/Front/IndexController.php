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

        $latest_desktop_pc_products = Product::where(['section_id' => 1, 'status' => 1])->orderby('id', 'Desc')->limit(8)->get()->toArray();
        $latest_laptop_netbook_products = Product::where(['section_id' => 2, 'status' => 1])->orderby('id', 'Desc')->limit(8)->get()->toArray();
        $latest_smartphone_tablets = Product::where(['section_id' => 3, 'status' => 1])->orderby('id', 'Desc')->limit(8)->get()->toArray();
        $banner_top_slider_1 = Banner::where(['banner_position' => 'Top-Slider-1', 'status' => 1])->limit(1)->get()->toArray();
        $banner_top_slider_2 = Banner::where(['banner_position' => 'Top-Slider-2', 'status' => 1])->limit(1)->get()->toArray();
        $banner_top_slider_3 = Banner::where(['banner_position' => 'Top-Slider-3', 'status' => 1])->limit(1)->get()->toArray();
        $banner_middle = Banner::where(['banner_position' => 'Middle', 'status' => 1])->limit(1)->get()->toArray();
        $banner_bottom = Banner::where(['banner_position' => 'Bottom', 'status' => 1])->limit(1)->get()->toArray();
       
        //SECTIONS PRODUCTS SHOWCASE - MID PANEL
        $top_product = Product::with(['category'=> function ($query){
            $query->select('id','category_name','url');
        },'images'=> function ($query){
            $query->select('product_id','image');
            }]) ->where(['section_id' => 1, 'status' => 1])
                ->select('id','category_id','product_name','product_price','product_discount','product_model','main_image')
                ->orderby('id', 'Desc')->first()->toArray();
        $top_desktopsL = Product::with(['category'=> function ($query){
            $query->select('id','category_name','url');
        }]) ->where(['section_id' => 1, 'status' => 1])
                ->select('id','category_id','product_name','product_price','product_discount','product_model','main_image')
                ->limit(4)->inRandomOrder()->get()->toArray();
        $top_desktopsR = Product::with(['category'=> function ($query){
            $query->select('id','category_name','url');
        }]) ->where(['section_id' => 1, 'status' => 1])
                ->select('id','category_id','product_name','product_price','product_discount','product_model','main_image')
                ->limit(4)->inRandomOrder()->get()->toArray();
        $top_laptops = Product::with(['category'=> function ($query){
            $query->select('id','category_name','url');
        }]) ->where(['section_id' => 2, 'status' => 1])
                ->select('id','category_id','product_name','product_price','product_discount','product_model','main_image')
                ->limit(8)->inRandomOrder()->get()->toArray();
        $top_smartphone = Product::with(['category'=> function ($query){
            $query->select('id','category_name','url');
        }]) ->where(['section_id' => 3, 'status' => 1])
                ->select('id','category_id','product_name','product_price','product_discount','product_model','main_image')
                ->limit(8)->inRandomOrder()->get()->toArray();
        $top_camera = Product::with(['category'=> function ($query){
            $query->select('id','category_name','url');
        }]) ->where(['section_id' => 4, 'status' => 1])
                ->select('id','category_id','product_name','product_price','product_discount','product_model','main_image')
                ->limit(8)->inRandomOrder()->get()->toArray();
        $top_accessories = Product::with(['category'=> function ($query){
            $query->select('id','category_name','url');
        }]) ->where(['section_id' => 5, 'status' => 1])
                ->select('id','category_id','product_name','product_price','product_discount','product_model','main_image')
                ->limit(8)->inRandomOrder()->get()->toArray();
        $top_gadget = Product::with(['category'=> function ($query){
            $query->select('id','category_name','url');
        }]) ->where(['section_id' => 6, 'status' => 1])
                ->select('id','category_id','product_name','product_price','product_discount','product_model','main_image')
                ->limit(8)->inRandomOrder()->get()->toArray();

        // echo "<pre>";
        // print_r($top_desktopsR);die;

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
            'top_product',
            'top_desktopsL',
            'top_desktopsR',
            'top_laptops',
            'top_smartphone',
            'top_accessories',
            'top_gadget',
            'top_camera'
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
