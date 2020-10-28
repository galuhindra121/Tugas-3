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
      <title>cla</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href=" {{url('public')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href=" {{url('public')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href=" {{url('public')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href=" {{url('public')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href=" {{url('public')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{url('public')}}/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="{{url('public')}}/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{url('public')}}/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
@include('templet.section.header')
      <!-- end header inner -->
      <!-- end header -->
      <!-- products -->
      <div  class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="our_products">
                     <div class="row">
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{url('public')}}/images/product1.png" alt="#"/></figure>
                              <h3>Computer</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{url('public')}}/images/product2.png" alt="#"/></figure>
                              <h3>Laptop</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{url('public')}}/images/product3.png" alt="#"/></figure>
                              <h3>Tablet</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{url('public')}}/images/product4.png" alt="#"/></figure>
                              <h3>Speakers</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{url('public')}}/images/product5.png" alt="#"/></figure>
                              <h3>internet</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{url('public')}}/images/product6.png" alt="#"/></figure>
                              <h3>Hardisk</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="{{url('public')}}/images/product7.png" alt="#"/></figure>
                              <h3>Rams</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="{{url('public')}}/images/product8.png" alt="#"/></figure>
                              <h3>Bettery</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="{{url('public')}}/images/product9.png" alt="#"/></figure>
                              <h3>Drive</h3>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">See More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end products -->
      <!--  footer -->
@include('templet.section.footer')
 <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{url('public')}}/js/jquery.min.js"></script>
      <script src="{{url('public')}}/js/popper.min.js"></script>
      <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
      <script src="{{url('public')}}/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="{{url('public')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{url('public')}}/js/custom.js"></script>
   </body>
</html>
