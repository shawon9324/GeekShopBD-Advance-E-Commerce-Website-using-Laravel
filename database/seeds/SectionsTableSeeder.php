<?php

use Illuminate\Database\Seeder;
use App\Section;
class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionsRecords =[
            [
                'id'=>1,
                'name'=>'Desktop',
                'status'=>1
            ],
            [
                'id'=>2,
                'name'=>'Laptop',
                'status'=>0
            ],
            [
                'id'=>3,
                'name'=>'Accessories',
                'status'=>1
            ],
            [
                'id'=>4,
                'name'=>'Gadget',
                'status'=>0
            ],
            [
                'id'=>5,
                'name'=>'Offers',
                'status'=>1
            ],
            [
                'id'=>6,
                'name'=>'Upcoming Product',
                'status'=>1
            ]
        ];
        Section::insert($sectionsRecords);
    }
}
