<?php

namespace App\Http\Controllers\Front;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Sms;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;

class UsersController extends Controller
{
    public function loginRegister(){
        if(Auth::check()){
            return redirect('/');
        }else{
            return view('front.users.login_register');
        }
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
                $user->status = 0;
                $user->save();

                //Send confirmation Email to User
                $email = $data['user_email'];
                $messageData = [
                    'email'=>$email,
                    'name'=> $data['user_name'],
                    'code'=> base64_encode($email)
                ];
                Mail::send('emails.confirmation',$messageData, function($message) use($email){
                    $message->to($email)->subject('Confirm your GeekshopBD Account');
                });
                //Redirect Back with Success Message
                Auth::logout();
                alert()->success('Confirmation email has been sent','Please confirm to activate your account!');

                return redirect()->back();

                
                // if(Auth::attempt(['email'=>$data['user_email'],'password'=>$data['user_password']])){
                //     /*
                //      send sms after registration
                //      $message="Successfully Logged In";
                //      $mobile="01788551420";
                //      Sms::sendSms($message,$mobile);
                //      */
                //     // UPDATE SHOPPING CART WITH USER ID
                //     $session_id = Session::get('session_id');
                //     if(!empty($session_id)){
                //         $user_id = Auth::user()->id;
                //         Cart::where('session_id',$session_id)->update(['user_id'=>$user_id]);
                //     }
                //     $email = $data['user_email'];
                //     $messageData = ['name'=>$data['user_name'],'mobile'=>$data['user_mobile'],'email'=>$email];
                //     Mail::send('emails.register',$messageData, function($message) use ($email){
                //         $message->to($email)->subject('Welcome to GeekshopBD');
                //     });
                //     return redirect('/shopping-cart');
                // }
            }
        }
    }
    public function confirmAccount($email){
        //decode user email
        $email = base64_decode($email);
        //check user-email exist or not
        $userCount = User::where('email',$email)->count();
        if($userCount>0){
            //user email is already activated or not
            $userDetails = User::where('email',$email)->first();
            if($userDetails->status == 1){
                alert()->warning('Ops...','Your account is already activated.Please login!');
                return redirect('/login-register');
            }else{
                //Update User status 1 to activate user account
                User::where('email',$email)->update(['status'=>1]);
                //  UPDATE SHOPPING CART WITH USER ID
                    $email = $userDetails['email'];
                    $messageData = ['name'=>$userDetails['name'],'mobile'=>$userDetails['mobile'],'email'=>$email];
                    Mail::send('emails.register',$messageData, function($message) use ($email){
                        $message->to($email)->subject('Welcome to GeekshopBD');
                });
                alert()->success('Your Account Activated Successfully','Please Login with your email & Password!');
                return redirect('/login-register');  
            }
        }else{
            abort(404);
        }
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
                    $userStatus = User::where('email',$data['login_email'])->first();
                    if($userStatus->status == 0){
                        Auth::logout();
                        alert()->error('Your account is not activated yet!','Please confirm your email to activate!');                        
                        return redirect()->back();
                    }else{
                        //UPDATE SHOPPING CART WITH USER ID
                        $session_id = Session::get('session_id');
                        if(!empty($session_id)){
                            $user_id = Auth::user()->id;
                            Cart::where('session_id',$session_id)->update(['user_id'=>$user_id]);
                        }
                        toastr()->info('','Welcome, '.Auth::user()->name);
                        return redirect('/');
                    }
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
    public function forgotPassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $emailCount = User::where('email',$data['email'])->count();
            if($emailCount ==0){
                alert()->error('Opps...','Account doest not exists with this email!');
                return redirect()->back();                        
            }else{
                $email = $data['email'];
                $messageData = [
                    'email'=>$email,
                    'auth'=> base64_encode($email)
                ];
                Mail::send('emails.reset_password',$messageData, function($message) use($email){
                    $message->to($email)->subject('Forgot Password of GeekshopBD Account');
                });
                alert()->success('Email sent to you successfully ','Please check your inbox to reset the password');
                // dd($random_password);die;
            }
        }
        return view('front.users.forgot_password');
    }
    public function recoverAccount(Request $request, $email){
            $email_check = base64_decode($email);
            $userCount = User::where('email',$email_check)->count();
            if($userCount>0){
                if($request->isMethod('post')){
                    $data = $request->all();
                    User::where('email',$email_check)->update(['password'=>bcrypt($data['password'])]);
                    Auth::logout();
                    alert()->success('Your password has been changed successfully!','Please Login with your email & Password!');
                    return redirect('/login-register');
                }
            }
            else{
                abort(404);
            }
        return view('front.users.reset_password')->with(compact('email'));
    }
    public function userAccount(){
        $userDetails = User::where('email',Auth::user()->email)->first()->toArray();
        return view('front.users.my_account')->with(compact('userDetails'));
    }
    public function updateAccount(Request $request){
        $data = $request->all();
        User::where('email',Auth::user()->email)->update([
            'name' =>$data['name'],
            'mobile' =>$data['mobile'],
            'city' =>$data['city'],
            'state' =>$data['state'],
            'country' =>$data['country'],
            'pincode' =>$data['pincode'],
            'address' =>$data['address'],
        ]);
        toastr()->success('','Profile Updated Successfully');
        return redirect()->back();
    }
    public function updateUserPassword(Request $request){
        $data = $request->all();
        User::where('email',Auth::user()->email)->update(['password'=>bcrypt($data['password'])]);
        toastr()->success('','Password Updated Successfully');
        return redirect()->back();
    }
    public function passwordCheck(Request $request){
        $data = $request->all();
        if (Hash::check($data['current_password'], Auth::user()->password)){
            echo "true";
        }else{
            echo "false";
        }
    }
    

}
