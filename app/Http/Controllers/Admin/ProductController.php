<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductsAttribute;
use App\ProductsImage;
use App\Section;
use Session;
use Image;

class ProductController extends Controller
{
    public function products()
    {
        Session::put('page', 'products');
        $products = Product::with(['category' => function ($query) {
            $query->select('id', 'category_name');
        }, 'section' => function ($query) {
            $query->select('id', 'name');
        }])->get();
        // $products = \json_decode(\json_encode($products));
        // echo "<pre>";print_r($products);die;
        return view('admin.products.products')->with(compact('products'));
    }
    public function updateProductStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['status'] == "Active") {
                $status = 0;
            } else {
                $status = 1;
            }
            Product::where('id', $data['product_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'product_id' => $data['product_id']]);
        }
    }
    public function deleteProduct($id)
    {
        $productName = Product::select('product_name')->where('id', $id)->first();
        Product::where('id', $id)->delete();
        $message = $productName->product_name . '- Product has been deleted successfully!';
        Session::flash('success_message', $message);
        return redirect()->back();
    }
    public function addEditProduct(Request $request, $id = null)
    {

        if ($id == "") {
            $title = "Add Product";
            $btn_title = "Submit";
            $product = new Product; //create product object
            $productData = array();
            $message = "Product added Successfully!";
        } else {
            $title = "Edit Product";
            $productData = Product::find($id);
            $product = Product::find($id);
            $btn_title = "Update";
            $message = "Product Data Updated Successfully!";
        }
        //add data 
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            $rules = [
                'category_id' => 'required',
                'brand_id' => 'required',
                'product_name' => 'required',
                'product_model' => 'required',
                'product_code' => 'required',
                'product_mpn' => 'required',
                'product_price' => 'required | integer',
                'product_regular_price' => 'required | integer',
                'feature_1' => 'required',
                'feature_2' => 'required',
                'feature_3' => 'required',
                'feature_4' => 'required',
                'feature_5' => 'required',
                'main_image' => 'image',
                'product_video' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
                'description' => 'required',

            ];
            $customMessage = [

                'category_id.required' => 'Category is required!',
                'brand_id.required' => 'Brand is required!',
                'product_name.required' => 'Product name is required!',
                'product_model.required' => 'Product Model is required!',
                'product_code.required' => 'Product Code is required!',
                'product_mpn.required' => 'Product MPN is required!',
                'product_price.required' => 'Product Price is required!',
                'product_price.integer' => 'Valid Product Price is required!',
                'product_regular_price.required' => 'Regular Product Price is required!',
                'product_regular_price.integer' => 'Valid Regular Product Price is required!',
                'feature_1.required' => 'Product Feature 1 is required!',
                'feature_2.required' => 'Product Feature 2 is required!',
                'feature_3.required' => 'Product Feature 3 is required!',
                'feature_4.required' => 'Product Feature 4 is required!',
                'feature_5.required' => 'Product Feature 5 is required!',
                'main_image.image' => 'Valid Product Image is required',
                'product_video.video' => 'Valid Product Video is required',
                'description.required' => ' Product Description is required',

            ];
            $this->validate($request, $rules, $customMessage);

            if (!empty($data['is_featured'])) {
                $is_featured = "Yes";
            } else {
                $is_featured = "No";
            }


            //Upload Product Image                              //TODO: MAJOR:: Need to Fixed Image Upload Functionality.When new Image upload,need to unlink the oldone!!! 
            if ($request->hasFile('main_image')) {
                $image_temp = $request->file('main_image');
                if ($image_temp->isValid()) {
                    //upload images after resizing
                    $image_name = $image_temp->getClientOriginalName();
                    $imageName = rand(111, 99999) . '-' . $image_name;
                    $large_image_path = 'img/product_img/large/' . $imageName;
                    $medium_image_path = 'img/product_img/medium/' . $imageName;
                    $small_image_path = 'img/product_img/small/' . $imageName;
                    Image::make($image_temp)->save($large_image_path);
                    Image::make($image_temp)->resize(720, 660)->save($medium_image_path);
                    Image::make($image_temp)->resize(300, 300)->save($small_image_path);
                    $product->main_image = $imageName;
                }
            }
            //Upload Product Video
            if ($request->hasFile('product_video')) {
                $video_temp = $request->file('product_video');
                if ($video_temp->isValid()) {
                    $video_name = $video_temp->getClientOriginalName();
                    $videoName = rand(111, 99999) . '-' . $video_name;
                    $video_path = 'videos/product_videos/' . $videoName;
                    $video_temp->move($video_path, $videoName);
                    //save video in products tables
                    $product->product_video = $videoName;
                }
            }




            //save products details in product table
            $categoryDetails = Category::find($data['category_id']);
            $product->section_id = $categoryDetails['section_id'];
            $product->category_id = $data['category_id'];
            $product->brand_id = $data['brand_id'];
            $product->product_name = $data['product_name'];
            $product->product_model = $data['product_model'];
            $product->product_code = $data['product_code'];
            $product->product_mpn = $data['product_mpn'];
            $product->product_price = $data['product_price'];
            $product->product_regular_price = $data['product_regular_price'];
            $product->product_discount = $data['product_discount'];
            $product->description = $data['description'];
            $product->warranty = $data['warranty'];
            $product->feature_1 = $data['feature_1'];
            $product->feature_2 = $data['feature_2'];
            $product->feature_3 = $data['feature_3'];
            $product->feature_4 = $data['feature_4'];
            $product->feature_5 = $data['feature_5'];
            $product->generation = $data['generation'];
            $product->hdd = $data['hdd'];
            $product->ssd = $data['ssd'];
            $product->ram = $data['ram'];
            $product->graphics = $data['graphics'];
            $product->processor = $data['processor'];
            $product->meta_title = $data['meta_title'];
            $product->meta_description = $data['meta_description'];
            $product->meta_keywords = $data['meta_keywords'];
            $product->is_featured = $is_featured;
            $product->status = 1;
            $product->save();
            return redirect('admin/products')->with('toast_success',$message);
        }


        //product filters
        $productFilters = Product::productFilters();
        $generationArray =$productFilters['generationArray'];
        $processorArray =$productFilters['processorArray'];
        $graphicsArray =$productFilters['graphicsArray'];
        $hddArray =$productFilters['hddArray'];
        $ssdArray =$productFilters['ssdArray'];
        $ramArray =$productFilters['ramArray'];
        
        //Sections With Categories And Sub Categories

        $categories = Section::with(['categories'])->get();
        $categories = \json_decode(json_encode($categories),true);
        // echo "<pre>" ; print_r($categories);die;


        $brands = Brand::where('status',1)->get();
        $brands = \json_decode(json_encode($brands),true);



        return view('admin.products.add_edit_product')->with('is_featured')->with(compact(
            'title',
            'btn_title',
            'generationArray',
            'processorArray',
            'graphicsArray',
            'hddArray',
            'ssdArray',
            'ramArray',
            'categories',
            'productData',
            'brands'
        ));
    }
    public function deleteProductImage($id)
    {
        $getProductImage = Product::select('main_image')->where('id', $id)->first();
        $product_large_image_path = 'img/product_img/large/' . $getProductImage->main_image;
        $product_medium_image_path = 'img/product_img/medium/' . $getProductImage->main_image;
        $product_small_image_path = 'img/product_img/small/' . $getProductImage->main_image;
        if (file_exists($product_large_image_path)) {
            unlink($product_large_image_path);
        }
        if (file_exists($product_medium_image_path)) {
            unlink($product_medium_image_path);
        }
        if (file_exists($product_small_image_path)) {
            unlink($product_small_image_path);
        }
        //delete category image from the database table
        Product::where('id', $id)->update(['main_image' => '']);
        return redirect()->back();
    }
    public function deleteProductVideo($id)
    {
        $getProductVideo = Product::select('product_video')->where('id', $id)->first();
        $product_video_path = 'videos/product_videos/' . $getProductVideo->product_video;
        if (file_exists($product_video_path)) {
            unlink($product_video_path);
        }
        //delete category image from the database table
        Product::where('id', $id)->update(['product_video' => '']);
        return redirect()->back();
    }
    public function addAttributes(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //sku validation

            foreach ($data['sku'] as $key => $value) {
                if (!empty($value)) {
                    $attrCountSKU = ProductsAttribute::where('sku', $value)->count();
                    if ($attrCountSKU > 0) {
                        return redirect()->back()->with('toast_error','SKU is already exists.Please enter another one!');
                    }
                    $productPrice = Product::select('product_price')->where('id',$id)->get()->first();
                    $attribute = new ProductsAttribute;
                    $attribute->product_id = $id;
                    $attribute->sku = $value;
                    if($data['color'][$key]==''){
                        $attribute->color = "Default";
                        $attribute->price = $productPrice['product_price'];
                    }else{
                        $attribute->color = $data['color'][$key];
                        $attribute->price = $data['price'][$key];
                    }
                    $attribute->stock = $data['stock'][$key];
                    $attribute->save();
                }
            }
            return redirect()->back()->with('toast_success','Product Attributes added successfully!');
        }

        $productData = Product::select('id', 'product_name', 'product_model', 'product_code', 'product_mpn', 'main_image')->with('attributes')->find($id);
        // $productData = \json_decode(\json_encode($productData),true);
        // echo "<pre>"  ;print_r($productData) ;die;
        return view('admin.products.add_attributes')->with(compact('productData'));
    }
    public function updateProductAttributesStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['status'] == "Active") {
                $status = 0;
            } else {
                $status = 1;
            }
            ProductsAttribute::where('id', $data['attribute_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'attribute_id' => $data['attribute_id']]);
        }
    }
    public function deleteAttributes($id)
    {
        ProductsAttribute::where('id', $id)->delete();
        return redirect()->back();
    }
    public function editAttributes(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            foreach ($data['attrId'] as $key => $attr) {
                if (!empty($attr)) {
                    ProductsAttribute::where(['id' => $data['attrId'][$key]])->update(['price' => $data['price'][$key] , 'stock' => $data['stock'][$key]]);
                }
            }
            // echo "<pre>"; print_r($data); die;
        }
        return redirect()->back()->with('toast_success','Product Attributes updated successfully!');
    }
    public function addImages(Request $request, $id)
    {
        $productData = Product::with('images')->select('id', 'product_name', 'product_code', 'main_image')->find($id);
        // $productData = \json_decode(json_encode($productData),true);
        // echo "<pre>"; print_r($productData);
        if ($request->isMethod('post')) {
            $data = $request->all();
            if ($request->hasFile('images')) {
                $images = $request->file('images');
                foreach ($images as $key => $image) {
                    $productImage = new ProductsImage;
                    $image_temp = Image::make($image);
                    $extension = $image->getClientOriginalExtension();
                    $imageName = rand(111, 99999) . time() . "." . $extension;
                    $large_image_path = 'img/product_img/large/' . $imageName;
                    $medium_image_path = 'img/product_img/medium/' . $imageName;
                    $small_image_path = 'img/product_img/small/' . $imageName;
                    Image::make($image_temp)->save($large_image_path);
                    Image::make($image_temp)->resize(720, 660)->save($medium_image_path);
                    Image::make($image_temp)->resize(300, 300)->save($small_image_path);
                    $productImage->image = $imageName;
                    $productImage->product_id = $id;
                    $productImage->save();
                }
                return redirect()->back()->with('toast_success','Product Image has been added successfully!');
            }
        }
        $title = "Product Images";
        return view('admin.products.add_images')->with(compact('productData', 'title'));
    }
    public function deleteImages($id)
    {
        $getImage = ProductsImage::select('image')->where('id', $id)->first();
        $product_large_image_path = 'img/product_img/large/' . $getImage->image;
        $product_medium_image_path = 'img/product_img/medium/' . $getImage->image;
        $product_small_image_path = 'img/product_img/small/' . $getImage->image;
        if (file_exists($product_large_image_path)) {
            unlink($product_large_image_path);
        }
        if (file_exists($product_medium_image_path)) {
            unlink($product_medium_image_path);
        }
        if (file_exists($product_small_image_path)) {
            unlink($product_small_image_path);
        } 
        //delete image from the database table
        ProductsImage::where('id', $id)->delete();
        return redirect()->back();
    }
}