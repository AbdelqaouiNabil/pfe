@extends('layouts.index')
@section('body')
<main>
    <!-- breadcrumb Start-->
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Shop</a></li> 
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- listing Area Start -->
    <div class="category-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-50">
                        <h2>All 100 Shop Store</h2>
                        <p>Browse from 230 latest items</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--? Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4 ">
                    <!-- Job Category Listing start -->
                    <div class="category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                            <h1 class="mb-5">Genre</h1>
                            <h3 class="mb-3 alert alert-primary"><a href="" >Men</a></h3>
                            <h3 class="mb-3 alert alert-primary"><a href="" >Women</a></h3>
                            <h3 class="mb-3 alert alert-primary"><a href="" >Kids</a></h3>
                        </div>
                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!--?  Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8 ">
                    <!--? New Arrival Start -->
                    <div class="new-arrival new-arrival2">
                        <div class="row">
             @foreach ($products as $product)
                 
           
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-new-arrival mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{Storage::disk('local')->url('products_images/'.$product->image)}}" alt="">
                                      
                                    </div>
                                    <div class="popular-caption">
                                     <h3><a href="product_details.html">{{$product->name}}</a></h3>
                                  
                                    <span>{{$product->price}}</span>
                                    <div class="room-btn mt-20">
                                        <a href="{{route('addToCartProduct',['id'=>$product->id])}}" class="border-btn">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
</div>
</div>
<!-- Button -->
<div class="row justify-content-center">
<div class="room-btn mt-20">
    <a href="catagori.html" class="border-btn">Browse More</a>
</div>
</div>
</div>
<!--? New Arrival End -->
</div>
</div>
</div>
</div>
<!-- listing-area Area End -->
<!--? Popular Items Start -->
<div class="popular-items">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-popular-items mb-50 text-center">
                <div class="popular-img">
                    <img src="assets/img/gallery/popular1.png" alt="">
                    <div class="img-cap">
                        <span>Glasses</span>
                    </div>
                    <div class="favorit-items">
                        <a href="{{route('glasses')}}" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-popular-items mb-50 text-center">
                <div class="popular-img">
                    <img src="assets/img/gallery/popular2.png" alt="">
                    <div class="img-cap">
                        <span>Watches</span>
                    </div>
                    <div class="favorit-items">
                     <a href="{{route('watches')}}" class="btn">Shop Now</a>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-popular-items mb-50 text-center">
            <div class="popular-img">
                <img src="assets/img/gallery/popular3.png" alt="">
                <div class="img-cap">
                    <span>Jackets</span>
                </div>
                <div class="favorit-items">
                 <a href="{{route('jackets')}}" class="btn">Shop Now</a>
             </div>
         </div>
     </div>
 </div>
 <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="single-popular-items mb-50 text-center">
        <div class="popular-img">
            <img src="assets/img/gallery/popular4.png" alt="">
            <div class="img-cap">
                <span>Clothes</span>
            </div>
            <div class="favorit-items">
             <a href="{{route('clothes')}}" class="btn">Shop Now</a>
         </div>
     </div>
 </div>
</div>
</div>
</div>
</div>
<!-- Popular Items End -->
<!--? Services Area Start -->
<div class="categories-area section-padding40 gray-bg">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50">
                <div class="cat-icon">
                    <img src="assets/img/icon/services1.svg" alt="">
                </div>
                <div class="cat-cap">
                    <h5>Fast & Free Delivery</h5>
                    <p>Free delivery on all orders</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50">
                <div class="cat-icon">
                    <img src="assets/img/icon/services2.svg" alt="">
                </div>
                <div class="cat-cap">
                    <h5>Fast & Free Delivery</h5>
                    <p>Free delivery on all orders</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-30">
                <div class="cat-icon">
                    <img src="assets/img/icon/services3.svg" alt="">
                </div>
                <div class="cat-cap">
                    <h5>Fast & Free Delivery</h5>
                    <p>Free delivery on all orders</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat">
                <div class="cat-icon">
                    <img src="assets/img/icon/services4.svg" alt="">
                </div>
                <div class="cat-cap">
                    <h5>Fast & Free Delivery</h5>
                    <p>Free delivery on all orders</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--? Services Area End -->
</main>
@endsection