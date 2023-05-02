<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <title>Astrosolve-Home Page</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet"/>
   <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet"/>
   <link href="{{ asset('frontend/assets/css/style-inner.css') }}" rel="stylesheet"/>
   <link rel="stylesheet" href="{{ asset('frontend/assets/inner/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/inner/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/inner/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/inner/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/inner/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/inner/css/responsive.css') }}">
  </head>
  <body>
   
    @include('frontend.body.header')
    
    <main>
        @yield('main')
    </main>

    @include('frontend.body.footer')
    
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
     <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
     
        <script src="{{ asset('frontend/assets/inner/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/inner/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/inner/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/inner/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/inner/js/element-in-view.js') }}"></script>
        <script src="{{ asset('frontend/assets/inner/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/inner/js/ajax-form.js') }}"></script>
        <script src="{{ asset('frontend/assets/inner/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/inner/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/assets/inner/js/main.js') }}"></script>
     
     <!-- OR -->
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
     <script type="module">
       import Swiper from 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.esm.browser.min.js'
     </script> -->
     <script>
    
            const swiper = new Swiper('.swiper-sliders', {
      pagination: {
        el: '.sliders-pagination',
      },
      navigation: {
        nextEl: '.sliders-btnnext',
        prevEl: '.sliders-btnprev',
      },
      autoplay: {
        delay: 10000,
     },
});

const swiperlogos = new Swiper('.swiper-logos', {
      pagination: {
        el: '.logos-pagination',
      },
      navigation: {
        nextEl: '.logos-next',
        prevEl: '.logos-prev',
      },
      slidesPerView: 7,
      spaceBetween: 0,
      autoplay: {
        delay: 5000,
        },
});

const swiperblogs = new Swiper('.swiper-blogs', {
      pagination: {
        el: '.blogs-pagination',
      },
      navigation: {
        nextEl: '.blogs-next',
        prevEl: '.blogs-prev',
      },
      slidesPerView: 3,
      spaceBetween: 0,
      autoplay: {
        delay: 5000,
        },
});
     </script>
    </body>
</html>