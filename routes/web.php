<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/',["uses"=>"ProductController@home",'as'=>'homeshop'] );
Route::middleware(['middleware'=>'PreventBack'])->group(function () {
    Auth::routes();
});

Route::get('products',["uses"=>"ProductController@index",'as'=>'user.dashboard'] );
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth','PreventBack']],function(){
         Route::get('Dashboard',[AdminController::class,'index'])->name('admin.dashboard');
});
// user route
Route::group(['prefix'=>'user','middleware'=>['isUser','auth','PreventBack']],function(){

Route::get('product/addToCart/{id}',["uses"=>"ProductController@AddProductToCart",'as'=>'addToCartProduct'] );
Route::get('cart',["uses"=>"ProductController@showCart",'as'=>'cartProduct'] );
Route::get('product/deleteFromCart/{id}',["uses"=>"ProductController@deleteFromCart",'as'=>'deleteItemFromCart']);
    
});
Route::get('shop',[UserController::class,'shop'])->name('user.shop');




// edit for display edit image product
Route::get('admin/editImageProduct/{id}',["uses"=>"AdminController@editImage",'as'=>'editImageProduct'] );
// edit for display edit form :
Route::get('admin/editProduct/{id}',["uses"=>"AdminController@editProduct",'as'=>'editProduct'] );

// update image product
Route::post('admin/updateImage/{id}',["uses"=>"AdminController@updateImage",'as'=>'updateImageProduct'] );

// edit product info
Route::post('admin/edit/{id}',["uses"=>"AdminController@edit",'as'=>'edit'] );

  // add new product form  
Route::get('admin/addNewProductForm/',["uses"=>"AdminController@addProductForm",'as'=>'addProductForm'] );
 // add new product method
Route::post('admin/addProduct/',["uses"=>"AdminController@addProduct",'as'=>'addProduct'] );
// remove product
Route::get('admin/remove/{id}',["uses"=>"AdminController@removeProduct",'as'=>'remove'] );
