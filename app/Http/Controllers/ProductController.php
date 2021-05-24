<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models;
use App\Cart;



class ProductController extends Controller
{
    public function index(){
       
        $products = Models\Product::all();
       
        return view('user.allproducts', ['products' => $products]);
    }
    public function home(){
       
        $products = Models\Product::all();
       
        return view('all100', ['products' => $products]);
    }
    public function addProductToCart(request $request,$id){
      //  $request->session()->forget('cart');
    //    $request->session()->flush();
        $prevCart=$request->session()->get('cart');
        $cart = new Cart($prevCart);
        $product = Models\Product::find($id);
        $cart->addItems($id,$product);
       
        $request->session()->put('cart',$cart);
        return Redirect()->route('user.dashboard');
    }
    public function showCart(){
         $cart = Session::get('cart');
         if($cart){
            
            return View('user/cartproduct',['cartItems'=>$cart]);
         }
         else{
           
             return Redirect()->route('user.dashboard');
         }

    }

    // delete item from cart
  public function deleteFromCart(Request $request,$id){
      $cart = $request->session()->get('cart');
      if(array_key_exists($id,$cart->items)){
          unset($cart->items[$id]);
      }
      $prevCart = $request->session()->get('cart');
      $updateCart =new cart($prevCart);
      $updateCart->updatePriceAndQuantity();
      $request->session()->put('cart',$updateCart);
      return redirect()->route('cartProduct');
  }


}

