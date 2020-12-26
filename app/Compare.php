<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Session;
class Compare extends Model
{
    use HasFactory;
    public function attributes()
    {
        return $this->belongsTo('App\ProductsAttribute','product_id');
    }
    public function product(){
        return $this->belongsTo('App\Product','product_id');
    }
    public static function compareItems(){
        if(Auth::check()){
            $compareItems = Compare::with('product')->where('user_id',Auth::user()->id)->get()->toArray();
        }else{
            $compareItems = Compare::with('product')->where('session_id',Session::get('session_id'))->get()->toArray();
        }
        return $compareItems;
    }

}
