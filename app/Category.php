<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories(){
        return $this->hasMany('App\Category','parent_id')->where('status',1);
    }
    public function section(){
        return $this->belongsTo('App\Section','section_id')->select('id','name');    //only fetch section name 
    }
    public function parentcategory(){
        return $this->belongsTo('App\Category','parent_id')->select('id','category_name');   //only fetch parent category name
    }
    public static function categoryDetails($url){
        $cateogryDetails = Category::select('id','category_name','url')->with(['subcategories'=>function($query){
            $query->select('id','parent_id')->where('status',1);
        }])->where('url',$url)->first()->toArray();  //get All category Data
        $catIds = array();  //initialize empty array
        $catIds[] = $cateogryDetails['id']; //store the category id
        //store also sub category ID in array
        foreach ($cateogryDetails['subcategories'] as $key => $subCat) {
            $catIds[] = $subCat['id'];
        }
        return array(['catIds'=>$catIds,'categoryDetails'=>$cateogryDetails]);
    }
    
}