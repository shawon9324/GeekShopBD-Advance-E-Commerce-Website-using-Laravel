<?php

use Illuminate\Database\Seeder;
use App\ProductsAttribute;
class ProductsAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productsAttributeRecords =[
            [
                'id'=>1,
                'product_id'=>1,
                'sku'=>'PRO1-ASUS',
                'color'=>'Red',
                'stock'=>10,
                'price'=>'105000',
            ],
            [
                'id'=>2,
                'product_id'=>2,
                'sku'=>'PRO2-HP',
                'color'=>'Black',
                'stock'=>10,
                'price'=>'905000',
            ],
        ];
        ProductsAttribute::insert($productsAttributeRecords);
    }
}
