<?php

use App\Banner;
use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bannerRecords = [
            [
                'id'=>1,
                'banner_position'=>'Top',
                'image'=>'banner_product.png',
                'link'=>'',
                'title'=>'Smartphone at Best Price',
                'product_name'=>'Apple Iphone 11',
                'new_price'=>'110000',
                'old_price'=>'115000',
                'alt'=>'Apple Iphone 11',
                'status'=>1,
            ],
            [
                'id'=>2,
                'banner_position'=>'Middle',
                'image'=>'banner_product_2.png',
                'link'=>'',
                'title'=>'Smartphone at Best Price',
                'product_name'=>'Apple Iphone 11 PRO',
                'new_price'=>'130000',
                'old_price'=>'120000',
                'alt'=>'Apple Iphone 11 PRO',
                'status'=>1,
            ],

        ];
        Banner::insert($bannerRecords);
    }
}
