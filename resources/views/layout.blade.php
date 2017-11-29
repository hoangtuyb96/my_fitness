<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My Fitness - @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="{{asset('css/index/animate.css')}}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{asset('css/index/icomoon.css')}}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{asset('css/index/bootstrap.css')}}">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="{{asset('css/index/flexslider.css')}}">
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{asset('css/index/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/index/owl.theme.default.min.css')}}">
  <!-- Theme style  -->
  <link rel="stylesheet" href="{{asset('css/index/style.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/users.css')}}">

  <!-- Modernizr JS -->
  <script src="{{asset('js/index/modernizr-2.6.2.min.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="{{asset('js/users.js')}}"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
  @include ('header')

  @yield('content')  

  @include ('footer')  
  
  <!-- jQuery -->
  <script src="{{asset('js/index/jquery.min.js')}}"></script>
  <!-- jQuery Easing -->
  <script src="{{asset('js/index/jquery.easing.1.3.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('js/index/bootstrap.min.js')}}"></script>
  <!-- Waypoints -->
  <script src="{{asset('js/index/jquery.waypoints.min.js')}}"></script>
  <!-- Owl Carousel -->
  <script src="{{asset('js/index/owl.carousel.min.js')}}"></script>
  <!-- Flexslider -->
  <script src="{{asset('js/index/jquery.flexslider-min.js')}}"></script>

  <!-- MAIN JS -->
  <script src="{{asset('js/index/main.js')}}"></script>

  </body>
</html>
