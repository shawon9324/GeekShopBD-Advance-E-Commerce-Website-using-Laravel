<?php 

    function getDiscountedPrice($price,$discount){
        $discounted_price = $price - round(($price * $discount) / 100);
        return $discounted_price;
    }
    function productUrl($model){
        $productUrl = strtolower(str_replace('+', '-', urlencode($model)));
        return $productUrl;
    }
    function makeProductUrl($model,$product_id){
        $productUrl = (strtolower(str_replace('+', '-', urlencode($model)))).'-'.$product_id;
        return $productUrl;
    }
    function ratingPercentage ($rating,$total){
        if($total == 0){
         return $ratingPercentage=0;
        }else{
            $ratingPercentage = round(($rating*100)/$total);
            return $ratingPercentage;
        }
        
    }
