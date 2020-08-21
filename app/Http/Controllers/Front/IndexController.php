<?php

namespace App\Http\Controllers\Front;

use App\Banner;
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
        $banner_tops = Banner::where(['banner_position'=>'Top','status'=>1])->limit(1)->get()->toArray();
        $banner_middle_slider_1 = Banner::where(['banner_position'=>'Middle-Slider-1','status'=>1])->limit(1)->get()->toArray();
        $banner_middle_slider_2 = Banner::where(['banner_position'=>'Middle-Slider-2','status'=>1])->limit(1)->get()->toArray();
        $banner_middle_slider_3 = Banner::where(['banner_position'=>'Middle-Slider-3','status'=>1])->limit(1)->get()->toArray();
        $banner_bottoms = Banner::where(['banner_position'=>'Bottom','status'=>1])->limit(1)->get()->toArray();
        // $featured_items_chunk =array_chunk($featured_items,4);
        //echo "<pre>";
        //dd($banner_middle_slider_2);die;
        return view('front.index')->with(compact('page_name',
                                                 'featured_items',
                                                 'latest_products',
                                                 'latest_desktop_pc_products',
                                                 'latest_laptop_netbook_products',
                                                 'banner_tops',
                                                 'banner_middle_slider_1',
                                                 'banner_middle_slider_2',
                                                 'banner_middle_slider_3',
                                                 'banner_bottoms',
                                                ));
    }
}
