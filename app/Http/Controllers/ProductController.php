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

  // checkout 
public function checkoutproducts(){
    return view('user.checkoutproduct');
}
public function createOrder(){
    $cart = Session::get('cart');
    // verifie that the cart is not empty
    if($cart){
        $date = date('Y/m/d H:i:s');
        $newOrderArray = array('status'=>'on_hold','date'=>$date,'del_date'=>$date,'price'=>$cart->totalPrice);
        $create_order = DB::table('orders')->insert($newOrderArray);
        $order_id = DB::getPdo()->lastInsertId();
        foreach($cart->items as $cart->item){
            $item_id = $cart->item['data']['id'];
            $item_name = $cart->item['data']['name'];
            $item_price =str_replace('MAD','',$cart->item['data']['price']) ;
            $newItemInCurrentOrder = array('id'=>$item_id,'order_id'=>$order_id,'item_name'=>$item_name,'item_price'=>$item_price);
            $createOrderItems = DB::table('orders_item')->insert($newItemInCurrentOrder);

        }
  // delete cart
        Session::forget('cart');
      //  Session::flush();
        return redirect()->route('showPaymentPage');

    }else{
         return redirect()->back();
    }
}


}

