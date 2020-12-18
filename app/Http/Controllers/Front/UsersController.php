<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
