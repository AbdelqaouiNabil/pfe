@extends('layouts.index')
@section('body')
<div class="container">
    
    <div class="row justify-content-center">
      <div class="col-6 mt-5">
        <h1 class="text-center mb-5">Checkout Form</h1>
    <form class="form-contact contact_form" action="/createNewOrder" method="POST">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control w-100" name="firstName" id="name" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'first name'" placeholder=" first name"/>
                </div>
            </div>
        </div>
    </form>
</div>