<?php

namespace App\Http\Controllers\Front;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Sms;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Session;
class UsersController extends Controller
{
    public function loginRegister(){

        return view('front.users.login_register');
    }
    public function registerUser(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $userCount = User::where('email',$data['user_email'])->count();
            if($userCount>0){
                alert()->error('Ops...','Account with this email already exists!');
                return redirect()->back();
            }else{
                $user = new User;
                $user->name = $data['user_name'];
                $user->mobile = $data['user_mobile'];
                $user->email = $data['user_email'];
                $user->password = bcrypt($data['user_password']);
                $user->status = 1;
                $user->save();
                if(Auth::attempt(['email'=>$data['user_email'],'password'=>$data['user_password']])){
                     //test send sms
                    //  $message="Successfully Logged In";
                    //  $mobile="01788551420";
                     // Sms::sendSms($message,$mobile);
                    //UPDATE SHOPPING CART WITH USER ID
                    $session_id = Session::get('session_id');
                    if(!empty($session_id)){
                        $user_id = Auth::user()->id;
                        Cart::where('session_id',$session_id)->update(['user_id'=>$user_id]);
                    }
                    $email = $data['user_email'];
                    $messageData = ['name'=>$data['user_name'],'mobile'=>$data['user_mobile'],'email'=>$email];
                    Mail::send('emails.register',$messageData, function($message) use ($email){
                        $message->to($email)->subject('Welcome to GeekshopBD');
                    });
                    return redirect('/shopping-cart');
                }
            }
        }
        // return view('front.users.login_register');
    }

    public function emailCheck(Request $request){
            $data = $request->all();
            $count = User::where('email',$data['user_email'])->count();
            if ($count > 0) {
                echo "false";
            }else{
                echo "true";
            }
    }
    public function loginUser(Request $request){
            if($request->isMethod('post')){
                $data = $request->all();
                if(Auth::attempt(['email'=>$data['login_email'],'password'=>$data['login_password']])){
                   
                    //UPDATE SHOPPING CART WITH USER ID
                    $session_id = Session::get('session_id');
                    if(!empty($session_id)){
                        $user_id = Auth::user()->id;
                        Cart::where('session_id',$session_id)->update(['user_id'=>$user_id]);
                    }
                    toast('Welcome,'.Auth::user()->name,'success');
                    return redirect('/shopping-cart');
                }else{
                    alert()->error('Error!','Invalid email and password');
                    return redirect()->back();
                }
            }
    }
    public function userLogout(){
        Auth::logout();
        return redirect('/');
    }
}
