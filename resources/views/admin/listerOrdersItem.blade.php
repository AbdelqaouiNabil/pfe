@extends('layouts.admin')
@section('products')
    


<h1 class="h3 mb-4 text-gray-800 text-center mb-3">Order Items List</h1>

                       

<!-- Content Row -->
<div class="table-responsive">
  <form action="{{route('del')}}" method="POST">
    @csrf
   
<table class="table table-striped">
    <tr>
      
  <th>Id </th>
  <th>order id</th>
  <th>item_name</th>

  </tr>
   @foreach ($orders as $order)
  <tr id="pdi{{$order->order_id}}">
    <td>{{$order->id}}</td>
      <td>{{$order->order_id}}</td>
      <td>{{$order->item_name}}</td>
  
     
  </tr>
      
  @endforeach
  </table> 
</form>
 
</div>

  @endsection
  