@extends('layouts.admin')
@section('products')
    


<h1 class="h3 mb-4 text-gray-800 text-center mb-3">Products list</h1>

                       

<!-- Content Row -->
<div class="table-responsive">
  <form action="{{route('del')}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger" id="deleteAllSelectedProducts"> Delete Selected</button>
<table class="table table-striped">
    <tr>
      <th><input type="checkbox" id="checkAll"></th>
  <th>Id Product</th>
  <th>Name</th>
  <th>description</th>
  <th>price</th>
  <th>image</th>
  <th>type</th>
  <th>Edit image</th>
  <th>edit</th>
  <th>Remove</th>
  </tr>
   @foreach ($products as $product)
  <tr id="pdi{{$product->id}}">
    <td><input type="checkbox" name="delid[]" class="checkBoxClass" value="{{$product->id}}"></td>
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
      <td><img src="<?php echo Storage::url('products_images/'.$product->image)   ?>" alt="<?php echo Storage::url($product->image)   ?> " width="100px"></td>
      <td>{{$product->type}}</td>
      <td><a href="{{route('editImageProduct',['id'=> $product->id ]) }}" class="btn btn-primary">Edit Image</a></td>
      <td><a href="{{route('editProduct',['id'=> $product->id ])}}" class="btn btn-primary">Edit</a></td>
      <td><a href="{{route('remove',['id'=> $product->id ])}}" class="btn btn-danger">Remove</a></td>
   
  </tr>
      
  @endforeach
  </table> 
</form>
 
</div>

  @endsection
  