<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>The HomeInsiders Group |</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- VUE HEADER BEGIN -->
  <link rel="stylesheet" href="vue/css/bootstrap.min4.css" data-minify="1" />
         <link rel="stylesheet" href="vue/css/all.min.css" data-minify="1" />
         <!-- nivo slider CSS -->
        <link rel="stylesheet" href="vue/css/nivo-slider.css" />
    <!-- This core.css file contents all plugings css file. -->

        <link rel="stylesheet" href="vue/css/jquery-ui.min.css" data-minify="1" />
        <link rel="stylesheet" href="vue/css/light-gallery.css" data-minify="1" />
        <link rel="stylesheet" href="vue/css/login.css" data-minify="1" />
        <link rel="stylesheet" href="vue/css/animate.css" data-minify="1" />
        <link rel="stylesheet" href="vue/css/core.css" data-minify="1" />
        <link rel="stylesheet" href="vue/css/style3.css" data-minify="1" />
        <link rel="stylesheet" href="vue/css/style.css" data-minify="1" />
        <link rel="stylesheet" href="vue/css/default.css" data-minify="1" />
        <link rel="stylesheet" href="vue/css/slider.css" data-minify="1" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1485139818778 {
                background-image: url(vue/images/bg-dark-small-full.jpg?id=742) !important;
                background-position: 0 0 !important;
                background-repeat: repeat !important;
            }
            .vc_custom_1484883332538 {
                background-color: #f8f8f8 !important;
            }
            .vc_custom_1484885046824 {
                background-color: #f8f8f8 !important;
            }
            .vc_custom_1480577657936 {
                background-image: url(vue/images/background-image-01.jpg?id=59) !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
            .vc_custom_1485091686429 {
                background-color: #1c1d49 !important;
            }
            .vc_custom_1481266908202 {
                margin-bottom: 60px !important;
            }
            .vc_custom_1480576075583 {
                margin-left: -10px !important;
            }
            .vc_custom_1480576328532 {
                background-color: rgba(255, 255, 255, 0.3) !important;
                *background-color: rgb(255, 255, 255) !important;
                border-radius: 4px !important;
            }
            .vc_custom_1480576336081 {
                background-color: rgba(255, 255, 255, 0.3) !important;
                *background-color: rgb(255, 255, 255) !important;
                border-radius: 4px !important;
            }
        </style>
        <link rel="stylesheet" href="vue/css/slick.css" />
        <!-- VUE HEADER END -->
</head> 
<body>
<div id="wrapper">
    <div id="app">
        <nav-component></nav-component>           
         @yield('content')
         <footer-component></footer-component>
    </div>
</div>
</body>
    <!-- jquery latest version -->
    <script src="vue/js/jquery-3.1.1.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeeHDCOXmUMja1CFg96RbtyKgx381yoBU"></script>
    <script src="vue/js/google-map.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="vue/js/plugins.js"></script>
</html>