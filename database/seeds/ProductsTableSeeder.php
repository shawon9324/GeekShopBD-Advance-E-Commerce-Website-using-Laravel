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
                'features'=>'Intel Core i3-1000NG4(4M Cache, 1.10 GHz up to 3.20 GHz) Processor',
                'warranty'=>'01 year International Limited Warranty',
                'description'=>'Apple MacBook Air 13.3-Inch 10th Gen Core i3-1.1GHz, 8GB RAM, 256GB SSD (MWTJ2) Space Gray 2020',
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
                'features'=>'Intel® Core™ i3-7100U (2.40 GHz,3 MB SmartCache, Core 2 Threads 4',
                'warranty'=>'01 Year Warranty',
                'description'=>'Asus AIO A4321UKH all in one PC with Intel core i3-7100U processor having 2.40 GHz base frequency, 3M Cache and 4GB DDR4 RAM',
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
