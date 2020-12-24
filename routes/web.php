<?php

use App\Http\Controllers\Front\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*************************************************************
*      
* All ADMIN ROUTES
*
*************************************************************/
Route::prefix('admin')->namespace('Admin')->group(function () {
    /*************************
    * ADMIN LOGIN
    *************************/
    Route::match(['get', 'post'], '/', 'AdminController@login');
    /*****************************
    * ADMIN PANEL-[dashboard]
    *****************************/
    Route::group(['middleware' => ['admin']], function () {
        /**************************************************************
        * DASHBOARD+ADMIN PROFILE+UPDATE PROFILES+LOGOUT+SETTINGS
        ***************************************************************/
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('settings', 'AdminController@settings');
        Route::get('profile', 'AdminController@profile');
        Route::post('check-current-password', 'AdminController@checkCurrentPassword');
        Route::post('update-current-password', 'AdminController@updateCurrentPassword');
        Route::get('logout', 'AdminController@logout');
        Route::match(['get', 'post'], 'update-admin-details', 'AdminController@updateAdminDetails');
        /****************************************
        * SECTIONS
        *****************************************/
        Route::get('sections', 'SectionController@sections');
        Route::post('update-section-status', 'SectionController@updateSectionStatus');
        /****************************************
        * BRANDS
        ****************************************/
        Route::get('brands', 'BrandController@brands');
        Route::post('update-brand-status', 'BrandController@updateBrandStatus');
        Route::get('delete-brand/{id}', 'BrandController@deleteBrand');
        Route::match(['get', 'post'], 'add-edit-brand/{id?}', 'BrandController@addEditBrand');
        /****************************************
        * CATEGORIES
        *****************************************/
        Route::get('categories', 'CategoryController@categories');
        Route::post('update-category-status', 'CategoryController@updateCategoryStatus');
        Route::match(['get', 'post'], 'add-edit-category/{id?}', 'CategoryController@addEditCategory');
        Route::post('append-categories-level', 'CategoryController@appendCategoryLevel');
        Route::get('delete-category-image/{id}', 'CategoryController@deleteCategoryImage');
        Route::get('delete-category/{id}', 'CategoryController@deleteCategory');
        /****************************************
        * PRODUCTS
        *****************************************/
        Route::get('products', 'ProductController@products');
        Route::post('update-product-status', 'ProductController@updateProductStatus');
        Route::get('delete-product/{id}', 'ProductController@deleteProduct');
        Route::get('delete-product-image/{id}', 'ProductController@deleteProductImage');
        Route::get('delete-product-video/{id}', 'ProductController@deleteProductVideo');
        Route::match(['get', 'post'], 'add-edit-product/{id?}', 'ProductController@addEditProduct');
        /***************************************
        * ATTRIBUTES
        ****************************************/
        Route::match(['get', 'post'], 'add-attributes/{id}', 'ProductController@addAttributes');
        Route::post('edit-attributes/{id}', 'ProductController@editAttributes');
        Route::get('delete-attributes/{id}', 'ProductController@deleteAttributes');
        Route::match(['get', 'post'], 'add-images/{id}', 'ProductController@addImages');
        Route::get('delete-images/{id}', 'ProductController@deleteImages');
        Route::post('update-product-attributes-status','ProductController@updateProductAttributesStatus');
        /****************************************
        * BANNERS
        *****************************************/
        Route::get('banners', 'BannerController@banners');
        Route::post('update-banner-status', 'BannerController@updateBannerStatus');
        Route::get('delete-banner/{id}', 'BannerController@deleteBanner');
        Route::match(['get', 'post'], 'add-edit-banner/{id?}', 'BannerController@addEditBanner');
        Route::get('delete-banner-image/{id}', 'BannerController@deleteBannerImage');
    });
}); 



/************************************************************
* 
* All INDEX ROUTES
*
*************************************************************/
Route::namespace('Front')->group(function () {

    /****************************************
    *INDEX PAGE
    *****************************************/
    Route::get('/', 'IndexController@index');
    Route::get('about-us', 'IndexController@aboutUs');
    Route::get('contact-us', 'IndexController@contactUs');
    Route::get('faqs', 'IndexController@faqs');
    Route::get('terms-conditions', 'IndexController@termsConditions');
    Route::get('store-directory', 'IndexController@storeDirectory');
    Route::get('product-categories/{id}', 'ProductsController@productCategories');


    /****************************************
    *PRODUCT LISTING PAGE
    *****************************************/
    $catUrls = Category::select('url')->where('status',1)->get()->pluck('url')->toArray();
    foreach ($catUrls as $url) {
        Route::any('/'.$url, 'ProductsController@listing');
    }

    
    /****************************************
    *PRODUCT SINGLE VIEW PAGE
    *****************************************/
    /* NOTE: THIS PRODUCT URL GENERATION PROCESS IS TEMPORARY! WILL UPGRADE IT LATER .BECAUSE THIS IS NOT EFFICIENT FOR HUGE PRODUCTS STORAGE */
    // TODO remove this process and fetch data from database [*****]
    $productModels = Product::select('product_model')->where('status',1)->get()->pluck('product_model')->toArray();
    foreach($productModels as $productModel){
        $productUrl = strtolower(str_replace('+','-',urlencode($productModel))); 
        Route::get('product/'.$productUrl.'-{id}','ProductsController@productDetails');
    }
        
    /**********************************************************************************************
    * AJAX PRODUCT PRICE & DISCOUNT-PRICE UPDATE FOR RESPECTATIVE COLOR OF THE PRODUCT
    ***********************************************************************************************/
    Route::post('/get-product-price','ProductsController@getProductPrice');
    Route::post('/get-product-discount-price','ProductsController@getProductDiscountPrice');


    /**********************************************************************************************
    * AJAX PRODUCT PRICE & DISCOUNT-PRICE UPDATE FOR RESPECTATIVE COLOR OF THE PRODUCT
    ***********************************************************************************************/
    Route::post('/get-product-price','ProductsController@getProductPrice');
    /**********************************************************************************************
    * SHOPPING CARTS
    ***********************************************************************************************/
    Route::get('/add-to-cart','ProductsController@addtoCart');    
    Route::get('/shopping-cart','ProductsController@shoppingCart');
    /**********************************************************************************************
     *UPDATE SHOPPING CART ITEMS QUANTITY
     ***********************************************************************************************/
    Route::post('/update-cart-item-qty','ProductsController@updateCartItemQty');
    Route::post('/delete-cart-item','ProductsController@deleteCartItem');
    
    /**********************************************************************************************
     *CUSTOMER LOGIN/REGISTER
     ***********************************************************************************************/
    Route::get('/login-register','UsersController@loginRegister');
    Route::post('/login','UsersController@loginUser');
    Route::post('/register','UsersController@registerUser');
    Route::match(['get','post'],'/check-user-email','UsersController@emailCheck');
    Route::get('/user-logout','UsersController@userLogout');
    Route::match(['get','post'],'/confirm/{code}','UsersController@confirmAccount');
    Route::match(['get','post'],'/forgot-password','UsersController@forgotPassword');
    Route::match(['get','post'],'/recover/auth={auth}','UsersController@recoverAccount');
    /**********************************************************************************************
    *CUSTOMER PROFILE
    ***********************************************************************************************/
    Route::get('/my-account','UsersController@userAccount');
    Route::post('/update-my-account','UsersController@updateAccount');
    Route::post('/update-user-password','UsersController@updateUserPassword');
    Route::match(['get','post'],'/check-user-password','UsersController@passwordCheck');
});
