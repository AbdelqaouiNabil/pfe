@extends('layouts.admin')
@section('body')
<div class="container ">
    <div class="row ">
        <div class="col-lg-5 offset-lg-3">
            <div class="login-form">
                <h2 class="text-center">Add New Product </h2>
                <form action="/admin/addProduct/" method="POST"  enctype="multipart/form-data">
                    <span class="text-danger">@error('submit'){{$message}} @enderror</span>
                    @csrf
                <div class="form-group">
                    <label for="name"> name </label>
                    <input type="text" class="form-control" name="name" placeholder="product name" >
                </div>
                <div class="form-group">
                    <label for="description"> Description </label>
                    <input type="text" class="form-control" name="description" placeholder="description" >
                </div>
                <div class="form-group">
                    <label for="type"> Type </label>
                    <input type="text" class="form-control" name="type" placeholder="type" >
                </div>
                <div class="form-group">
                    <label for="price"> Price </label>
                    <input type="text" class="form-control" name="price" placeholder="Price" >
                </div>
                <div class="form-group">
                    <label for="categories"> categorie ixd</label>
                    <input type="text" class="form-control" name="categorie" placeholder="categorie" >
                </div>
                <div class="form-group">
                    <label class="form-label ">add image</label>
                    <br>
                    <input name='image' type="file" >
                  </div>
                <button type="submit" name="submit" class="btn btn-outline-info "> Edit </button>
                </form>
            </div>
        </div>

    </div>
</div>
    
@endsection