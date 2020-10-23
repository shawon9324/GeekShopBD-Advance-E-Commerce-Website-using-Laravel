<?php

namespace App\Http\Controllers\Admin;
use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class BrandController extends Controller
{
    public function brands(){
        Session::put('page','brands');
        $brands = Brand::get();
        // $brandsData = \json_decode(json_encode($brands),true);
        // echo "<pre>"; print_r($brands);die;
        return view('admin.brands.brands')->with(compact('brands'));
    }
    public function updateBrandStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }
            else{
                $status = 1;
            }
            Brand::where('id',$data['brand_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'brand_id'=>$data['brand_id']]);
        }
    }
    public function deleteBrand($id){
        $brandName = Brand::select('name')->where('id',$id)->first();
        Brand::where('id',$id)->delete();
        $message = $brandName->name.'- Brand has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }


    public function addEditBrand(Request $request, $id=null){

        if($id==""){
            //ADD Brand
            $title = "Add Brand";
            $btn_title ="Submit";
            $brand = new Brand;
            $message = "Brand added Successfully!";
        }
        else{
             //EDIT Brand
            $title = "Edit Brand";
            $btn_title ="Update";
            $brand = Brand::find($id);        //this query is for update brand
            $message = "Brand updated Successfully!";
        }
        //Data Storing Process
        if ($request->isMethod('post')) {
            $data = $request->all();
            $brand->name = $data['brand_name'];
            $brand->status = 1;
            $brand->save();
            // Session::flash('success',$message);
            return redirect('admin/brands')->with('toast_success',$message);
        }
        return view('admin.brands.add_edit_brand')->with(compact('title','brand','btn_title'));
}
}
