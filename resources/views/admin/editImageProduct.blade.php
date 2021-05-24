@extends('layouts.admin')
@section('products')
<div class="container ">
    <div class="row ">
        <div class="col-lg-5 offset-lg-3 text-center">

    <h3>Current Image</h3>
    <div class="mb-3">
        <img src="{{asset('storage')}}/{{'products_images/'.$products->image}}" alt="{{asset('storage')}}/{{$products->image}}" width="100px">
    </div>
    <form action="/admin/updateImage/{{$products->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="form-label ">update images</label>
        <br>
        <input name='image' type="file" value='{{$products->image}}'>
      </div>
       <button type="submit" class="btn btn-outline-info mb-4" name="submit">Update</button>
    </form>
   
    <span class="text-danger">@error('image'){{$message}}   @enderror</span>
 </div>
      </div>
   
  
    </div>
@endsection