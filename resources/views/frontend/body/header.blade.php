 <!-- preloader-start -->
 <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->

<header>
        <div class="header-top"></div>
        <!-- Header Navigation Begin-->
        <!-- <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                    <nav class="header-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Astrosolve" height="100"/></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav main-menu">
                            <li class="nav-item active">
                            <a class="nav-link text-white" href="{{ URL::to('/') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('page.aboutus') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="#">Free Kundali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Today Panchang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Shubh Muhrat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Numerology
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Horoscope
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Marriage Matching
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item text-white">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        </div>
                    </nav>
               </div>
            </div>
       
        </div> -->
         <!-- Header Navigation End-->

        <div id="sticky-header" class="menu__area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu__wrap">
                                <nav class="menu__nav">
                                    <div class="logo">
                                        <a href="{{ URL::to('/') }}" class="logo__black"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a>
                                        <a href="{{ URL::to('/') }}" class="logo__white"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a>
                                    </div>
                                    <div class="navbar__wrap main__menu d-none d-xl-flex">
                                        <ul class="navigation">
                                            <li><a href="{{ URL::to('/') }}">Home</a></li>
                                            <li><a href="{{ route('page.aboutus') }}">About Us</a></li>
                                            <li><a href="#">Free Kundali</a></li>
                                            <li><a href="#">Kundali Matching</a></li>
                                            <li><a href="{{ route('page.blog') }}">Our Blog</a></li>

                                            <li class="menu-item-has-children"><a href="#">Horroscopes</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Horroscopes 2023</a></li>
                                                    <li><a href="#">Today Horroscopes</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="#">Contact me</a></li>
                                        </ul>
                                    </div>
                                    <div class="header__btn d-none d-md-block">
                                        <a href="{{ route('login') }}" class="btn">Login</a>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile__menu">
                                <nav class="menu__box">
                                    <div class="close__btn"><i class="fal fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="{{ URL::to('/') }}" class="logo__black"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a>
                                        <a href="{{ URL::to('/') }}" class="logo__white"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a>
                                    </div>
                                    <div class="menu__outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu__backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
    </header>