<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
     return view('welcome');
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Admin')->group(function(){
    //All ADMIN ROUTES

    Route::match(['get','post'],'/','AdminController@login');

    Route::group(['middleware'=>['admin']],function(){

        //admins
        Route::get('dashboard','AdminController@dashboard');
        Route::get('settings','AdminController@settings');
        Route::post('check-current-password','AdminController@checkCurrentPassword');
        Route::post('update-current-password','AdminController@updateCurrentPassword');
        Route::get('logout','AdminController@logout');
        Route::match(['get','post'],'update-admin-details','AdminController@updateAdminDetails');
        //sections
        Route::get('sections','SectionController@sections');
        Route::post('update-section-status','SectionController@updateSectionStatus');
        //categories
        Route::get('categories','CategoryController@categories');
        Route::post('update-category-status','CategoryController@updateCategoryStatus');
        Route::match(['get','post'],'add-edit-category/{id?}','CategoryController@addEditCategory');
        Route::post('append-categories-level','CategoryController@appendCategoryLevel');
        Route::get('delete-category-image/{id}','CategoryController@deleteCategoryImage');
        Route::get('delete-category/{id}','CategoryController@deleteCategory');
        //products
        Route::get('products','ProductController@products');
        Route::post('update-product-status','ProductController@updateProductStatus');
        Route::get('delete-product/{id}','ProductController@deleteProduct');
        Route::match(['get','post'],'add-edit-product/{id?}','ProductController@addEditProduct');



        
        
        

    });


});
