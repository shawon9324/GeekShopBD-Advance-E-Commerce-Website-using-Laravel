<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories()
    {
        return $this->hasMany('App\Category', 'parent_id')->where('status', 1);
    }
    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id')->select('id', 'name');    //only fetch section name 
    }

    public function parentcategory()
    {
        return $this->belongsTo('App\Category', 'parent_id')->select('id', 'category_name');   //only fetch parent category name
    }
    public static function catDetails($url)
    {
        $catDetails = Category::select('id', 'parent_id', 'category_name', 'url', 'description')->with(['subcategories' => function ($query) {
            $query->select('id', 'parent_id', 'category_name', 'url')->where('status', 1);
        }])->where('url', $url)->first()->toArray();  //get All category Data
        if ($catDetails['parent_id'] == 0) {
            //show only main category in breadcrumb
            $breadcrumbs = '<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page"><a href="' . url($catDetails['url']) . '">' . $catDetails['category_name'] . '</a></li>';
        } else {
            //show main category and sub category in breadcrumb
            $parentCategory = Category::select('category_name', 'url', 'description')->where('id', $catDetails['parent_id'])->first()->toArray();
            // $breadcrumbs = '<a href="' . url($parentCategory['url']) . '">' . $parentCategory['category_name'] .
            //     '</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="' . url($catDetails['url']) . '">' . $catDetails['category_name'] . '</a>';

                $breadcrumbs= '<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page"><a href="' . url($parentCategory['url']).'">'. $parentCategory['category_name'] .'</a></li>'
                .'<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page"><a href="'. url($catDetails['url']) .'">'. $catDetails['category_name'] .'</a></li>';
        }
        $catIds = array();  //initialize empty array
        $catIds[] = $catDetails['id']; //store the category id
        //store also sub category ID in array
        foreach ($catDetails['subcategories'] as $key => $subCat) {
            $catIds[] = $subCat['id'];
        }
        return array('catIds' => $catIds, 'catDetails' => $catDetails, 'breadcrumbs' => $breadcrumbs);
    }
}
