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

    
    public function exam(){
        $collection = collect([73,27,47,31,49,21,53,81,63,88,67,88,71,70])->sort()->toArray();      //binning data
        $groups = array_chunk($collection,3);
        $groups = json_decode(json_encode($groups),true);
        


        $data = collect([73,27,47,31,49,21,53,81,63,88,67,88,71,70]);
        $max_value = $data->max();
        $min_value = $data->min();
        $new_min = 0;
        $new_max = 1;

        $target_value = 73;
        $output_minMax =((($target_value-$min_value)/($max_value-$min_value))*($new_max-$new_min))+$new_min;


        $data_1 = [185,72];
        $data_2 = [170,56];
        $data_3 = [168,60];
        $data_4 = [179,68];
        $data_5 = [182,72];
        $data_6 = [188,77];
        // $data_7 = [185,72];
        // $data_8 = [185,72];
        // $data_9 = [185,72];

        $c1= [185,72];
        $c2= [170,56];

        $data_1_it1 = sqrt((pow(($data_1[0]-$c1[0]),2))+(pow(($data_1[1]-$c1[1]),2)));
        $data_2_it1 = sqrt((pow(($data_2[0]-$c1[0]),2))+(pow(($data_2[1]-$c1[1]),2)));
        $data_3_it1 = sqrt((pow(($data_3[0]-$c1[0]),2))+(pow(($data_3[1]-$c1[1]),2)));
        $data_4_it1 = sqrt((pow(($data_4[0]-$c1[0]),2))+(pow(($data_4[1]-$c1[1]),2)));
        $data_5_it1 = sqrt((pow(($data_5[0]-$c1[0]),2))+(pow(($data_5[1]-$c1[1]),2)));
        $data_6_it1 = sqrt((pow(($data_6[0]-$c1[0]),2))+(pow(($data_6[1]-$c1[1]),2)));

        // echo "<pre>";print_r($collection);
        // echo "<pre>";print_r($groups);die;
        return view('front.others.exam')->with(compact('collection','groups','output_minMax','target_value',
        'data_1_it1',
        'data_2_it1',
        'data_3_it1',
        'data_4_it1',
        'data_5_it1',
        'data_6_it1',
        'data_1_it1',
        'max_value',
        'min_value',
    
    
    
    ));
    }



}
