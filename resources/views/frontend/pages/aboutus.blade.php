@extends('frontend.main_master')
@section('main')
 <!-- breadcrumb-area -->
 <section class="breadcrumb__wrap page-banner">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- about-area -->
<section class="about about__style__two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about__image">
                    <img src="{{ asset('frontend/assets/images/about-astro.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">01 - About Us</span>
                            <h2 class="title text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                        </div>
                        <div class="about__exp">
                            <div class="about__exp__icon">
                                <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                            </div>
                            <div class="about__exp__content text-white">
                                <p class="text-white"><span>Cras tincidunte</span> dolor at aliquam <br> pellentesqu</p>
                            </div>
                        </div>
                        <p class="desc">Aenean eget tellus vitae sapien laoreet placerat eu efficitur mi.</p>
                        <a href="about.html" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->
@endsection