<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models;
use App\Cart;


class PaymentsController extends Controller
{
    public function showPaymentPage(){
        $payment_info = Session::get('payment_info');
        if($payment_info['status'] == 'on_hold'){
             return view('payment.payment',['payment_info'=>$payment_info]);
        }else{
            return redirect()->route('homeshop');
        }
       
    }
    public function createOrder(Request $request){
        $cart = Session::get('cart');
        $first_name=$request->input('firstName');
        $last_name=$request->input('lastName');
        $email=$request->input('email');
        $adress1=$request->input('adress1');
        $adress2=$request->input('adress2');
        $phone=$request->input('phone');
        $contrie=$request->input('contrie');
        $city=$request->input('city');
        // verifie that the cart is not empty
        if($cart){
            $date = date('Y/m/d H:i:s');
            $newOrderArray = array('status'=>'on_hold','date'=>$date,'del_date'=>$date,'price'=>$cart->totalPrice,'firstName'=>$first_name,
            'lastName'=>$last_name,'email'=>$email,'adress1'=>$adress1,'adress2'=>$adress2,'phone'=>$phone,'contrie'=>$contrie,'ville'=>$city);
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
          $payment_info =  $newOrderArray ;
          $request->session()->put('payment_info',$payment_info);
            return redirect()->route('showPaymentPage');
    
        }else{
             return redirect()->back();
        }
    }
}
