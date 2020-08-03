<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Section;
use Session;
use Image;
class CategoryController extends Controller
{
    public function categories(){
        Session::put('page','categories');
        $categories = Category::with(['section','parentcategory'])->get();
        // $categories =json_decode(json_encode($categories));
        // dd($categories);
        return view('admin.categories.categories')->with(compact('categories'));
    }


    public function updateCategoryStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }
            else{
                $status = 1;
            }
            Category::where('id',$data['category_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'category_id'=>$data['category_id']]);
        }
    }




    public function addEditCategory(Request $request, $id=null){

            if($id==""){
                //ADD CATEGORY
                $title = "Add Category";
                $btn_title ="Submit";
                $category = new Category;
                $categoryData = array();
                $getCategories =array();
                $message = "Category added Successfully!";
            }
            else{
                 //EDIT CATEGORY
                $title = "Edit Category";
                $btn_title ="Update";
                $categoryData = Category::where('id',$id)->first();
                $getCategories = Category::with('subcategories')->where(['parent_id'=>0,'section_id'=>$categoryData['section_id']])->get();
                $category = Category::find($id);        //this query is for update category
                $message = "Category updated Successfully!";
            }
  

            //Data Storing Process
            if ($request->isMethod('post')) {
                $data = $request->all();

                //category validation
                    $rules = [
                        'category_name' => 'required|regex:/^[\pL\s\-]+$/u',
                        'section_id' => 'required',
                        'url' =>'required',
                        'category_image' => 'image'
                    ];
                    $customMessage = [
                        'category_name.required' => 'Category Name is required',
                        'category_name.ragex' => 'Valid Category Name is Required',
                        'section_id.required' => ' Section is required',
                        'url.required' => 'Category URL is required',
                        'category_image.image' => 'Valid Image is required',
        
                    ];
                    $this->validate($request,$rules,$customMessage);
                //end validation

                //Start Image Stroing Process
                if($request->hasFile('category_image')){
                    $image_temp = $request->file('category_image');
                    if($image_temp->isValid()){
                        //upload images after resizing
                        $image_name = $image_temp->getClientOriginalName();
                        $imageName =rand(111,99999).'-'.$image_name;
                        $image_path = 'img/category_img/'.$imageName;
                        Image::make($image_temp)->save($image_path);
                        $category->category_image = $imageName;
                    }
                }
                //END Image Stroing Process

                // if(empty($data['description'])){
                //     $data['description']="";
                // }

 


                $category->parent_id = $data['parent_id'];
                $category->section_id = $data['section_id'];
                $category->category_name = $data['category_name'];
                $category->category_discount = $data['category_discount'];
                $category->description = $data['description'];
                $category->url = $data['url'];
                $category->meta_title = $data['meta_title'];
                $category->meta_description = $data['meta_description'];
                $category->meta_keywords = $data['meta_keywords'];
                $category->status = 1;
                $category->save();
                Session::flash('success_message',$message);
                return redirect('admin/categories');
            }
            //-/Data Storing Process
            //get all section
            $getSections = Section::get();
            return view('admin.categories.add_edit_category')->with(compact('title','getSections','btn_title','categoryData','getCategories'));
    }

    public function appendCategoryLevel(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $getCategories = Category::with('subcategories')->where(['section_id'=>$data['section_id'],'parent_id'=>0,'status'=>1])->get();
            $getCategories = json_decode(json_encode($getCategories),true);
            return view('admin.categories.append_categories_level')->with(compact('getCategories'));

        }
    }
    public function deleteCategoryImage($id){
        //get category image by id
        $getCategoryImage = Category::select('category_image')->where('id',$id)->first();
       //get category image path
        $category_image_path = 'img/category_img/'.$getCategoryImage->category_image;
        //delete cateogry image from the folder
        if(file_exists($category_image_path)){
            unlink($category_image_path);
        }
        //delete category image from the database table
        Category::where('id',$id)->update(['category_image'=>'']);
        Session::flash('success_message','Category Image has been deleted successfully!');
        return redirect()->back();
       

    }
    
    public function deleteCategory($id){
        $categoryName = Category::select('category_name')->where('id',$id)->first();
        Category::where('id',$id)->delete();
        $message = $categoryName->category_name.'- Category has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }



}