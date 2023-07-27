<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Fiu</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png" type="image/gif') }}" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('home/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{ asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('home/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <a class="logo" href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="design.html">Our Design</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('product_registration') }}">product registration</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="search_icon">
                        <ul>
                           <li><a href="#"><img src="{{ asset('images/search-icon.png') }}"></a></li>
                           <li><a href="#"><img src="{{asset('images/user-icon.png') }}"></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Best <br> Design <br>of Furniture</h1>
                           <p class="banner_text">It is a long established fact that a reader will bedistracted by the readable content of </p>
                           <div class="btn_main">
                              <div class="contact_bt"><a href="#">Contact US</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                        @yield('content')
                        <!-- <div class="image_1"><img src="images/img-1.png"></div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- banner section end -->
   
      <!-- Javascript files-->
      <script src="{{ asset('home/js/jquery.min.js') }}"></script>
      <script src="{{asset('home/js/popper.min.js') }}"></script>
      <script src="{{ asset('home/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('home/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('home/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('home/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('home/home/js/custom.js') }}"></script>
      <!-- javascript --> 
      <script src="{{ asset('home/js/owl.carousel.js') }} "></script>
      <script src="{{ asset('home/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}"></script>
   </body>
</html>