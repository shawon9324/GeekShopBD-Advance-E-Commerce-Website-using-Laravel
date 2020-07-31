<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productRecords =[
            [
                'id'=>1,
                'category_id'=>2,
                'section_id'=>2,
                'product_name'=>'Apple MacBook Air 13.3-Inch',
                'product_model'=>'Apple Macbook Air 2020',
                'product_code'=>'12875',
                'product_mpn'=>'MWTJ2ZP/A',
                'product_price'=>110000,
                'product_regular_price'=>121000,
                'product_discount'=>0,
                'product_video'=>' ',
                'main_image'=>' ',
                'description'=>'Apple MacBook Air 13.3-Inch 10th Gen Core i3-1.1GHz, 8GB RAM, 256GB SSD (MWTJ2) Space Gray 2020',
                'warranty'=>'01 year International Limited Warranty',

                'feature_1'=>'Intel® Core™ i3-7100U',
                'feature_2'=>'Ram 8GB 2444 mHz',
                'feature_3'=>'Gaming Mode Enabled',
                'feature_4'=>'Long Lasting Battery',
                'feature_5'=>'Asus Official Support',
                
                'generation'=>'10th Gen',
                'hdd'=>'1TB',
                'ssd'=>'256GB',
                'ram'=>' 8 GB',
                'grahphics'=>'MSI RTX 2060s',
                'processor'=>'Intel',

                'meta_title'=>' ',
                'meta_description'=>' ',
                'meta_keywords'=>' ',
                'is_featured'=>'Yes',
                'status'=>1
            ],
            [
                'id'=>2,
                'category_id'=>1,
                'section_id'=>1,
                'product_name'=>'Asus AIO A4321UKH Core i3 7th Gen PC',
                'product_model'=>'Asus AIO A4321UKH',
                'product_code'=>'7732',
                'product_mpn'=>'MXYZ2ZPC/PC',
                'product_price'=>48500,
                'product_regular_price'=>48500,
                'product_discount'=>0,
                'product_video'=>' ',
                'main_image'=>' ',
                'description'=>'Asus AIO A4321UKH all in one PC with Intel core i3-7100U processor',
                'warranty'=>'01 Year Warranty',
                
                'feature_1'=>'Intel® Core™ i3-7100U',
                'feature_2'=>'Ram 8GB 2444 mHz',
                'feature_3'=>'Gaming Mode Enabled',
                'feature_4'=>'Long Lasting Battery',
                'feature_5'=>'Asus Official Support',
                
                'generation'=>'10th Gen',
                'hdd'=>'1TB',
                'ssd'=>'256GB',
                'ram'=>' 8 GB',
                'grahphics'=>'MSI RTX 2060s',
                'processor'=>'Intel',

                'meta_title'=>' ',
                'meta_description'=>' ',
                'meta_keywords'=>' ',
                'is_featured'=>'Yes',
                'status'=>1
            ],
            
        ];
        Product::insert($productRecords);

    }
}
