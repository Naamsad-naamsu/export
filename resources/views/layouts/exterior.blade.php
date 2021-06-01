<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <title>Test</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-touch-fullscreen" content="yes">
    <!-- FAVICON-->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-touch-icon-57x57.html">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-touch-icon-60x60.html">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-touch-icon-76x76.html">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-touch-icon-114x114.html">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-touch-icon-120x120.html">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-touch-icon-144x144.html">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-touch-icon-152x152.html">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon-180x180.html">
    <link rel="manifest" href="assets/favicon/manifest.html">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="../assets/favicon/mstile-144x144.html">
    <meta name="msapplication-config" content="http://andrewch.eu/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700" rel="stylesheet" type="text/css">
    <!-- OWLSLIDER-->
    <link rel="stylesheet" href="assets/js/libs/owl.carousel.2.0.0-beta.2.4/css/owl.carousel.css" type="text/css" media="all" data-module="owlslider">
    <link rel="stylesheet" href="assets/js/libs/owl.carousel.2.0.0-beta.2.4/css/owl.theme.default.css" type="text/css" media="all" data-module="owlslider">
    <!-- ANIMATE.CSS LIBRARY-->
    <link rel="stylesheet" href="assets/css/libs/animate.min.css" type="text/css" media="all">
    <!-- ICON WEB FONTS-->
    <!-- HEADER SCRIPTS	-->
    <script type="text/javascript" src="assets/js/libs/modernizr.custom.48287.js"></script>
    <!-- MAIN STYLESHEETS-->
    <link rel="stylesheet" href="assets/css/theme_custom_bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
  </head>
  <body style="">
    <div id="page_wrapper">
      <div class="header click_menu transparent">
        <!-- =========================== HEADER ==========================-->
        <div class="mainbar">
          <div class="container-fluid">
            <!-- <div class="logo"><a href="{{ url('/') }}" class="brand"><img src="assets/images/logo.png" alt="logo"></a></div> -->
            <div class="nav_and_tools nav_centered uppercase">
              <nav class="primary_nav">
                <ul class="nav">
                  <!-- <li><a href="{{ url('/') }}">Register</a></li> -->
                  <li><a href="{{ route('register') }}">Register</a></li>
                  <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
              </nav>
            </div>
          </div><a class="menu-toggler"><span class="title"></span><span class="lines"></span></a>
        </div>
        <!-- END======================== HEADER ==========================-->
      </div>
     <div class="main">
         @yield('content')
    </div>
      <!-- ============================ FOOTER ============================-->
      <footer class="footer undefined">
        <div class="container-fluid">
          <div class="row">
            <!-- <div class="col-md-12 padding_top padding_bottom text-center"><a href="{{ url('/') }}"><img src="assets/images/logo.png" alt="logo" width="100"></a> -->
              <div class="text_block">
              </div>
              <div class="text_block margin_top">
                <div class="footer_block"><i class="icon icon-Phone margin_left_custom_1"></i>9746782335</div>
                <div class="footer_block"><i class="icon icon-Flag margin_left_custom_1"></i>Calicut</div>
                <div class="footer_block"><i class="icon icon-Keyboard margin_left_custom_1"></i>support@test.com</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 copyright_content vcenter">
              <div class="col-md-4">
                <div class="copyright small_screen_text_center">
                  <p> © 2021 ALL RIGHTS RESERVED TEST</p>
                </div>
              </div>
              <!-- <div class="col-md-4 award"><img src="assets/images/award.png" width="120" alt="Image" class="center-block"></div> -->
              <div class="col-md-4 text-right small_screen_text_center">

                <div class="social"><a href="#" title="circletwitterbird" class="symbol"></a><a href="#" title="circleinstagram" class="symbol"></a><a href="#" title="circlefacebook" class="symbol"></a><a href="#" title="circleskype" class="symbol"></a></div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <div class="secondary_nav_widgetized_area">
        <div class="col-md-12">
          <div class="secondary_widgetized_area_copyright small_screen_text_center">
            <p> © 2021 ALL RIGHTS RESERVED</p>
          </div>
        </div>
      </div>
    </div>
    <!-- ==================== SCRIPTS | CONFIG ====================-->
    <script type="text/javascript" src="assets/js/config.js" data-module="main-configuration"></script>
    <!-- ==================== SCRIPTS | GLOBAL ====================-->
    <script type="text/javascript" src="assets/js/libs/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="assets/js/libs/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/libs/wow.js" data-module="wow-animation-lib"></script>
    <script type="text/javascript" src="assets/js/libs/conformity/dist/conformity.js" data-module="equal-column-height"></script>
    <!-- END====================== SCRIPTS ========================-->
    <!-- =================== SCRIPTS | SECTIONS ===================-->
    <script type="text/javascript" src="assets/js/libs/jquery.isotope.js" data-module=""></script>
    <script type="text/javascript" src="assets/js/libs/imagelightbox.js" data-module=""></script>
    <script type="text/javascript" src="assets/js/libs/owl.carousel.2.0.0-beta.2.4/owl.carousel.js" data-module="owlslider"></script>
    <script type="text/javascript" src="assets/js/owlslider-init.js" data-module="owlslider"></script>
    <script type="text/javascript" src="assets/js/libs/parallax.js" data-module="parallax"></script>
    <!-- END================ SCRIPTS | SECTIONS ===================-->
    <script type="text/javascript" src="assets/js/libs/moment.js"></script>
    <script type="text/javascript" src="assets/js/libs/bootstrap-datetimepicker.js"></script>
    <!-- ==================== SCRIPTS | INIT ======================-->
    <script type="text/javascript" src="assets/js/theme.js" data-module="main-theme-js"></script>
    <!-- END==================== SCRIPTS | INIT ===================-->
    <!-- =================== SCRIPTS | SECTIONS ===================-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhCFO56k_xL212g8j2LK88wK0I_CRwzDE&amp;sensor=false" data-module="google-maps"></script>
    <script type="text/javascript" src="assets/js/googlemaps.js" data-module="google-maps"></script>
    <!-- GMARKER SPECIAL EFFECT FOR GOOGLE MAPS-->
  </body>

</html>
