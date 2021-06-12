
@extends('layouts.admin')
@section('products')
    

    <div class="container ">
        <div class="row ">
            <div class="col-lg-5 offset-lg-3">
                <div class="login-form">
                    <h2 class="text-center">Edit Product</h2>
                    <form action="/admin/edit/{{$products->id}}" method="POST">
                        @csrf
                    <div class="form-group">
                        <label for="name"> name </label>
                        <input type="text" class="form-control" name="name" placeholder="product name" value="{{$products->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description"> Description </label>
                        <input type="text" class="form-control" name="description" placeholder="description" value="{{$products->description}}">
                    </div>
                    <div class="form-group">
                        <label for="type"> Type </label>
                        <input type="text" class="form-control" name="type" placeholder="type" value="{{$products->type}}">
                    </div>
                    <div class="form-group">
                        <label for="type"> Genre :  </label>
                        <select name="genre" class="form-select" >
                            <option value="Men">Men</option>
                            <option value="Women">Women</option>
                            <option value="Kids">Kids</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price"> Price </label>
                        <input type="text" class="form-control" name="price" placeholder="Price" value="{{$products->price}}">
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-info "> Edit </button>
                    </form>
                </div>
            </div>
    
        </div>
    </div>
        
    @endsection






