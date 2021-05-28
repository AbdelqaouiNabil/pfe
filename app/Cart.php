<?php
namespace App;
class Cart {
public $items;
public $totalQuatity;
public $totalPrice;

    public function __construct($prevCart){
if($prevCart != null){
$this->items =$prevCart->items;
$this->totalQuatity=$prevCart->totalQuatity;
$this->totalPrice=$prevCart->totalPrice;
}
else{
    $this->items =[];
$this->totalQuatity=0;
$this->totalPrice=0;
}
    }

    public function addItems($id,$product){

        $price =(int) str_replace("MAD","",$product->price);
        if(array_key_exists($id,$this->items)){
         $productToAdd=$this->items[$id];
         $productToAdd['quantity']++;
        $productToAdd['totalSinglePrice']=$productToAdd['quantity']*$price;


        }
        // first time to add product
        else{
            $productToAdd =['quantity'=>1,'totalSinglePrice'=>$price,'data'=>$product];
        }
$this->items[$id] = $productToAdd;
$this->totalQuatity++;
$this->totalPrice=$this->totalPrice+$price;
    }
    

    // update price and quantity after delete item 
  public function updatePriceAndQuantity(){
      $totalPrice=0;
      $totalQuantity =0;
      foreach($this->items as $item){
          $totalPrice = $totalPrice+$item['totalSinglePrice'];
          $totalQuantity=$totalQuantity+$item['quantity'];
      }
      $this->totalPrice =$totalPrice;
      $this->totalQuatity=$totalQuantity;

  }
    
}