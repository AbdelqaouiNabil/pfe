<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\CategorieController;

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
Route::middleware(['middleware'=>'PreventBack'])->group(function () {
  Auth::routes();
});
Route::get('/About', function () {
  return view('about');
    
});
Route::get('/Contact', function () {
  return view('contact');
    
});
Route::get('/rest', function () {
  return view('auth..passwords.reset');
    
});
Route::get('categories/watches',[CategorieController::class,'index'])->name('watches');
Route::get('categories/glasses',[CategorieController::class,'glasses'])->name('glasses');
Route::get('categories/jackets',[CategorieController::class,'jackets'])->name('jackets');
Route::get('categories/clothes',[CategorieController::class,'clothes'])->name('clothes');
Route::get('/',["uses"=>"ProductController@home",'as'=>'homeshop'] );
Route::get('shop',[UserController::class,'shop'])->name('user.shop');


Route::get('products',["uses"=>"ProductController@index",'as'=>'user.dashboard'] );

Route::get('/profil', [App\Http\Controllers\HomeController::class,'index'])->name('home');


Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth','PreventBack']],function(){

         Route::get('Dashboard',[AdminController::class,'index'])->name('admin.dashboard');
         Route::get('listerClients',[AdminController::class,'listerClient'])->name('listerClient');
         Route::get('listerAdmins',[AdminController::class,'listerAdmin'])->name('listerAdmin');
         Route::post('admin/delete',[AdminController::class,'del'] )->name('del');
         // edit for display edit image product
Route::get('editImageProduct/{id}',["uses"=>"AdminController@editImage",'as'=>'editImageProduct'] );

// edit for display edit form :
  Route::get('editProduct/{id}',["uses"=>"AdminController@editProduct",'as'=>'editProduct'] );
  // edit product info
Route::post('edit/{id}',["uses"=>"AdminController@edit",'as'=>'edit'] );
// update image product
Route::post('updateImage/{id}',["uses"=>"AdminController@updateImage",'as'=>'updateImageProduct'] );


  // add new product form  
Route::get('addNewProductForm/',["uses"=>"AdminController@addProductForm",'as'=>'addProductForm'] );
// lister Orders
Route::get('orders/',["uses"=>"AdminController@listerOrders",'as'=>'listerOrder'] );
//Lister Orders item
Route::get('ordersItem/',["uses"=>"AdminController@listerOrdersItem",'as'=>'listerOrderItem'] );
 // add new product method
Route::post('addProduct/',["uses"=>"AdminController@addProduct",'as'=>'addProduct'] );
 // add new Categorie form  
 Route::get('addNewCategorieForm/',["uses"=>"AdminController@addCategorieForm",'as'=>'addCategorieForm'] );
// add Categorie
Route::post('addCategorie/',["uses"=>"AdminController@addCategorie",'as'=>'addCategorie'] );
// remove product
Route::get('remove/{id}',["uses"=>"AdminController@removeProduct",'as'=>'remove'] );
});







// user route
Route::group(['prefix'=>'user','middleware'=>['isUser','auth','PreventBack']],function(){

Route::get('product/addToCart/{id}',["uses"=>"ProductController@AddProductToCart",'as'=>'addToCartProduct'] );
Route::get('cart',["uses"=>"ProductController@showCart",'as'=>'cartProduct'] );
Route::get('product/deleteFromCart/{id}',["uses"=>"ProductController@deleteFromCart",'as'=>'deleteItemFromCart']);
//Route::get('payment/paymentreceipt/{paymentID}/{payerID}',["uses"=>"PaymentsController@showPaymentReceipt",'as'=>'showPaymentReceipt']);


});

Route::get('product/checkout',["uses"=>"ProductController@checkoutproducts",'as'=>'checkoutproduct']);
Route::post('payment/payment-process',["uses"=>"PaymentsController@createOrder",'as'=>'createOrder']);
Route::get('payment/Confirme-payment',["uses"=>"PaymentsController@showPaymentPage",'as'=>'showPaymentPage']);



