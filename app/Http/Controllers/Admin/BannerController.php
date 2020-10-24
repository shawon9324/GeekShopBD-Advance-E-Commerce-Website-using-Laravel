<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Image;

use function GuzzleHttp\json_decode;

class BannerController extends Controller
{
    public function banners()
    {
        Session::put('page', 'banners');
        $banners = Banner::get();
        // $banners = json_decode(json_encode($banners),true);
        // echo "<pre>";print_r($banners);die;
        return view('admin.banners.banners')->with(compact('banners'));
    }

    public function addEditBanner(Request $request, $id = null)
    {

        if ($id == "") {
            //ADD Banner
            $title = "Add Banner";
            $btn_title = "Submit";
            $banner = new Banner;
            $bannerData = array();
            $message = "Banner added Successfully!";
        } else {
            //EDIT Banner
            $title = "Edit Banner";
            $btn_title = "Update";
            $bannerData = Banner::where('id', $id)->first();
            $banner = Banner::find($id);        //this query is for update Banner
            $message = "Banner updated Successfully!";
        }


        //Data Storing Process
        if ($request->isMethod('post')) {
            $data = $request->all();
            // $data = json_decode(json_encode($data),true);
            //echo "<pre>"; print_r($data);die;

            //category validation
            $rules = [
                'image' => 'image'
            ];
            $customMessage = [

                'image.image' => 'Valid Image is required',
            ];
            $this->validate($request, $rules, $customMessage);
            //end validation

            //Upload Product Image
            if ($request->hasFile('image')) {
                $image_temp = $request->file('image');
                if ($image_temp->isValid()) {
                    //upload images after resizing
                    $image_name = $image_temp->getClientOriginalName();
                    $imageName = rand(111, 99999) . '-' . $image_name;
                    $image_path = 'img/banner_img/' . $imageName;
                    Image::make($image_temp)->save($image_path);
                    $banner->image = $imageName;
                }
            }

            $banner->title = $data['title'];
            $banner->product_name = $data['product_name'];
            $banner->new_price = $data['new_price'];
            $banner->old_price = $data['old_price'];
            $banner->alt = $data['alt'];
            $banner->link = $data['link'];
            $banner->banner_position = $data['banner_position'];
            $banner->status = 1;
            $banner->save();
            return redirect('admin/banners')->with('toast_success', $message);
        }
        //-/Data Storing Process

        $positionArray = array('Top-Slider-1', 'Top-Slider-2', 'Top-Slider-3','Middle', 'Bottom');
        return view('admin.banners.add_edit_banner')->with(compact('title', 'btn_title', 'banner', 'positionArray', 'bannerData'));
    }



    public function deleteBannerImage($id)
    {
        $getBannerImage = Banner::select('image')->where('id', $id)->first();
        $product_image_path = 'img/banner_img/' . $getBannerImage->image;
        if (file_exists($product_image_path)) {
            unlink($product_image_path);
        }
        //delete category image from the database table
        Banner::where('id', $id)->update(['image' => '']);
        return redirect()->back();
    }










    public function updateBannerStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['status'] == "Active") {
                $status = 0;
            } else {
                $status = 1;
            }
            Banner::where('id', $data['banner_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'banner_id' => $data['banner_id']]);
        }
    }
    public function deleteBanner($id)
    {
        $bannerName = Banner::select('title')->where('id', $id)->first();
        Banner::where('id', $id)->delete();
        $message = $bannerName->title . '- Banner has been deleted successfully!';
        Session::flash('success_message', $message);
        return redirect()->back();
    }
}
