<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
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
        $productFilters['hddArray'] = array('500GB', '1 TB', '2 TB', '3 TB', '4 TB', '6 TB');
        $productFilters['ssdArray'] = array('128GB', '256GB', '512GB', '1TB', '2TB');
        $productFilters['ramArray'] = array('2 GB', '4 GB', '8 GB', '16 GB', '32 GB', '64 GB');
        return $productFilters;
  }
  public static function getDiscountedPrice($product_id){
    $proDetails = Product::select('product_price','product_discount','category_id')->where('id',$product_id)->first()->toArray();
    $catDetails = Category::select('category_discount')->where('id',$proDetails['category_id'])->first()->toArray();
    if($proDetails['product_discount']>0){
      $discounted_price = $proDetails['product_price'] - (($proDetails['product_price']*$proDetails['product_discount'])/100);
    }else if($catDetails['category_discount']>0){
      $discounted_price = $proDetails['product_price'] - (($proDetails['product_price']*$catDetails['category_discount'])/100);
    }else{
      $discounted_price = 0;
    }
    return $discounted_price;
  }
  public static function getDiscountedAttrPrice($product_id,$color){
    $product_attrPrice = ProductsAttribute::where(['product_id'=>$product_id,'color'=>$color])->first()->toArray();
    $proDetails = Product::select('product_discount','category_id')->where('id',$product_id)->first()->toArray();
    $catDetails = Category::select('category_discount')->where('id',$proDetails['category_id'])->first()->toArray();
    if($proDetails['product_discount']>0){
      $final_price = $product_attrPrice['price'] - (($product_attrPrice['price']*$proDetails['product_discount'])/100);
      $discount = $product_attrPrice['price'] - $final_price;
    }else if($catDetails['category_discount']>0){
      $final_price = $product_attrPrice['price'] - (($product_attrPrice['price']*$catDetails['category_discount'])/100);
      $discount = $product_attrPrice['price'] - $final_price;
    }else{
      $final_price = $product_attrPrice['price'];
      $discount = 0;
    }
    return array('product_price'=>$product_attrPrice['price'],'final_price'=>$final_price,'discount'=>$discount);
  }
}
