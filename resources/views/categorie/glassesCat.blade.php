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
                        <h2>Glasses Categorie</h2>
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
                            <!-- Select City items start -->
                            <div class="select-job-items2">
                                <select name="select2">
                                    <option value="">Category</option>
                                    <option value="">Shat</option>
                                    <option value="">T-shart</option>
                                    <option value="">Pent</option>
                                    <option value="">Dress</option>
                                </select>
                            </div>
                            <!--  Select City items End-->
                            <!-- Select State items start -->
                            <div class="select-job-items2">
                                <select name="select3">
                                    <option value="">Type</option>
                                    <option value="">SM</option>
                                    <option value="">LG</option>
                                    <option value="">XL</option>
                                    <option value="">XXL</option>
                                </select>
                            </div>
                            <!--  Select State items End-->
                            <!-- Select km items start -->
                            <div class="select-job-items2">
                                <select name="select4">
                                    <option value="">Size</option>
                                    <option value="">1.2ft</option>
                                    <option value="">2.5ft</option>
                                    <option value="">5.2ft</option>
                                    <option value="">3.2ft</option>
                                </select>
                            </div>
                            <!--  Select km items End-->
                            <!-- Select km items start -->
                            <div class="select-job-items2">
                                <select name="select5">
                                    <option value="">Color</option>
                                    <option value="">Whit</option>
                                    <option value="">Green</option>
                                    <option value="">Blue</option>
                                    <option value="">Sky Blue</option>
                                    <option value="">Gray</option>
                                </select>
                            </div>
                            <!--  Select km items End-->
                            <!-- Select km items start -->
                            <div class="select-job-items2">
                                <select name="select6">
                                    <option value="">Price range</option>
                                    <option value="">$10 to $20</option>
                                    <option value="">$20 to $30</option>
                                    <option value="">$50 to $80</option>
                                    <option value="">$100 to $120</option>
                                    <option value="">$200 to $300</option>
                                    <option value="">$500 to $600</option>
                                </select>
                            </div>
                            <!--  Select km items End-->
                        </div>
                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!--?  Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8 ">
                    <!--? New Arrival Start -->
                    <div class="new-arrival new-arrival2">
                        <div class="row">
             @foreach ($glasses as $glasse)
                 
           
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-new-arrival mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{Storage::disk('local')->url('products_images/'.$glasse->image)}}" alt="">
                                      
                                    </div>
                                    <div class="popular-caption">
                                     <h3><a href="product_details.html">{{$glasse->name}}</a></h3>
                                  
                                    <span>{{$glasse->price}}</span>
                                    <div class="room-btn mt-20">
                                        <a href="{{route('addToCartProduct',['id'=>$glasse->id])}}" class="border-btn">Add To Cart</a>
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
                    <img src="{{asset('assets/img/gallery/popular1.png')}}" alt="">
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
                    <img src="{{asset('assets/img/gallery/popular2.png')}}" alt="">
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
                <img src="{{asset('assets/img/gallery/popular3.png')}}" alt="">
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
            <img src="{{asset('assets/img/gallery/popular4.png')}}" alt="">
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
                    <img src="{{asset('assets/img/icon/services1.svg')}}" alt="">
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
                    <img src="{{asset('assets/img/icon/services2.svg')}}" alt="">
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
                    <img src="{{asset('assets/img/icon/services3.svg')}}" alt="">
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
                    <img src="{{asset('assets/img/icon/services4.svg')}}" alt="">
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