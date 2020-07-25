<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryREcords= [
            [
                'id'=>1,
                'parent_id'=>0,
                'section_id'=>1,
                'category_name'=>'All in One PC',
                'category_image' =>'',
                'category_discount'=>0,
                'description'=>'',
                'url'=>'all-in-one-pc',
                'meta_title'=>'',
                'meta_description' => '',
                'meta_keywords'=>'',
                'status'=>1
            ],
            [
                'id'=>2,
                'parent_id'=>0,
                'section_id'=>1,
                'category_name'=>'Gaming PC',
                'category_image' =>'',
                'category_discount'=>0,
                'description'=>'',
                'url'=>'gaming-pc',
                'meta_title'=>'',
                'meta_description' => '',
                'meta_keywords'=>'',
                'status'=>1
            ],
            [
                'id'=>3,
                'parent_id'=>0,
                'secton_id'=>1,
                'category_name'=>'Desktop Components',
                'category_image' =>'',
                'category_discount'=>0,
                'description'=>'',
                'url'=>'desktop-components',
                'meta_title'=>'',
                'meta_description' => '',
                'meta_keywords'=>'',
                'status'=>1
            ],
        ];
        Category::insert($categoryREcords);

    }
}
