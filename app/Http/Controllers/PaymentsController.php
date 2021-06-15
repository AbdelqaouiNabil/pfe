<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models;
use App\Cart;


class PaymentsController extends Controller
{
    
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
          $payment_info['order_id'] = $order_id;
          $request->session()->put('payment_info',$payment_info);
            return redirect()->route('showPaymentPage');
    
        }else{
             return redirect()->back();
        }
    }
    public function showPaymentPage(){
        $payment_info = Session::get('payment_info');
        if($payment_info['status'] == 'on_hold'){
             return view('payment.payment',['payment_info'=>$payment_info]);
        }else{
            return redirect()->route('homeshop');
        }
       
    }

        // Store Payment Info ;
        private function storePaymentInfo($paypalPayerID){
            $payment_info = Session::get('payment_info');
            $order_id = $payment_info['order_id'];
            $status = $payment_info['status'];
            $paypal_payment_id = "go live";
            $paypal_payer_id = $paypalPayerID;
            if($status == 'on_hold'){
                $date = date('Y-m-d H:i:s');
                $newPaymentArray = array("order_id"=>$order_id,"date"=>$date,"amount"=>$payment_info['price'],"paypal_payment_id"=>$paypal_payment_id,"paypal_payer_id"=>$paypal_payer_id);
                $create_order = DB::table('payments')->insert($newPaymentArray);
             DB::table('orders')->where('order_id',$order_id)->update(['status'=>'paid']);
            }
            else{
                return redirect()->route('homeshop');
            }


        }
        public function showPaymentReceipt($paypalPayerID){
            if(!empty($paypalPayerID) ){
               $this->storePaymentInfo($paypalPayerID);
              // $this->validate_payment($paypalPaymentID,$paypalPayerID);
               $payment_receipt = Session::get('payment_info');
               $payment_receipt['paypal_payer_id'] = $paypalPayerID;
               //$payment_receipt['patypal_payment_id'] = $paypalPaymentID;
               Session::forget("payment_info");
               return view('payment.paymentDone',['paymentReceipt'=> $payment_receipt]);

            }

        }
    // validate payment
   /* private function validate_payment($paypalPaymentID,$paypalPayerID){
        $paypalEnv ='sandbox';
        $paypalURL ='htpps://api.sandbox.paypal.com/v1/';
        $paypalClientID ='ARqhxbzweJC_32Np-T1mmiKY7_-5ISV3hLs8FVeT2ybLwTUA0LGqMTmzZ06PI0IBQOsSWMKLDj2TzkDV';
        $paypalSecret ='EHdrbfFPAScTAefCyAjlm4oQ96sl3XXiNS6ffzjUz4ChSIQ3ossvR2NqDXnYW8bla62MCkZ2GTrbSUvW';

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$paypalURL.'oauth2/token');
        curl_setopt($ch,CURLOPT_HEADER,false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_USERPWD,$paypalClientID.":".$paypalSecret);
        curl_setopt($ch,CURLOPT_POSTFIELDS,"grant_type = client_credentials");
        $response = curl_exec($ch);
        curl_close($ch);
        if(empty($response)){
            return false;
        }else{
            $jsonData = json_decode($response);
            $curl = curl_init($paypalURL,'payment/payment/'.$paypalPaymentID);
            curl_setopt($curl,CURLOPT_POST,false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($curl, CURLOPT_HEADER,false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl, CURLOPT_HTTPHEADER,array(
                'Authorization: Bearer'.$jsonData->access_token,
                'Accept: application/json',
                'Content-Type: application/xml'
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $result = json_decode($response);
            return $result;
            
        }

    }*/
}
