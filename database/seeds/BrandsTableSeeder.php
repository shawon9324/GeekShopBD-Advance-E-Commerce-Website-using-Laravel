<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brandsRecord = [
            [
                'id'=> 1,
                'name'=>'Asus',
                'status'=>1
            ],
            [
                'id'=> 2,
                'name'=>'HP',
                'status'=>1
            ],
            [
                'id'=> 3,
                'name'=>'MSI',
                'status'=>1
            ],
            [
                'id'=> 4,
                'name'=>'Razor',
                'status'=>1
            ],
            [
                'id'=> 5,
                'name'=>'Apple',
                'status'=>1
            ],

        ];
        Brand::insert($brandsRecord);
    }
}
