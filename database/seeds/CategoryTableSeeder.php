<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        // $categoryREcords= [
        //     [
        //         'id'=>1,
        //         'parent_id'=>0,
        //         'section_id'=>1,
        //         'category_name'=>'All in One PC',
        //         'category_image' =>'',
        //         'category_discount'=>0,
        //         'description'=>'',
        //         'url'=>'all-in-one-pc',
        //         'meta_title'=>'',
        //         'meta_description' => '',
        //         'meta_keywords'=>'',
        //         'status'=>1
        //     ],
        //     [
        //         'id'=>2,
        //         'parent_id'=>0,
        //         'section_id'=>1,
        //         'category_name'=>'Gaming PC',
        //         'category_image' =>'',
        //         'category_discount'=>0,
        //         'description'=>'',
        //         'url'=>'gaming-pc',
        //         'meta_title'=>'',
        //         'meta_description' => '',
        //         'meta_keywords'=>'',
        //         'status'=>1
        //     ],
        //     [
        //         'id'=>3,
        //         'parent_id'=>0,
        //         'secton_id'=>1,
        //         'category_name'=>'Desktop Components',
        //         'category_image' =>'',
        //         'category_discount'=>0,
        //         'description'=>'',
        //         'url'=>'desktop-components',
        //         'meta_title'=>'',
        //         'meta_description' => '',
        //         'meta_keywords'=>'',
        //         'status'=>1
        //     ],
        // ];
        // Category::insert($categoryREcords);
        // $categoryArray = array( 'Razer' ,'Asus' ,'Acer', 'Dell', 'HP' ,'Benq', 'Esonic', 'GIGABYTE', 'LG' ,'XIAOMI' ,'PHILIPS' ,'Viewsonic', 'Viewsonic','Lenovo', 'MacBook', 'Surface' ,'Chuwi' ,'Huawei', 'Mi', 'MSI' ,'AVITA' ,'Walton', 'Nexstgo' ,'iLife' );
        // $categoryArray = array( 'All Laptop' ,'Gaming Laptop' ,'Premium Ultrabook', 'Laptop Accessories'); //section :laptop
        // $categoryArray = array( 'Razer' ,'Asus' ,'Acer', 'Dell', 'HP','Lenovo', 'MacBook', 'Surface' ,'Huawei', 'Mi', 'MSI' ,'Walton','iLife'  ); //section :
        // $categoryArray = array('RAZER' ,'HP', 'Asus' ,'MSI','GIGABYTE','Acer','Dell','Lenovo','XIAOMI'); //GAMING LAPTOP :
        // $categoryArray = array('Adapter' ,'Cooler' ,'Bag', 'Keyboard' ,'Locker' ,'CADDY', 'Display' ,'DVD-Writer'  ,'Battery', 'Laptop-Desk'); //GAMING LAPTOP :
        // $categoryArray = array('iPhone','Samsung','Nokia','Huawei','Xiaomi','OPPO','OnePlus','Honor','Motorola','vivo','realme'); //GAMING LAPTOP :
        // $categoryArray = array('Apple Tablet','Asus','Huawei','Lenovo','Samsung','TwinMOS','Wacom'); 
        // $categoryArray = array('DSLR' ,'Digital Camera', 'Handycam' ,'Camera Lenses' ,'Action Camera' ,'Gimbal' ,'Video Camera' ,'Camera Flash' ,'Camera Tripod'); 
        // $categoryArray = array('Keyboard','Mouse','Headphone','Mouse Pad','Speaker' ,'Bluetooth Speakers','Ear Phone','Webcam','Microphone','Capture Card','Pen Drive','Memory Card','Power Bank','Converter Cable','HDD-SSD' ,'Audio Adaptor','Lighting Strips'); 
        
        $categoryArray = array('Smart Watch' ,'Daily Lifestyle', 'TV Box' ,'Calculator', 'Blower'); 
            foreach($categoryArray as $cat){
            $categoryRecords = [
                'parent_id'=>0,
                'section_id'=>6,
                'category_name'=>$cat,
                'category_image' =>'',
                'category_discount'=>0,
                'description'=>$cat,
                'url'=>'gadget/'.strtolower(str_replace('+','-',urlencode($cat))),
                // 'url'=>'tablet/'.strtolower($cat),
                'meta_title'=>$cat,
                'meta_description' => $cat,
                'meta_keywords'=>strtolower($cat),
                'status'=>1
            ];
            Category::insert($categoryRecords);
        }
    }
}
