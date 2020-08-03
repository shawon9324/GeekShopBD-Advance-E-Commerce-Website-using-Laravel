<?php

use Illuminate\Database\Seeder;
use App\ProductsImage;
class ProductsImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reconds= [
            [
                'id' => 1,
                'product_id'=>1,
                'image'=>'92775-single_2.jpg',
                'status'=>1
            ]
        ];
        ProductsImage::insert($reconds);
    }
}
