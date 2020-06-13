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
<!-- 
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ZAdsxYc_U1xxyA3ga9gcmG260tW783I&libraries=places&callback=loadmap"
          async defer></script> -->
</head> 
<body>
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
                                            <a href="#" class="lang_sel_sel icl-en"> <img class="iclflag" src="vue/images/us.png" alt="en" title="English" />&nbsp;&nbsp;English </a>
                                            <ul>
                                                <li class="icl-fr">
                                                    <a href="#"> <img class="iclflag" src="vue/images/fr.png" alt="fr" title="French" />&nbsp;French </a>
                                                </li>
                                                <li class="icl-de">
                                                    <a href="#"> <img class="iclflag" src="vue/images/de.png" alt="de" title="German" />&nbsp;German </a>
                                                </li>
                                                <li class="icl-ja">
                                                    <a href="#"> <img class="iclflag" src="vue/images/ja.png" alt="ja" title="Japanese" />&nbsp;Japanese </a>
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
                                <a target="_blank" title="Facebook" href="#"><img alt="Facebook" src="vue/images/facebook1.svg"></a>
                                <a target="_blank" title="Instagram" href="#"><img alt="Instagram" src="vue/images/instagram1.svg"></i></a>
                                <a target="_blank" title="Twitter" href="#"><img alt="Twitter" src="vue/images/twitter1.svg"></a>
                                <a target="_blank" title="Tiktok" href="#">
                                    <img alt="Tiktok" src="vue/images/tiktok1.svg">
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
                            <img src="vue/images/Logo.png" alt="HomeInsiders-Real Estate Listings, Homes For Sale, Housing Data" />
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
  <div id="app">
    @yield('content')
  </div>
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
                                    <img src="vue/images/location-2.png" alt="">
                                </div>
                                <div class="address-info">
                                    <span>9600 Great Hills Trl,</span>
                                    <span>#150w Austin TX 78759</span>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <img src="vue/images/phone-3.png" alt="">
                                </div>
                                <div class="address-info">
                                    <span>Telephone : +0 123-456-7890</span>
                                    <span>Telephone : +0 123-456-7890</span>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <img src="vue/images/world.png" alt="">
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
                        <a href="#"><img src="vue/images/exp-reality.png" alt=""></a>
                    <a href="#"> <img src="vue/images/realtor_logo.png" alt=""></a>
                    <a href="#"><img src="vue/images/eql-home.png" alt=""></a>
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
</div>
    <!-- jquery latest version -->
    <script src="vue/js/jquery-3.1.1.js"></script>
    <!-- Maplace-active -->
    <script src="vue/js/maplace-active.js"></script>
    <script src="vue/js/ere-main.js"></script>
    <script src="vue/js/ere-login.js"></script>
    <script src="vue/js/ere-register.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeeHDCOXmUMja1CFg96RbtyKgx381yoBU"></script>
    <script src="vue/js/google-map.js"></script>
    <!-- Bootstrap framework js -->
    <script src="vue/js/bootstrap.min4.js"></script>
    <!-- Nivo slider js -->
    <script src="vue/js/jquery.nivo.slider.js"></script>
    <!-- ajax-mail js -->
    <script src="vue/js/ajax-mail.js"></script>
    <script src="vue/js/jquery.validate.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="vue/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="vue/js/main.js"></script>
</body>
</html>