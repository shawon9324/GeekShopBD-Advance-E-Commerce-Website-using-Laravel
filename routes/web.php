<?php

use App\Http\Controllers\Front\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->namespace('Admin')->group(function () {
    //All ADMIN ROUTES
    Route::match(['get', 'post'], '/', 'AdminController@login');
    Route::group(['middleware' => ['admin']], function () {
        //admins
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('settings', 'AdminController@settings');
        Route::get('profile', 'AdminController@profile');
        Route::post('check-current-password', 'AdminController@checkCurrentPassword');
        Route::post('update-current-password', 'AdminController@updateCurrentPassword');
        Route::get('logout', 'AdminController@logout');
        Route::match(['get', 'post'], 'update-admin-details', 'AdminController@updateAdminDetails');
        //sections
        Route::get('sections', 'SectionController@sections');
        Route::post('update-section-status', 'SectionController@updateSectionStatus');
        // Brands
        Route::get('brands', 'BrandController@brands');
        Route::post('update-brand-status', 'BrandController@updateBrandStatus');
        Route::get('delete-brand/{id}', 'BrandController@deleteBrand');
        Route::match(['get', 'post'], 'add-edit-brand/{id?}', 'BrandController@addEditBrand');
        //categories
        Route::get('categories', 'CategoryController@categories');
        Route::post('update-category-status', 'CategoryController@updateCategoryStatus');
        Route::match(['get', 'post'], 'add-edit-category/{id?}', 'CategoryController@addEditCategory');
        Route::post('append-categories-level', 'CategoryController@appendCategoryLevel');
        Route::get('delete-category-image/{id}', 'CategoryController@deleteCategoryImage');
        Route::get('delete-category/{id}', 'CategoryController@deleteCategory');
        //products
        Route::get('products', 'ProductController@products');
        Route::post('update-product-status', 'ProductController@updateProductStatus');
        Route::get('delete-product/{id}', 'ProductController@deleteProduct');
        Route::get('delete-product-image/{id}', 'ProductController@deleteProductImage');
        Route::get('delete-product-video/{id}', 'ProductController@deleteProductVideo');
        Route::match(['get', 'post'], 'add-edit-product/{id?}', 'ProductController@addEditProduct');
        //attribute
        Route::match(['get', 'post'], 'add-attributes/{id}', 'ProductController@addAttributes');
        Route::post('edit-attributes/{id}', 'ProductController@editAttributes');
        Route::get('delete-attributes/{id}', 'ProductController@deleteAttributes');
        Route::match(['get', 'post'], 'add-images/{id}', 'ProductController@addImages');
        Route::get('delete-images/{id}', 'ProductController@deleteImages');
        Route::post('update-product-attributes-status','ProductController@updateProductAttributesStatus');
        //Banners
        Route::get('banners', 'BannerController@banners');
        Route::post('update-banner-status', 'BannerController@updateBannerStatus');
        Route::get('delete-banner/{id}', 'BannerController@deleteBanner');
        Route::match(['get', 'post'], 'add-edit-banner/{id?}', 'BannerController@addEditBanner');
        Route::get('delete-banner-image/{id}', 'BannerController@deleteBannerImage');
    });
});

Route::namespace('Front')->group(function () {
    Route::get('/', 'IndexController@index');
    $catUrls = Category::select('url')->where('status',1)->pluck('url')->toArray();
    foreach ($catUrls as $url) {
        Route::any('/'.$url, 'ProductsController@listing');
    }

    
    //get product model_name in array
    $productModels = Product::select('product_model')->where('status',1)->pluck('product_model')->toArray();
    foreach($productModels as $productModel){
        //generate_url_format from modelName
        $productUrl = strtolower(str_replace('+','-',urlencode($productModel))); 
        //route for each product
        Route::get('/product/'.$productUrl.'-{id}','ProductsController@productDetails');
    }

    
    //Ajax Product Attribute Price
    Route::post('/get-product-price','ProductsController@getProductPrice');
    Route::post('/get-product-discount-price','ProductsController@getProductDiscountPrice');
});
