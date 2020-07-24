<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [   
                'id' => 1,
                'name' => 'admin',
                'type' => 'admin',
                'mobile' => '+880174339279',
                'email' => 'admin@geekshopbd.com',
                'password' => bcrypt('12345bd'),
                'image' => '',
                'status' =>1
            ],
            [   
                'id' => 2,
                'name' => 'shawon',
                'type' => 'subadmin',
                'mobile' => '+8801788551420',
                'email' => 'shawon@geekshopbd.com',
                'password' => bcrypt('12345bd'),
                'image' => '',
                'status' =>1
            ],
            [   
                'id' => 3,
                'name' => 'rafsan',
                'type' => 'subadmin',
                'mobile' => '+8801796834737',
                'email' => 'rafsan@geekshopbd.com',
                'password' => bcrypt('12345bd'),
                'image' => '',
                'status' =>1
            ],
            [   
                'id' => 4,
                'name' => 'saif',
                'type' => 'subadmin',
                'mobile' => '+8801744632929',
                'email' => 'saif@geekshopbd.com',
                'password' => bcrypt('12345bd'),
                'image' => '',
                'status' =>1
            ],
        ];
       DB::table('admins')->insert($adminRecords);
    }
}
