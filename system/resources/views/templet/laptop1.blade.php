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
   <body class="main-layout inner_posituong computer_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{url('public')}}/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
@include('templet.section.header')
      <!-- end header inner -->
      <!-- end header -->
      <!-- laptop1 -->
      <div class="laptop1">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="laptop1_img">
                     <figure><img src="{{url('public')}}/images/leptop.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>laptop</h2>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end laptop1 -->
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