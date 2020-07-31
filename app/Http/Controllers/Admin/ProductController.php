<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Section;
use Session;

class ProductController extends Controller
{
    public function products(){
        Session::put('page','products');
        $products = Product::with(['category'=>function($query){
            $query->select('id','category_name');
        },'section'=>function($query){
            $query->select('id','name');
        }])->get();
        // $products = \json_decode(\json_encode($products));
        // echo "<pre>";print_r($products);die;
        return view('admin.products.products')->with(compact('products'));
    }


    public function updateProductStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }
            else{
                $status = 1;
            }
            Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_id'=>$data['product_id']]);
        }
    }


    public function deleteProduct($id){
        $productName = Product::select('product_name')->where('id',$id)->first();
        Product::where('id',$id)->delete();
        $message = $productName->product_name.'- Product has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }
    public function addEditProduct(Request $request, $id=null){

        if($id==""){
            $title ="Add Product";
            $btn_title ="Submit";
            $product = new Product;

        }
        else{
            $title = "Edit Product";
            $btn_title ="Update";

        }
        //add data 
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            $rules = [
                'category_id' => 'required',
                'product_name' => 'required',
                'product_model' => 'required',
                'product_code' => 'required',
                'product_mpn' => 'required',
                'product_price' => 'required | integer',
                'product_regular_price' =>'required | integer',
                'feature_1'=>'required',
                'feature_2'=>'required',
                'feature_3'=>'required',
                'feature_4'=>'required',
                'feature_5'=>'required',
                'main_image'=>'required |image',
                'is_featured'=>'required',
                'description' => 'required',
              
            ];
            $customMessage = [

                'category_id.required'=>'Category is required!',
                'product_name.required'=>'Product name is required!',
                'product_model.required'=>'Product Model is required!',
                'product_code.required'=>'Product Code is required!',
                'product_mpn.required'=>'Product MPN is required!',
                'product_price.required'=>'Product Price is required!',
                'product_price.integer'=>'Valid Product Price is required!',
                'product_regular_price.required'=>'Regular Product Price is required!',
                'product_regular_price.integer'=>'Valid Regular Product Price is required!',
                'feature_1.required'=>'Product Feature 1 is required!',
                'feature_2.required'=>'Product Feature 2 is required!',
                'feature_3.required'=>'Product Feature 3 is required!',
                'feature_4.required'=>'Product Feature 4 is required!',
                'feature_5.required'=>'Product Feature 5 is required!',
                'main_image.required'=>'Product Main Image is required',
                'main_image.image'=>'Valid Product Image is required',
                'is_featured.required'=>'Featured Product CheckBox is required',
                'description.required'=>' Product Description is required',

            ];
            $this->validate($request,$rules,$customMessage);
        }





        //filtering Array
        $generationArray = array('3rd Gen','4th Gen','5th Gen','6th Gen','7th Gen','8th Gen','9th Gen','10th Gen');
        $processorArray = array('Atom','AMD','CDC','PQC','Intel Core i3','Intel Core i5','Intel Core i7','Intel Core i9','Ryzen 3','Ryzen 5','Ryzen 7','Ryzen 9');
        $grahpicsArray = array('Intel HD','2GB','4GB','6GB','8GB','16GB');
        $hddArray =array('500GB','1TB','2TB','3TB','4TB','6TB');
        $ssdArray =array('128GB','256GB','512GB','1TB','2TB');
        $ramArray =array('2 GB','4 GB','8 GB','16 GB','32 GB','64 GB');


        //Sections With Categories And Sub Categories

        $categories = Section::with(['categories'])->get();
        // $categories = \json_decode(json_encode($categories),true);
        // echo "<pre>" ; print_r($categories);die;





        return view('admin.products.add_edit_product')->with(compact('title','btn_title','generationArray','processorArray','grahpicsArray','hddArray','ssdArray','ramArray',
        'categories'));

    }
}
