<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
class Cart extends Model
{
    protected $fillable = [
        'quantity'
    ];
    use HasFactory;

    public static function userCartItems(){
        if(Auth::check()){
            $userCartItems = Cart::with(['product'=>function($query){
                $query->select('id','product_name','product_code','product_price','main_image','product_discount');
            }])->where('user_id',Auth::user()->id)->orderBy('id','Desc')->get()->toArray();
        }else{
            $userCartItems = Cart::with(['product'=>function($query){
                $query->select('id','product_name','product_code','product_price','main_image','product_discount');
            }])->where('session_id',Session::get('session_id'))->orderBy('id','Desc')->get()->toArray();
        }
        return $userCartItems;
    }
    public function product(){
        return $this->belongsTo('App\Product','product_id');
    }
    public static function getProductAttrPrice($product_id,$color){
        $attrPrice = ProductsAttribute::select('price')->where(['product_id'=>$product_id,'color'=>$color])->first()->toArray();
        return $attrPrice['price'];
    }
}
