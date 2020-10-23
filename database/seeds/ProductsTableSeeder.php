<?php

use App\Category;
use Illuminate\Database\Seeder;
use App\Product;
use App\Section;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    
    public function run()
    {
        // $productRecords =[
        //     [
        //         'id'=>1,
        //         'category_id'=>2,
        //         'section_id'=>2,
        //         'product_name'=>'Apple MacBook Air 13.3-Inch',
        //         'product_model'=>'Apple Macbook Air 2020',
        //         'product_code'=>'12875',
        //         'product_mpn'=>'MWTJ2ZP/A',
        //         'product_price'=>110000,
        //         'product_regular_price'=>121000,
        //         'product_discount'=>0,
        //         'product_video'=>' ',
        //         'main_image'=>' ',
        //         'description'=>'Apple MacBook Air 13.3-Inch 10th Gen Core i3-1.1GHz, 8GB RAM, 256GB SSD (MWTJ2) Space Gray 2020',
        //         'warranty'=>'01 year International Limited Warranty',

        //         'feature_1'=>'Intel® Core™ i3-7100U',
        //         'feature_2'=>'Ram 8GB 2444 mHz',
        //         'feature_3'=>'Gaming Mode Enabled',
        //         'feature_4'=>'Long Lasting Battery',
        //         'feature_5'=>'Asus Official Support',
                
        //         'generation'=>'10th Gen',
        //         'hdd'=>'1TB',
        //         'ssd'=>'256GB',
        //         'ram'=>' 8 GB',
        //         'graphics'=>'MSI RTX 2060s',
        //         'processor'=>'Intel',

        //         'meta_title'=>' ',
        //         'meta_description'=>' ',
        //         'meta_keywords'=>' ',
        //         'is_featured'=>'Yes',
        //         'status'=>1
        //     ],
        //     [
        //         'id'=>2,
        //         'category_id'=>1,
        //         'section_id'=>1,
        //         'product_name'=>'Asus AIO A4321UKH Core i3 7th Gen PC',
        //         'product_model'=>'Asus AIO A4321UKH',
        //         'product_code'=>'7732',
        //         'product_mpn'=>'MXYZ2ZPC/PC',
        //         'product_price'=>48500,
        //         'product_regular_price'=>48500,
        //         'product_discount'=>0,
        //         'product_video'=>' ',
        //         'main_image'=>' ',
        //         'description'=>'Asus AIO A4321UKH all in one PC with Intel core i3-7100U processor',
        //         'warranty'=>'01 Year Warranty',
                
        //         'feature_1'=>'Intel® Core™ i3-7100U',
        //         'feature_2'=>'Ram 8GB 2444 mHz',
        //         'feature_3'=>'Gaming Mode Enabled',
        //         'feature_4'=>'Long Lasting Battery',
        //         'feature_5'=>'Asus Official Support',
                
        //         'generation'=>'10th Gen',
        //         'hdd'=>'1TB',
        //         'ssd'=>'256GB',
        //         'ram'=>' 8 GB',
        //         'graphics'=>'MSI RTX 2060s',
        //         'processor'=>'Intel',

        //         'meta_title'=>' ',
        //         'meta_description'=>' ',
        //         'meta_keywords'=>' ',
        //         'is_featured'=>'Yes',
        //         'status'=>1
        //     ],
            
        // ];
        // Product::insert($productRecords);

        $productFilters = Product::productFilters();
        $generationArray =$productFilters['generationArray'];
        $processorArray =$productFilters['processorArray'];
        $graphicsArray =$productFilters['graphicsArray'];
        $hddArray =$productFilters['hddArray'];
        $ssdArray =$productFilters['ssdArray'];
        $ramArray =$productFilters['ramArray'];
        $faker = Faker::create();
        foreach(range(1,2) as $value){
            $productRecords = [
                'category_id'=>16,//
                'section_id'=>1,//
                'brand_id'=>$faker->numberBetween(1,13),//
                'product_name'=>ucfirst($faker->text('30')),
                'product_model'=>ucfirst($faker->text('15')),
                'product_code'=> $faker->swiftBicNumber,
                'product_mpn'=>$faker->swiftBicNumber,
                'product_price'=>$faker->randomFloat(2, 5000, 100000),
                'product_discount'=>0,
                'main_image'=>$faker->imageUrl(700, 660, 'cats'),
                'description'=>$faker->text(200),
                'warranty'=>$faker->numberBetween(1,5),
                'feature_1'=>ucfirst($faker->text('15')),
                'feature_2'=>ucfirst($faker->text('15')),
                'feature_3'=>ucfirst($faker->text('15')),
                'feature_4'=>ucfirst($faker->text('15')),
                'feature_5'=>ucfirst($faker->text('15')),
                'generation'=>$faker->randomElement($generationArray),
                'hdd'=>$faker->randomElement($hddArray),
                'ssd'=>$faker->randomElement($ssdArray),
                'ram'=>$faker->randomElement($ramArray),
                'graphics'=>$faker->randomElement($graphicsArray),
                'processor'=>$faker->randomElement($processorArray),
                'meta_title'=>ucfirst($faker->text('15')),
                'meta_description'=>ucfirst($faker->text('35')),
                'meta_keywords'=>strtolower($faker->text('5')),
                'is_featured'=>'Yes',
                'status'=>1
            ];
            Product::insert($productRecords);
        }

    }
}
