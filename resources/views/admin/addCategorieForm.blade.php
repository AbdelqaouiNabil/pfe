@extends('layouts.admin')
@section('body')
<div class="container ">
    <div class="row ">
        <div class="col-lg-5 offset-lg-3">
            <div class="login-form">
                <h2 class="text-center">Add New Product </h2>
                <form action="/admin/addCategorie/" method="POST" >
                    <span class="text-danger">@error('submit'){{$message}} @enderror</span>
                    @csrf
                    <h1>Add New Categorie</h1>
                <div class="form-group">
                    <label for="name"> categorie name </label>
                    <input type="text" class="form-control" name="name" placeholder="categorie name" >
                </div>
              
                <button type="submit" name="submit" class="btn btn-outline-info "> Edit </button>
                </form>
            </div>
        </div>

    </div>
</div>
    
@endsection