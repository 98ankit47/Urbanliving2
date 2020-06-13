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
        <!-- Modernizr JS -->
        <script src="vue/js/modernizr-2.8.3.min.js"></script>
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1485139818778 {
                background-image: url(images/bg-dark-small-full.jpg?id=742) !important;
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
                background-image: url(images/background-image-01.jpg?id=59) !important;
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
        <link rel="stylesheet" href="vue/css/slick.css" data-minify="1" />
        <!-- VUE HEADER BEGIN -->
<!-- 
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ZAdsxYc_U1xxyA3ga9gcmG260tW783I&libraries=places&callback=loadmap"
          async defer></script> -->
</head> 
<body>
<!-- <div id="app" class="container-fluid">
  @yield('content')
</div> -->
<div id="wrapper">
            <header class="main-header header-1">
                <div class="top-bar-wrapper bar-wrapper">
                    <div class="container">
                        <div class="top-bar-inner">
                            <div class="row">
                                <div class="top-bar-left bar-left col-md-6">
                                    <aside id="ere_widget_login_menu-2" class="widget ere_widget ere_widget_login_menu">
                                        <a href="javascript:void(0)" class="login-link topbar-link" data-toggle="modal" data-target="#ere_signin_modal"><i class="fa fa-user"></i><span class="hidden-xs">Login or Register</span></a>
                                    </aside>
                                    <aside id="text-9" class="submit-property-language widget widget_text">
                                        <div class="textwidget">
                                            <div class="submit-property">
                                                <a href="#" title="Submit Property"><i class="icon-office2 accent-color"></i> Submit Property</a>
                                            </div>
                                            <div id="lang_sel">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="lang_sel_sel icl-en"> <img class="iclflag" src="images/us.png" alt="en" title="English" />&nbsp;&nbsp;English </a>
                                                        <ul>
                                                            <li class="icl-fr">
                                                                <a href="#"> <img class="iclflag" src="images/fr.png" alt="fr" title="French" />&nbsp;French </a>
                                                            </li>
                                                            <li class="icl-de">
                                                                <a href="#"> <img class="iclflag" src="images/de.png" alt="de" title="German" />&nbsp;German </a>
                                                            </li>
                                                            <li class="icl-ja">
                                                                <a href="#"> <img class="iclflag" src="images/ja.png" alt="ja" title="Japanese" />&nbsp;Japanese </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="top-bar-right bar-right col-md-6">
                                    <aside id="g5plus_social_profile-3" class="widget widget-social-profile">
                                        <div class="social-profiles default light icon-small">
                                            <a target="_blank" title="Facebook" href="#"><img alt="Facebook" src="images/facebook1.svg"></a>
                                            <a target="_blank" title="Instagram" href="#"><img alt="Instagram" src="images/instagram1.svg"></i></a>
                                            <a target="_blank" title="Twitter" href="#"><img alt="Twitter" src="images/twitter1.svg"></a>
                                            <a target="_blank" title="Tiktok" href="#">
                                                <img alt="Tiktok" src="images/tiktok1.svg">
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky-header" class="d-none d-md-block">                  
                        <div class="container">
                            <div class="header-above-inner container-inner clearfix">
                                <div class="logo-header">
                                    <a class="no-sticky" href="index.html" title="HomeInsiders-Real Estate Listings, Homes For Sale, Housing Data">
                                        <img src="images/Logo.png" alt="HomeInsiders-Real Estate Listings, Homes For Sale, Housing Data" />
                                    </a>
                                </div>
                                <nav class="primary-menu">
                                    <ul id="main-menu" class="main-menu x-nav-menu">
                                        <li class="menu-item  x-menu-item">
                                            <a href="map-search.html" class="x-menu-a-text"><span class="x-menu-text">Map Search</span></a>
                                        </li>

                                        <li class="menu-item x-menu-item">
                                            <a href="developments.html" class="x-menu-a-text"><span class="x-menu-text">Developments</span></a>
                                        </li>

                                        <li class="menu-item x-menu-item">
                                            <a href="sell-your-home.html" class="x-menu-a-text"><span class="x-menu-text">Sell your home</span></a>
                                        </li>

                                        <li class="menu-item x-menu-item">
                                            <a href="neighborhoods.html" class="x-menu-a-text"><span class="x-menu-text">Neighborhoods</span></a>
                                        </li>

                                        <li class="menu-item  x-menu-item">
                                            <a href="lending.html" class="x-menu-a-text"><span class="x-menu-text">Lending</span></a>
                                        </li>

                                        <li class="menu-item  x-menu-item">
                                            <a href="about.html" class="x-menu-a-text"><span class="x-menu-text">About</span></a>
                                        </li>

                                        <li class="menu-item  x-menu-item">
                                            <a href="contact.html" class="x-menu-a-text"><span class="x-menu-text">Contact</span></a>
                                        </li>
                                    </ul>

                                    <div class="header-customize-wrapper header-customize-nav">
                                        <div class="header-customize-item item-custom-text">
                                            <p class="contact-phone"><i class="fa fa-phone"></i>123 456 789</p>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    
                </div>
            </header>
            <header class="header-mobile header-mobile-1">
                <div class="header-mobile-wrapper sticky-wrapper">
                    <div class="header-mobile-inner sticky-region">
                        <div class="container header-mobile-container">
                            <div class="header-mobile-container-inner clearfix">
                                <div class="logo-mobile-wrapper">
                                    <a href="index.html" title="HomeInsiders-Real Estate Listings, Homes For Sale, Housing Data">
                                        <img src="images/Logo.png" alt="Beyot-Real Estate Listings, Homes For Sale, Housing Data" />
                                    </a>
                                </div>
                                <div class="toggle-icon-wrapper toggle-mobile-menu" data-drop-type="menu-drop-fly">
                                    <div class="toggle-icon"><span></span></div>
                                </div>
                                <div class="mobile-login">
                                    <div class="widget ere_widget ere_widget_login_menu">
                                        <a href="javascript:void(0)" class="login-link topbar-link" data-toggle="modal" data-target="#ere_signin_modal"><i class="fa fa-user"></i><span class="hidden-xs">Login or Register</span></a>
                                    </div>
                                </div>
                                <div class="mobile-search-button">
                                    <a href="#" class="prevent-default search-standard"><i class="icon-search2"></i></a>
                                </div>
                            </div>
                            <div class="header-mobile-nav menu-drop-fly">
                                <form role="search" class="search-form" method="get" id="searchform" action="http://HomeInsiders.net/beyot/">
                                    <input type="text" value="" name="s" id="s" placeholder="ENTER YOUR KEYWORD" /> <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <ul id="menu-primary-menu" class="nav-menu-mobile x-nav-menu x-nav-menu_primary-menu x-animate-sign-flip">
                                    <li id="menu-item-mobile-3961" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children x-menu-item x-item-menu-standard">
                                        <a href="map-search.html" class="x-menu-a-text"><span class="x-menu-text">Map Search</span></a>
                                    </li>

                                    <li id="menu-item-mobile-3973" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-pos-full x-item-menu-multi-column">
                                        <a href="developments.html" class="x-menu-a-text"><span class="x-menu-text">Developments</span></a>
                                    </li>

                                    <li id="menu-item-mobile-3974" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-item-menu-standard">
                                        <a href="sell-your-home.html" class="x-menu-a-text"><span class="x-menu-text">Sell your home</span></a>
                                    </li>

                                    <li id="menu-item-mobile-3962" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-item-menu-standard">
                                        <a href="neighborhoods.html" class="x-menu-a-text"><span class="x-menu-text">Neighborhoods</span></a>
                                    </li>

                                    <li id="menu-item-mobile-3964" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-item-menu-standard">
                                        <a href="lending.html" class="x-menu-a-text"><span class="x-menu-text">Lending</span></a>
                                    </li>

                                    <li id="menu-item-mobile-3963" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-pos-full x-item-menu-multi-column">
                                        <a href="about.html" class="x-menu-a-text"><span class="x-menu-text">About</span><b class="x-caret"></b></a>
                                    </li>

                                    <li id="menu-item-mobile-4003" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-item-menu-standard">
                                        <a href="contact.html" class="x-menu-a-text"><span class="x-menu-text">Contact</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- SLIDER SECTION START -->
            <div class="slider-2 bg-3 ">
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="row search-boxes">
                            <div class="col-md-6">
                        <div class="find-home-box box-left1">
                            <div class="section-title text-white">
                                <h2 class="h1">SEARCH MLS</h2>
                            </div>
                            <div class="find-homes">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="find-home-item">
                                            <input type="text" name="mls" placeholder="ADDRESS, ZIP, NEIGHBORHOOD, PROPERTY TYPE" /> <a href="#" class="prevent-default search-standard"><i class="icon-search2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="find-home-item">
                                            <a class="button-1 btn-block btn-hover-1" href="#">VIEW ALL MLS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="find-home-box box-right1">
                            <div class="section-title text-white">
                                <h2 class="h1">SEARCH DEVELOPMENTS</h2>
                            </div>
                            <div class="find-homes">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="find-home-item">
                                            <input type="text" name="developments" placeholder="DEVELOPMENT, BUILDER, ADDRESS, ZIP, NEIGHBORHOOD, STYLE" /> <a href="#" class="prevent-default search-standard"><i class="icon-search2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="find-home-item">
                                            <a class="button-1 btn-block btn-hover-1" href="#">VIEW ALL DEVELOPMENTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDER SECTION END -->
        <div class="vc_row-full-width vc_clearfix"></div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1485139818778 vc_row-has-fill">
        	<div class="container">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="g5plus-space space"
                                            data-id="5ed1ab7fd11ff"
                                            data-tablet="70"
                                            data-tablet-portrait="60"
                                            data-mobile="40"
                                            data-mobile-landscape="50"
                                            style="clear: both; display: block; height: 90px;"
                                        ></div>
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <p class="hd-subtitle-spec">DISCOVER YOUR</p>
                                                <h2 class="hd-title-spec"><span class="fl-accent">DREAM</span><span class="fl-accent">HOUSE</span></h2>
                                            </div>
                                        </div>
                                        <div
                                            class="g5plus-space space"
                                            data-id="5ed1ab7fd1652"
                                            data-tablet="70"
                                            data-tablet-portrait="60"
                                            data-mobile="40"
                                            data-mobile-landscape="50"
                                            style="clear: both; display: block; height: 90px;"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-dark-left wpb_column vc_column_container vc_col-sm-9 vc_col-has-fill">
                                <div class="column-inner vc_custom_1485091686429">
                                    <div class="wpb_wrapper">
                                        <div class="search-properties clearfix show-status-tab style-default-small color-light">
                                            <div class="form-search-wrap">
                                                <div class="form-search-inner">
                                                    <div class="search-content">
                                                        <div data-href="#" class="search-properties-form">
                                                            <div class="search-status-tab">
                                                                <input class="search-field" type="hidden" name="status" value="for-rent" data-default-value="" />
                                                                <button type="button" data-value="for-rent" class="btn-status-filter active">For Rent</button>
                                                                <button type="button" data-value="for-sale" class="btn-status-filter">For Sale</button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                                                    <select name="type" title="Property Types" class="search-field form-control" data-default-value="">
                                                                        <option value="apartment">Apartment</option>
                                                                        <option value="bar">Bar</option>
                                                                        <option value="cafe">Cafe</option>
                                                                        <option value="car-wash">Car Wash</option>
                                                                        <option value="casino">Casino</option>
                                                                        <option value="farm">Farm</option>
                                                                        <option value="hotel">Hotel</option>
                                                                        <option value="house">House</option>
                                                                        <option value="land">Land</option>
                                                                        <option value="lodging">Lodging</option>
                                                                        <option value="restaurant">Restaurant</option>
                                                                        <option value="spa">Spa</option>
                                                                        <option value="store">Store</option>
                                                                        <option value="villa">Villa</option>
                                                                        <option value="" selected> All Types</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                                                    <input type="text" class="form-control search-field" data-default-value="" value="" name="title" placeholder="Title" />
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                                                    <input type="text" class="ere-location form-control search-field" data-default-value="" value="" name="address" placeholder="Address" />
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                                                    <select name="bedrooms" title="Property Bedrooms" class="search-field form-control" data-default-value="">
                                                                        <option value=""> Any Bedrooms</option>
                                                                        <option value="1"> 1</option>
                                                                        <option value="2"> 2</option>
                                                                        <option value="3"> 3</option>
                                                                        <option value="4"> 4</option>
                                                                        <option value="5"> 5</option>
                                                                        <option value="6"> 6</option>
                                                                        <option value="7"> 7</option>
                                                                        <option value="8"> 8</option>
                                                                        <option value="9"> 9</option>
                                                                        <option value="10"> 10</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                                                    <select name="bathrooms" title="Property Bathrooms" class="search-field form-control" data-default-value="">
                                                                        <option value=""> Any Bathrooms</option>
                                                                        <option value="1"> 1</option>
                                                                        <option value="2"> 2</option>
                                                                        <option value="3"> 3</option>
                                                                        <option value="4"> 4</option>
                                                                        <option value="5"> 5</option>
                                                                        <option value="6"> 6</option>
                                                                        <option value="7"> 7</option>
                                                                        <option value="8"> 8</option>
                                                                        <option value="9"> 9</option>
                                                                        <option value="10"> 10</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                                                                    <select name="min-price" title="Min Price" class="search-field form-control" data-default-value="">
                                                                        <option value=""> Min Price</option>
                                                                        <option value="0">$0</option>
                                                                        <option value="100">$100</option>
                                                                        <option value="300">$300</option>
                                                                        <option value="500">$500</option>
                                                                        <option value="700">$700</option>
                                                                        <option value="900">$900</option>
                                                                        <option value="1100">$1,100</option>
                                                                        <option value="1300">$1,300</option>
                                                                        <option value="1500">$1,500</option>
                                                                        <option value="1700">$1,700</option>
                                                                        <option value="1900">$1,900</option>
                                                                        <option value="2000">$2,000</option>
                                                                        <option value="3000">$3,000</option>
                                                                        <option value="5000">$5,000</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                                                                    <select name="max-price" title="Max Price" class="search-field form-control" data-default-value="">
                                                                        <option value=""> Max Price</option>
                                                                        <option value="200">$200</option>
                                                                        <option value="400">$400</option>
                                                                        <option value="600">$600</option>
                                                                        <option value="800">$800</option>
                                                                        <option value="1000">$1,000</option>
                                                                        <option value="1200">$1,200</option>
                                                                        <option value="1400">$1,400</option>
                                                                        <option value="1600">$1,600</option>
                                                                        <option value="1800">$1,800</option>
                                                                        <option value="2000">$2,000</option>
                                                                        <option value="3000">$3,000</option>
                                                                        <option value="5000">$5,000</option>
                                                                        <option value="7000">$7,000</option>
                                                                        <option value="9000">$9,000</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                                                    <div class="find-home-item">
                                            <!-- shop-filter -->
                                            <div class="shop-filter">
                                                <div class="price_filter">
                                                    <div class="price_slider_amount">
                                                        <input type="submit" value="Price range :" />
                                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                                    </div>
                                                    <div id="slider-range1"></div>
                                                </div>
                                            </div>
                                        </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                                                	 <div class="find-home-item">
                                                                     <!-- shop-filter -->
                                            <div class="shop-filter">
                                                <div class="price_filter">
                                                    <div class="price_slider_amount">
                                                        <input type="submit" value="Land Area :" />
                                                        <input type="text" id="sqft" name="area" placeholder="Add Your Area" />
                                                    </div>
                                                    <div id="slider-range2"></div>
                                                </div>
                                            </div>
                                            </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                                                    <input type="text" class="ere-property-identity form-control search-field" data-default-value="" value="" name="property_identity" placeholder="Property ID" />
                                                                </div>
                                                                <div class="col-md-12 col-sm-6 col-xs-12 form-group submit-search-form pull-right">
                                                                    <button type="button" class="ere-advanced-search-btn"><i class="fa fa-search"></i> Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>


<!-- FEATURED FLAT AREA START -->
            <div class="featured-flat-area pt-115 pb-80">
                <div class="container">
                    
                    <div class="featured-flat">
                        <div class="row">
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale">For Sale</span>
                                        <a href="#"><img src="images/flat/1.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="#"><img src="images/flat/2.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale rent">For rent</span>
                                        <a href="#"><img src="images/flat/3.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="#"><img src="images/flat/4.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale">For Sale</span>
                                        <a href="properties-details.html"><img src="images/flat/5.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="#"><img src="images/flat/6.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale rent">For rent</span>
                                        <a href="#"><img src="images/flat/7.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="#"><img src="images/flat/8.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-12 d-none d-lg-block">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale">For Sale</span>
                                        <a href="#"><img src="images/flat/9.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURED FLAT AREA END -->

<!-- MAPSEARCH AREA START -->
            <div class="mapsearch-area bg-blue plr-140 ptb-50">
                <div class="container">
                    <div class="row">
                    	<div class="col-md-3 col-sm-6 col-xs-12 form-group">
                                                                    <input type="text" class="form-control search-field" data-default-value="" value="" name="title" placeholder="Address, Zip, Neighborhood" /><a href="#"><i class="icon-search2"></i></a>
                                                                </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                                                                    <select name="type" title="Property Types" class="search-field form-control" data-default-value="" >
                                                                        <option value="apartment">Apartment</option>
                                                                        <option value="bar">Bar</option>
                                                                        <option value="cafe">Cafe</option>
                                                                        <option value="car-wash">Car Wash</option>
                                                                        <option value="casino">Casino</option>
                                                                        <option value="farm">Farm</option>
                                                                        <option value="hotel">Hotel</option>
                                                                        <option value="house">House</option>
                                                                        <option value="land">Land</option>
                                                                        <option value="lodging">Lodging</option>
                                                                        <option value="restaurant">Restaurant</option>
                                                                        <option value="spa">Spa</option>
                                                                        <option value="store">Store</option>
                                                                        <option value="villa">Villa</option>
                                                                        <option value="All Types"> All Types</option>
                                                                        <option value="" selected> Property Types</option>
                                                                    </select>
                                                                </div>
                                                                
                                                                <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                                                                    <select name="neighborhoods" title="Neighborhoods" class="search-field form-control" data-default-value="">
                                                                        <option value=""> Any Neighborhoods</option>
                                                                        <option value="1"> Schools</option>
                                                                        <option value="2"> Colleges</option>
                                                                        <option value="3"> Hospitals</option>
                                                                        <option value="4"> Parks</option>
                                                                        <option value="5"> Shopping Malls</option>
                                                                        <option value="6"> Restaurants</option>
                                                                        <option value="7"> Spas</option>
                                                                        <option value="8"> Gyms</option>
                                                                        <option value="9"> Churchs</option>
                                                                        <option value="10"> Playing Grounds</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                                                                    <select name="price" title="Price" class="search-field form-control" data-default-value="">
                                                                        <option value=""> Any Price</option>
                                                                        <option value="1000">$1,000</option>
                                                                        <option value="1200">$1,200</option>
                                                                        <option value="1400">$1,400</option>
                                                                        <option value="1600">$1,600</option>
                                                                        <option value="1800">$1,800</option>
                                                                        <option value="2000">$2,000</option>
                                                                        <option value="3000">$3,000</option>
                                                                        <option value="5000">$5,000</option>
                                                                        <option value="7000">$7,000</option>
                                                                        <option value="9000">$9,000</option>
                                                                    </select>
                                                                </div>

                    </div>
                    
                </div>
            </div>
            <!-- DICECTORY LISTING GOOGLE MAP AREA START -->
        <div class="directory-listing-google-map-area">
            <div id="gmap"></div>
            <!--  MAPSEARCH AREA END -->
             <!-- NEIGHBORHOOD AREA START -->
            <div class="blog-area pb-60 pt-115">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title-2 text-center">
                                <h2>VIEW ALL NEIGHBORHOODS</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-carousel">
                                <!-- blog-item -->
                                <div class="col">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="#"><img src="images/nbrhoods/1.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="#">Maridland de Villa</a></h5>
                                                <p>July 30, 2017 / 10 am</p>
                                            </div>
                                            <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                                praising pain wasnad I will give you a complete pain was praising</p>
                                            <a class="read-more" href="#">Read more</a>
                                        </div>
                                    </article>
                                </div>
                                <!-- blog-item -->
                                <div class="col">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img src="images/nbrhoods/2.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="#">Latest Design House</a></h5>
                                                <p>July 30, 2017 / 10 am</p>
                                            </div>
                                            <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                                praising pain wasnad I will give you a complete pain was praising</p>
                                            <a class="read-more" href="#">Read more</a>
                                        </div>
                                    </article>
                                </div>
                                <!-- blog-item -->
                                <div class="col">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img src="images/nbrhoods/3.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="#">Duplex Villa House</a></h5>
                                                <p>July 30, 2017 / 10 am</p>
                                            </div>
                                            <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                                praising pain wasnad I will give you a complete pain was praising</p>
                                            <a class="read-more" href="#">Read more</a>
                                        </div>
                                    </article>
                                </div>
                                <!-- blog-item -->
                                <div class="col">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="#"><img src="images/nbrhoods/2.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="#">Latest Design House</a></h5>
                                                <p>July 30, 2017 / 10 am</p>
                                            </div>
                                            <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                                praising pain wasnad I will give you a complete pain was praising</p>
                                            <a class="read-more" href="#">Read more</a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- NEIGHBORHOOD AREA END -->

 <!-- BRAND AREA START -->
            <div class="brand-area pb-115">
                <div class="container">
                    <div class="row">
                    	<div class="col-12">
                            <div class="section-title-2 text-center">
                                <h2>AUSTIN'S DEVELOPERS</h2>
                                
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="brand-carousel">
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="images/1.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="images/2.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="images/3.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="images/4.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="images/5.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="images/1.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="images/4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BRAND AREA END -->

             <!-- SUBSCRIBE AREA START -->
            <div class="subscribe-area bg-blue call-to-bg plr-140 ptb-50">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="section-title text-white">
                                <h3>SUBSCRIBE</h3>
                                <h2 class="h1">NEWSLETTER</h2>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="subscribe">
                                <form action="#">
                                    <input type="text" name="subscribe" placeholder="Enter your email here...">
                                    <button type="submit" value="send">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SUBSCRIBE AREA END -->

             <!-- Start footer area -->
        <footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
            <div class="footer-top pt-110 pb-80">
                <div class="container">
                    <div class="row">
                        <!-- footer-address -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-1">
                            <div class="footer-widget">
                                <h6 class="footer-titel">GET IN TOUCH</h6>
                                <ul class="footer-address">
                                    <li>
                                        <div class="address-icon">
                                            <img src="images/location-2.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>9600 Great Hills Trl,</span>
                                            <span>#150w Austin TX 78759</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="images/phone-3.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Telephone : +0 123-456-7890</span>
                                            <span>Telephone : +0 123-456-7890</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="images/world.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Email : connect@homeinsiders.com</span>
                                            <span>Web :<a href="#" target="_blank"> www.homeinsiders.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-latest-news -->
                        <div class="col-xl-6 col-lg-5 col-12 order-3 order-lg-2 mt-md-30">
                            <div class="footer-widget middle">
                                <h6 class="footer-titel">AGENT INFORMATION</h6>
                                <ul class="footer-latest-news">
                                    <li>
                                        
                                        <div class="latest-news-info">
                                            <h6>Sarah Renwick</h6>
                                            <p>Realtor, License #643621 </p>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="footer-titel">BROKER INFORMATION</h6>
                                        <div class="latest-news-info">
                                            <h6>Sheila Dunagan</h6>
                                            <p>9600 Great Hills Trl #150w Ausitn TX 78759<br>
                                                    Broker, License #617831 </p>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <a href="#"><img src="images/exp-reality.png" alt=""></a>
                           <a href="#"> <img src="images/realtor_logo.png" alt=""></a>
                            <a href="#"><img src="images/eql-home.png" alt=""></a>
                            </div>

                        </div>
                        <!-- footer-contact -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12 order-2 order-lg-3 mt-sm-30">
                            <div class="footer-widget">
                                <h6 class="footer-titel">QUICK CONTACT</h6>
                                <div class="footer-contact">
                                    <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor</p>
                                    <form id="contact-form-2" action="mail_footer.php" method="post">
                                        <input type="email" name="email2" placeholder="Type your E-mail address...">
                                        <textarea name="message2" placeholder="Write here..."></textarea>
                                        <button type="submit" value="send">Send</button>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                            <div class="policy text-center">
                                <p><a href="#">Information About Brokerage Services</a>&nbsp;&nbsp;   |   &nbsp;&nbsp;<a href="#">Consumer Protection Notice</a>&nbsp;&nbsp;   |   &nbsp;&nbsp;<a href="#">Privacy Policy</a></p>
                            </div>
                        </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center">
                                <p>Copyright &copy; <script>
                                        document.write(new Date().getFullYear());
                                    </script> <a href="#"><b>HomeInsiders Group</b></a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->

         <div class="modal modal-login fade" id="ere_signin_modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
               <ul class="nav nav-tabs">
                  <li class="active"> <a id="ere_login_modal_tab" href="#login" data-toggle="tab" class="active">Log in</a></li>
                  <li><a id="ere_register_modal_tab" href="#register" data-toggle="tab">Register</a></li>
               </ul>
               <div class="tab-content ">
                  <div class="tab-pane active" id="login">
                     <div class="ere-login-wrap">
                        <div class="ere_messages message"></div>
                        <form class="ere-login" method="post" enctype="multipart/form-data">
                           <div class="form-group control-username"> <input name="user_login" class="form-control control-icon login_user_login" placeholder="User Name*" type="text" /></div>
                           <div class="form-group control-password"> <input name="user_password" class="form-control control-icon" placeholder="Password*" type="password" /></div>
                           <div class="checkbox"> <label> <input name="remember" type="checkbox"> Remember me </label></div>
                           <input type="hidden" name="ere_security_login" value="6072a8c42c" /> <input type="hidden" name="action" value="ere_login_ajax"> <a href="javascript:void(0)" class="ere-reset-password">Lost password?</a>
                           <div class="ere-recaptcha-wrap clearfix">
                              <div class="ere-google-recaptcha"></div>
                           </div>
                           <button type="submit" data-redirect-url="" class="ere-login-button btn btn-primary btn-block">Login</button>
                        </form>
                        <hr>
                        <style type="text/css">.wp-social-login-provider-list{}</style>
                        <div class="wp-social-login-widget">
                           <div class="wp-social-login-connect-with">or Connect with Social Networks</div>
                           <div class="wp-social-login-provider-list"> <a rel="nofollow" href="#" title="Login with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook"> <img alt="Facebook" title="Login with Facebook" src="images/facebook.svg"> </a> 
                            <a rel="nofollow" href="#" title="Login with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter"> <img alt="Twitter" title="Login with Twitter" src="images/twitter.svg"> </a> 
                            <a rel="nofollow" href="#" title="Login with Instagram" class="wp-social-login-provider wp-social-login-provider-instagram" data-provider="Instagram"> <img alt="Instagram" title="Login with Instagram" src="images/instagram.svg"></a> 
                            <a rel="nofollow" href="#" title="Login with Tiktok" class="wp-social-login-provider wp-social-login-provider-tiktok" data-provider="Tiktok"> <img alt="Tiktok" title="Login with Tiktok" src="images/tiktok2.svg"> </a>



                                            </div>

                                            <h6 class="login-terms">
By creating an account you are accepting our <a href="">Terms &amp; Conditions</a>
</h6>
                           <div class="wp-social-login-widget-clearing"></div>
                        </div>
                     </div>
                     <div class="ere-reset-password-wrap" style="display: none">
                        <div class="ere-resset-password-wrap">
                           <div class="ere_messages message ere_messages_reset_password"></div>
                           <form method="post" enctype="multipart/form-data">
                              <div class="form-group control-username">
                                 <input name="user_login" class="form-control control-icon reset_password_user_login" placeholder="Enter your username or email"> <input type="hidden" name="ere_security_reset_password" value="dea58526fb" /> <input type="hidden" name="action" value="ere_reset_password_ajax">
                                 <div class="ere-recaptcha-wrap clearfix">
                                    <div class="ere-google-recaptcha"></div>
                                 </div>
                                 <button type="submit" class="btn btn-primary btn-block ere_forgetpass">Get new password</button>
                              </div>
                           </form>
                        </div>
                        <a href="javascript:void(0)" class="ere-back-to-login">Back to Login</a>
                     </div>
                  </div>
                  <div class="tab-pane" id="register">
                     <div class="ere-register-wrap">
                        <div class="ere_messages message"></div>
                        <form class="ere-register" method="post" enctype="multipart/form-data">
                           <div class="form-group control-username"> <input name="user_login" class="form-control control-icon" type="text" placeholder="Username" /></div>
                           <div class="form-group control-email"> <input name="user_email" type="email" class="form-control control-icon" placeholder="Email" /></div>
                           <div class="form-group control-password"> <input name="user_password" class="form-control control-icon" placeholder="Password" type="password" /></div>
                           <div class="form-group control-ere-password"> <input name="user_password_retype" class="form-control control-icon" placeholder="Retype Password" type="password" /></div>
                           <select name="user_register_role" id="user_register_role">
<option value="owner">Owner/Buyer/Tenant</option>
<option value="agent">Agent</option>
<option value="agency">Agency</option>
</select>

                           
                           <div class="ere-recaptcha-wrap clearfix">
                              <div class="ere-google-recaptcha"></div>
                           </div>
                           <input type="hidden" name="ere_register_security" value="e27333aa4c" /> <input type="hidden" name="action" value="ere_register_ajax"> <button type="submit" data-redirect-url="" class="ere-register-button btn btn-primary btn-block">Register</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

</body>
</html>