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
                'stock'=>10,
                'sku'=>'APMC0001'
            ],
            [
                'id'=>2,
                'product_id'=>2,
                'stock'=>15,
                'sku'=>'ASD0002'
            ],
        ];
        ProductsAttribute::insert($productsAttributeRecords);
    }
}
