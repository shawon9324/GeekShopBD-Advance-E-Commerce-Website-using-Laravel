<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function category()
  {
    return $this->belongsTo('App\Category', 'category_id');
  }
  public function section()
  {
    return $this->belongsTo('App\Section', 'section_id');
  }
  public function brand()
  {
    return $this->belongsTo('App\Brand', 'brand_id');
  }
  public function attributes()
  {
    return $this->hasMany('App\ProductsAttribute');
  }
  public function images()
  {
    return $this->hasMany('App\ProductsImage');
  }
  public static function productFilters(){
    //All product filters

        $productFilters['generationArray'] = array('3rd Gen', '4th Gen', '5th Gen', '6th Gen', '7th Gen', '8th Gen', '9th Gen', '10th Gen');
        $productFilters['processorArray'] = array('Atom', 'AMD', 'CDC', 'PQC', 'Intel Core i3', 'Intel Core i5', 'Intel Core i7', 'Intel Core i9', 'Ryzen 3', 'Ryzen 5', 'Ryzen 7', 'Ryzen 9');
        $productFilters['graphicsArray'] = array('Intel HD', '2GB', '4GB', '6GB', '8GB', '16GB' ,'24GB');
        $productFilters['hddArray'] = array('500GB', '1TB', '2TB', '3TB', '4TB', '6TB');
        $productFilters['ssdArray'] = array('128GB', '256GB', '512GB', '1TB', '2TB');
        $productFilters['ramArray'] = array('2 GB', '4 GB', '8 GB', '16 GB', '32 GB', '64 GB');
        return $productFilters;

  }
}
