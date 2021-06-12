@extends('layouts.admin')
@section('products')
    


<h1 class="h3 mb-4 text-gray-800 text-center mb-3">Orders List</h1>

                       

<!-- Content Row -->
<div class="table-responsive">
  <form action="{{route('del')}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger" id="deleteAllSelectedProducts"> Delete Selected</button>
<table class="table table-striped">
    <tr>
      <th><input type="checkbox" id="checkAll"></th>
  <th>Id </th>
  <th>status</th>
  <th>price</th>
  <th>firstName</th>
  <th>lastName</th>
  <th>email</th>
  <th>adress1</th>
  <th>adress2</th>
  <th>phone</th>
  <th>ville</th>
  </tr>
   @foreach ($orders as $order)
  <tr id="pdi{{$order->order_id}}">
    <td><input type="checkbox" name="delid[]" class="checkBoxClass" value="{{$order->order_id}}"></td>
      <td>{{$order->order_id}}</td>
      <td>{{$order->status}}</td>
      <td>{{$order->price}}</td>
      <td>{{$order->firstName}}</td>
      <td>{{$order->lastName}}</td>
      <td>{{$order->email}}</td>
      <td>{{$order->adress1}}</td>
      <td>{{$order->adress2}}</td>
      <td>{{$order->phone}}</td>
      <td>{{$order->ville}}</td>
  </tr>
      
  @endforeach
  </table> 
</form>
 
</div>

  @endsection
  