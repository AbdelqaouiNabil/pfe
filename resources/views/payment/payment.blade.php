@extends('layouts.index')
@section('body')
<div class="container">
    
    <div class="row justify-content-center">
      <div class="col-6 mt-5">
        <h1 class="text-center mb-5">Paypal Payment </h1>
    <form class="form-contact contact_form" action="" method="">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    @if ($payment_info['status']=='on_hold')
                    <label>SHIPING STATUS</label>
                        <input class="form-control w-100" readonly id="name" cols="30" rows="9" value="NOT PAYED YET"/>
                    @endif
                    
                </div>
                <div class="form-group">
                    <label>SHIPPING COAST</label>
                    <input class="form-control w-100" readonly id="name" cols="30" rows="9" value="FREE"/>

            </div>
                <div class="form-group">
                        <label>TOTAL PRICE</label>
                        <input class="form-control w-100" readonly id="name" cols="30" rows="9" value="{{$payment_info['price']}}"/>

                </div>
               
            </div>
        </div>
    </form>
</div>
    </div>
</div>

@endsection