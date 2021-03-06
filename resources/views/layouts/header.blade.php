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