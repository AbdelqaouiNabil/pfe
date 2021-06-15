<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>All100 | Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <style>
        
    </style>
</head>
<body class="full-wrapper">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <h1>All100</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area ">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('homeshop')}}">Home</a></li> 
                                        <li><a href="{{route('user.dashboard')}}">shop</a></li>
                                        <li><a href="{{url('/About')}}">About</a></li>
                                        <li><a href="{{url('/Contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>   
                        </div>
                        <div class="header-right1 d-flex align-items-center">
                            <!-- Social -->
                            <div class="header-social d-none d-md-block">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <!-- Search Box -->
                            <div class="search d-none d-md-block">
                                <ul class="d-flex align-items-center">
                                    <li class="mr-15">
                                        <div class="nav-search search-switch">
                                            <i class="ti-search"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card-stor">
                                            <a href="{{route('cartProduct')}}"><img src="{{asset('assets/img/gallery/card.svg')}}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card-stor ml-20">
                                            @if (Route::has('login'))
                                           
                                                @auth
                                                    <a href="{{url('/profil') }}" class="text-sm text-gray-700 underline">profil</a>
                                               
                                                   
                                                @else
                                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                                    
                                                  
                                                @endauth
                                         
                                        @endif
                                        </div>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
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
                <div id="paypal-button-container"></div>
            </div>
        </div>
    </form>
</div>
    </div>
</div>

<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container-fluid ">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-8 col-sm-8">
                 <div class="single-footer-caption mb-50">
                   <div class="single-footer-caption mb-30">
                      <!-- logo -->
                      <div class="footer-logo mb-35">
                       <a href="index.html"><img src="{{asset('assets/img/logo/logo2_footer.png')}}" alt=""></a>
                   </div>
                   <div class="footer-tittle">
                       <div class="footer-pera">
                           <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                       </div>
                   </div>
                   <!-- social -->
                   <div class="footer-social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
        <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
                <h4>Quick links</h4>
                <ul>
                    <li><a href="#">Image Licensin</a></li>
                    <li><a href="#">Style Guide</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
        <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
                <h4>Shop Category</h4>
                <ul>
                    <li><a href="#">Image Licensin</a></li>
                    <li><a href="#">Style Guide</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
        <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
                <h4>Pertners</h4>
                <ul>
                    <li><a href="#">Image Licensin</a></li>
                    <li><a href="#">Style Guide</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
        <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
                <h4>Get in touch</h4>
                <ul>
                    <li><a href="#">(89) 982-278 356</a></li>
                    <li><a href="#">email@email.com</a></li>
                    <li><a href="#">67/A,</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- footer-bottom area -->
<div class="footer-bottom-area">
    <div class="container">
        <div class="footer-border">
           <div class="row d-flex align-items-center">
               <div class="col-xl-12 ">
                   <div class="footer-copy-right text-center">
                       <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by 
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End-->
</footer>
<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS  -->
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('./assets/js/popper.min.js')}}"></script>
<script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('./assets/js/slick.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{asset('./assets/js/wow.min.js')}}"></script>
<script src="{{asset('./assets/js/animated.headline.js')}}"></script>
<script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('./assets/js/gijgo.min.js')}}"></script>

<!-- Nice-select, sticky,Progress -->
<script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('./assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('./assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('./assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('./assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('./assets/js/contact.js')}}"></script>
<script src="{{asset('./assets/js/jquery.form.js')}}"></script>
<script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('./assets/js/mail-script.js')}}"></script>
<script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('./assets/js/plugins.js')}}"></script>
<script src="{{asset('./assets/js/main.js')}}"></script>
<script
src="https://www.paypal.com/sdk/js?client-id=ASIwnhJ3PSP1Lv6ssX14aLnqHXymduTJGqVGMzy2euRwz2146dLyoVN9i2XT4wtRkBPmRl0v9jaRQW2D"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
</script>
<script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '{{$payment_info['price']}}'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
          // This function shows a transaction success message to your buyer.
          alert('Transaction completed by ' + details.payer.name.given_name);
          console.log(data);
         
         // window.location = './paymentDone/'+data.paymentID+'/'+data.payerID;
        });
      }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
  </script>
</body>
</html>