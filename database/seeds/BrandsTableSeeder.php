<?php

use App\Brand;
use Illuminate\Database\Seeder;
class BrandsTableSeeder extends Seeder
{

    public function run()
    {
        // $brandsRecord = [
        //     ['id'=> 1,'name'=>'Asus','status'=>1],
        //     ['id'=> 2,'name'=>'HP','status'=>1],
        //     ['id'=> 3,'name'=>'MSI','status'=>1],
        //     ['id'=> 4,'name'=>'Razor','status'=>1],
        //     ['id'=> 5,'name'=>'Apple','status'=>1],
        // ];
        $brandArray = array( 'Razer' ,'Asus' ,'Acer', 'Dell', 'HP' ,'Benq', 'Esonic', 'GIGABYTE', 'LG' ,'XIAOMI' ,'PHILIPS' ,'Viewsonic', 'Viewsonic','Lenovo', 'MacBook', 'Surface' ,'Chuwi' ,'Huawei', 'Mi', 'MSI' ,'AVITA' ,'Walton', 'Nexstgo' ,'iLife' );
        foreach($brandArray as $brand){
            $brandsRecord = [
                'name' =>$brand,
                'status'=>1,
            ];
            Brand::insert($brandsRecord);
        }
    }
}
