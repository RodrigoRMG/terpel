<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>


 <link rel="shortcut icon" href="img/favicon.png">
      <link rel="stylesheet" href="{{url('public/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{url('public/css/framework7.material.colors.css')}}">
      <link rel="stylesheet" href="{{url('public/css/framework7.material.css')}}">
      <link rel="stylesheet" href="{{url('public/css/slick.css')}}">
      <link rel="stylesheet" href="{{url('public/css/slick-theme.css')}}">
      <link rel="stylesheet" href="{{url('public/css/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{url('public/css/owl.theme.css')}}">
      <link rel="stylesheet" href="{{url('public/css/owl.transitions.css')}}">
      <link rel="stylesheet" href="{{url('public/css/lightbox.min.css')}}">
      <link rel="stylesheet" href="{{url('public/css/style.css')}}">


</head>
<body>

  @include('movil/sidemenu')

  <div class="views">
         <div class="view view-main">
            <div class="navbar" style="background-color: #000!important;">
               <div class="navbar-inner">
                  <div class="left site-title">
                  <div class="navbar-icon">
                     <a href="#" class="link open-panel" ><i style="color:#FFF!important;" class="fa fa-bars"></i></a>

                  </div>
                  
                     <a href="index-2.html">
                        <h1 style="color:#FFF!important;font-size: 16px!important">Gregorio Hernandez</h1>
                     </a>
                  </div>
                  <div class="right navbar-icon" style="margin-right: 15px;background-color: red;border: 2px #000 solid;border-radius: 10px;padding-left: 10px;padding-right: 10px;font-size: 14px!important">
                     50000 pts
                  </div>
               </div>
            </div>

      @yield('content')

    </div>
  </div>


      <script src="{{url('public/js/jquery.min.js')}}"></script>
      <script src="{{url('public/js/framework7.js')}}"></script>
      <script src="{{url('public/js/owl.carousel.min.js')}}"></script>
      <script src="{{url('public/js/lightbox.min.js')}}"></script>
      <script src="{{url('public/js/jquery.filterizr.min.js')}}"></script>
      <script src="{{url('public/js/my-app.js')}}"></script>



</body>

<!-- Mirrored from freakpixels.com/portfolio/brio/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Apr 2017 13:51:40 GMT -->
</html>
