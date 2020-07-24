<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
use App\Admin;
use Image;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin_dashboard');
    }
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //validation

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];
            $customMessage = [
                'email.required'=> 'Email is required',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required'
            ];
            $this->validate($request,$rules,$customMessage);

            if (Auth::guard('admin')->attempt(['email'=>$data['email'],'password' => $data['password']])) {
                return redirect('admin/dashboard');
            }
            else
            {
                Session::flash('error_message','You have entered an invalid username or password');
                return redirect()->back();
            }
        }
        
        return view('admin.admin_login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    public function settings(){
        
        return view('admin.admin_settings');

    }
    public function checkCurrentPassword(Request $request){
        $data = $request->all();
        if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){

            echo "true";
        }
        else
        {
            echo "false";

        }
    }
    public function updateCurrentPassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
                //check current password is correct or not
                    if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){   
                        //check if new confirm password is correct or not
                        if($data['new_password']==$data['confirm_password']){
                                Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['new_password'])]);
                                Session::flash('success_message','Passwords has been updated successfully');
                        }
                        else{
                            Session::flash('error_message','Passwords do not match');
                            
                        }
                    }
                    else{
                        Session::flash('error_message','Your current password was incorrect.');
                        }
                        return redirect()->back();
                        
        }

    }
    public function updateAdminDetails(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'admin_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'admin_mobile' => 'required | numeric',
                'admin_image' => 'mimes:jpeg,jpg,png,gif'
            ];
            $customMessage = [
                'admin_name.required' => 'Name is required',
                'admin_name.alpha' => 'Valid Name is Required',
                'admin_mobile' => ' Mobile Number is required',
                'admin_mobile' => 'Valid Mobile Number is required',
                'admin_image.image' => 'Valid Image is required',

            ];
            
            $this->validate($request,$rules,$customMessage);
            if($request->hasFile('admin_image')){
                $image_tmp = $request->file('admin_image');
                if($image_tmp->isValid()){
                    // Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'img/admin_img/admin_photos/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
                }
            }else if(!empty($data['current_admin_image'])){
                $imageName = $data['current_admin_image'];
            }else{
                $imageName = "";
            }
            

            //UPDATE ADMIN DETAILS
            Admin::where('email',Auth::guard('admin')->user()->email)->update(['name'=>$data['admin_name'],'mobile'=>$data['admin_mobile'],'image'=>$imageName ]);
            Session::flash('success_message','Amdin Details updated sucessfully!');
            return redirect()->back();
        }


        return view('admin.update_admin_details');
    }

}
