<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    use HasFactory;
    public static function sendSms($message,$mobile){
      /*Code for SMS Script Starts*/
    $request ="";
    $param['authorization']="688bf25e523fbfa1293fd39e84310f53-24df9083-a646-431b-a2bb-04cc832a2ada";
    $param['sender_id'] = 'InfoSMS';
    $param['message']= $message;
    $param['numbers']= $mobile;
    $param['language']="english";
    $param['route']="p";
    foreach($param as $key=>$val) {
        $request.= $key."=".urlencode($val);
        $request.= "&";
    }
    $request = substr($request, 0, strlen($request)-1);
    $url ="https://gy9vqj.api.infobip.com/sms/2/text/advanced".$request;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $curl_scraped_page = curl_exec($ch);
    curl_close($ch);
    /*Code for SMS Script Ends*/  
    }
}
