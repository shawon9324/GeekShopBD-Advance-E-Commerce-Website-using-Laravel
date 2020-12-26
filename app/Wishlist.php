<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Model
{
    use HasFactory;
    
    public function product(){
        return $this->belongsTo('App\Product','product_id');
    }
    public static function wishListItems(){
        if(Auth::check()){
            $wishListItems = Wishlist::with(['product'=>function($query){
                $query->select('id','product_name','product_price','main_image','product_discount','product_model');
            }])->where('user_id',Auth::user()->id)->orderBy('id','Desc')->get()->toArray();
        }
        return $wishListItems;
    }
}
