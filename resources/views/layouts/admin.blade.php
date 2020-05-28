<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Admin | Urban</title>
    <link rel="apple-touch-icon" href="/bower_components/admin-lte/dist/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/bower_components/admin-lte/dist/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/bower_components/admin-lte/dist/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/bower_components/admin-lte/dist/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/admin-lte/dist/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/admin-lte/dist/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/admin-lte/dist/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/bower_components/admin-lte/dist/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/admin-lte/dist/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/admin-lte/dist/app-assets/css/pages/hospital.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/bower_components/admin-lte/dist/assets/css/style.css">
    <!-- END: Custom CSS-->


  <!-- Font Awesome Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  
  <!-- Theme style -->
 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  
   
     <!-- custom style sheet -->
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @if(Route::currentRouteName() == 'edit-page') 
  <!-- include summernote css/js -->
  <link href="{{asset('summernote/summernote.min.css')}}" rel="stylesheet">
  @endif

      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" rel="stylesheet">


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header" style="background-color:#424e58;">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand brand-link" href="http://127.0.0.1:8000/admin" id="logo">
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content" style="background-color:#659DBD;">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore UrbanLiving" tabindex="0" data-search="template-list">
                                <div class="search-input-close"><i class="ft-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right ml-auto" style="color:white;font-size:20px;">
                        <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a style="margin-right: 20px;">
                          <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
                      </a>
 
                  </li>
              @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="/admin"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard Hospital">Dashboard Urban</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Professional"><b>Components</b></span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Components"></i>
                </li>
                <li class=" nav-item"><a href="/admin/homes"><i class="la la-home"></i><span class="menu-title" data-i18n="Home"><b>Home</b></span></a>
                </li>
                <li class=" nav-item"><a href="/admin/community"><i class="la la-map-signs"></i><span class="menu-title" data-i18n="Location"><b>Location</b></span></a>
                </li>
                <li class=" nav-item"><a href="/admin/floor"><i class="la la-bars"></i><span class="menu-title" data-i18n="Floor"><b>Floor</b></span></a>
                </li>
                <li class=" nav-item"><a href="/admin/site"><i class="la la-table"></i><span class="menu-title" data-i18n="Site"><b>Site Plan</b></span></a>
                </li>
                <li class=" nav-item"><a><i class="la la-envelope-o"></i><span class="menu-title" data-i18n="Enquiries"><b>Enquiries</b></span><span class="badge bg-primary" style="margin-right:30px;" id="totalNotification"></span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="/admin/enquiry"><i></i><span><b>Home Enquiry</b></span><span class="badge bg-primary" style="margin-left:10px;" id="notification"></span></a>
                        </li>
                        <li><a class="menu-item" href="/admin/selling"><i></i><span><b>Selling Enquiry</b></span><span class="badge bg-primary" style="margin-left:10px;" id="Sellnotification"></span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Professional"><b>Others</b></span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Others"></i>
                </li>
                <li class=" nav-item"><a href="/admin/settings"><i class="la la-cogs"></i><span class="menu-title" data-i18n="Settings"><b>Settings</b></span></a>
                </li>
                <li class=" nav-item"><a  data-toggle="modal" onclick="logout1()">
                    <i class="la la-power-off"></i><span><b>Logout</b></span>
                  </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
               
            </ul>
        </div>
    </div>

    <script>
      function logout1()
      {
          $('#logout1').modal('show'); 
      }
    </script>

    
    <div class="modal fade bd-example-modal-xl" 
    style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" 
    id="logout1" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" 
    aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Logout Confirm Action</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times"></i></span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row" style="margin-left:10px;">
              <h6 class="delete_heading">Are you sure, you want's to Logout ?</h6>
              <div class="clearfix"></div>
              <div class="m-auto">
                <button type="button" data-dismiss="modal" style="color:white;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100"> No </button>
                <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style=" color:white; background-color:#2DCC70;font-weight:bold" class="btn w3-100"> Yes</button>
               </div>  
              </div>    
            </div>
         </div>
       </div>
     </div>



     <div id="success" style="text-align:center;">
    </div>
    <div id="danger" style="text-align:center">
    </div>
     
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
              @yield('content')
            </div>
        </div>
      </div>
               
    <!-- END: Content-->

<!-- REQUIRED SCRIPTS -->

<!-- BEGIN: Vendor JS-->
<script src="/bower_components/admin-lte/dist/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/bower_components/admin-lte/dist/app-assets/vendors/js/charts/chart.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/bower_components/admin-lte/dist/app-assets/js/core/app-menu.js"></script>
    <script src="/bower_components/admin-lte/dist/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/bower_components/admin-lte/dist/app-assets/js/scripts/pages/appointment.js"></script>
    <!-- END: Page JS-->



<script>
  loadLogo();
  function loadLogo(){
    var APP_URL = "{{ url('/') }}";
    $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/logo',
      success: function(result){   
        $('#logo').html(result);
      }   
    });
  }
  loadNotification();
  function loadNotification(){
    var APP_URL = "{{ url('/') }}";
    $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/notification',
      success: function(result){   
        $('#notification').html(result);
      }   
    });
  }

  loadTotalNotification();
  function loadTotalNotification(){
    var APP_URL = "{{ url('/') }}";
    $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/totalnotification',
      success: function(result){   
        $('#totalNotification').html(result);
      }   
    });
  }

  loadSellNotification();
  function loadSellNotification(){
    var APP_URL = "{{ url('/') }}";
    $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/sell/notification',
      success: function(result){   
        $('#Sellnotification').html(result);
      }   
    });
  }
</script>

@if(Route::currentRouteName() == 'settings')

<script>
  var image_name,image;
  function loadLogo(){
    var APP_URL = "{{ url('/') }}";
    $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/logo',
      success: function(result){   
        $('#logo').html(result);
      }   
    });
  }
   $('#AddLogoModal').modal('show'); 
        $('input[type=file]').on('change',function(e){
                let files = e.target.files[0];
                let reader = new FileReader();
                if(files){
                  reader.onloadend = ()=>{
                    $('#image').attr('src',reader.result);
                    image = reader.result;
                    image_name = files.name;
                  // document.getElementById("featured_img").value  = reader.result;
                  }
                  reader.readAsDataURL(files); 
              }
            });
            $(function () {
              $('#Logo').on('submit', function (e) {
                e.preventDefault();
                    $.ajax({
                      type: 'post',
                      url: '/api/admin/logo/',
                      data:{
                        'image'      : image,
                        'image-name' : image_name,
                      },
                      success: function () {
                        $('#logoModal').modal('hide');
                        $('.modal-backdrop').css('display','none');
                        $('#success').html('Logo Updated').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();
                        loadLogo();
                      }
                    });

              });

          });
  </script>
    <script>
          $(function () {
              $('#changepass').on('submit', function (e) {
                e.preventDefault();
                      current            =  document.getElementById("current").value;         
                      id                 =  document.getElementById("id").value;         
                      newpass            =  document.getElementById("newpass").value;         
                      Confirmpass        =  document.getElementById("Confirmpass").value;  
                      if(newpass==Confirmpass) 
                      {
                          $.ajax({
                            type: 'post',
                            url: '/api/admin/changePaas/',
                              
                            data:{
                              'current'      : current,
                              'newpass'      : newpass,
                              'id'           : id,
                              'Confirmpass'  : Confirmpass
                            },
                            success: function () {
                              $('#changepass').modal('hide');
                              $('.modal-backdrop').css('display','none');
                              $('#success').html('Password has been changed').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();

                            }
                          });
                      }
                      else
                      {
                        alert('Password And confirm Password are not same');
                      }
                 

              });

          });
</script>
@endif

@if(Route::currentRouteName() == 'edit-page')
<script src="/summernote/summernote.min.js"></script>
<script>
  $(document).ready(function() {
      var image,image_name;
      var APP_URL = "{{ url('/') }}";
      var id = window.location.href.split('/').pop();
      $.ajax({
          type: 'GET',
          url: APP_URL+'/api/page/'+id,
          success: function(result){
            console.log(result.title);
            document.getElementById("title").value        = result.title;
            document.getElementById("meta_title").value   = result.meta_title;
            document.getElementById("meta_des").value     = result.meta_description;
            $('#summernote').summernote('code',result.description);
            $('#chosen_feature_img').attr('src','/'+result.featured_image);
          }   
        });
       $('input[type=file]').on('change',function(e){
            let files = e.target.files[0];
            let reader = new FileReader();
            if(files){
              reader.onloadend = ()=>{
                $('#chosen_feature_img').attr('src',reader.result);
                image = reader.result;
                image_name = files.name;
               // document.getElementById("featured_img").value  = reader.result;
              }
              reader.readAsDataURL(files); 
          }
        });
        $(function () {
          $('form').on('submit', function (e) {
            var title,meta_title,meta_des
            e.preventDefault();
                title            =  document.getElementById("title").value;         
                meta_title       =  document.getElementById("meta_title").value;   
                meta_des         =  document.getElementById("meta_des").value;
                $.ajax({
                  type: 'post',
                  url: '/api/page',
                  data:{
                    'title'               : title,
                    'meta-title'          : meta_title,
                    'meta-des'            : meta_des,
                    'featured-image'      : image,
                    'featured-image-name' : image_name,
                    'editordata'    : $('#summernote').summernote('code')
                  },
                  success: function () {
                    
                  }
                });

          });

      });
    });
</script>
@endif

<script>

  function enqUpdate(id)
  {
    var APP_URL = "{{ url('/') }}";
          $.ajax({
                  type: 'get',
                  url: '/api/admin/enquiry/update/'+ id,
                      success: function () {
                        loadNotification();
                        loadTotalNotification();
                        
                  }
                });
    }
 
  function BlockHomeModal(hid)
  {
    
    $('#BlockHome').modal('show');  
    $('#ys-chng-btn').attr('data-id', hid);
  }
  $('#ys-chng-btn').click(function()
    {
      var hid = $(this).attr('data-id');
      BlockHome(hid);
      $('#BlockHome').modal('hide');
      $('.modal-backdrop').css('display','none');
        
  });
 
 
function BlockUserModal(uid)
{
  $('#BlockUser').modal('show');  
  $('#ys-chng-user-btn').attr('data-id', uid);
 
}
$('#ys-chng-user-btn').click(function()
  {
    var uid = $(this).attr('data-id');
    BlockUser(uid);
    $('#BlockUser').modal('hide');
    $('.modal-backdrop').css('display','none');
      
  });
 

$('#deleteHome').on('show.bs.modal', function (e) {

var $trigger = $(e.relatedTarget);
var Hid=$trigger.data('id');
$('#ys-home-btn').attr('data-id',Hid);
});
$('#ys-home-btn').click(function()
{
  var id = $(this).attr('data-id');

  $('#deleteHome').modal('hide');
 $('.modal-backdrop').css('display','none');
    deleteHome(id);

});



$('#deletePdf').on('show.bs.modal', function (e) {

var $trigger = $(e.relatedTarget);
var Pid=$trigger.data('id');
$('#ys-pdf').attr('data-id',Pid);
});
$('#ys-pdf').click(function()
{
  var id = $(this).attr('data-id');

  $('#deletePdf').modal('hide');
 $('.modal-backdrop').css('display','none');
    deletePdf(id);

});


$('#deleteEnquiry').on('show.bs.modal', function (e) {

var $trigger = $(e.relatedTarget);
var Hid=$trigger.data('id');
$('#ys-enq-btn').attr('data-id',Hid);
});
$('#ys-enq-btn').click(function()
{
  var id = $(this).attr('data-id');

  $('#deleteEnquiry').modal('hide');
 $('.modal-backdrop').css('display','none');
    $.ajax({
              url: APP_URL + '/api/admin/enquiry/'+ id,
              type: 'DELETE'
            });
            loadEnquiryList();
           $('#danger').html('Enquiry deleted').show().delay(2000).addClass('alert').addClass('alert-danger').fadeOut();


});



$('#deleteFloorComponent').on('show.bs.modal', function (e) {

var $trigger = $(e.relatedTarget);
var id=$trigger.data('id');
$('#ys-floor-component-btn').attr('data-id',id);

});
$('#ys-floor-component-btn').click(function()
{
  var id = $(this).attr('data-id');
  $('#deleteFloorComponent').modal('hide');
  deletefloorcomponent(id);
});




$('#deleteFloor').on('show.bs.modal', function (e) {
  var $trigger = $(e.relatedTarget);
  var id=$trigger.data('id');
  $('#ys-floor-btn').attr('data-id',id);
});
$('#ys-floor-btn').click(function()
{
  var id = $(this).attr('data-id');
  $('#deleteFloor').modal('hide');
  $('.modal-backdrop').css('display','none');
  deleteFloor(id);
});



$('#deleteSite').on('show.bs.modal', function (e) {
  var $trigger = $(e.relatedTarget);
  var id=$trigger.data('id');
  $('#ys-site-btn').attr('data-id',id);
});
$('#ys-site-btn').click(function()
{
  var id = $(this).attr('data-id');
  $('#deleteSite').modal('hide');
  $('.modal-backdrop').css('display','none');
  deleteSite(id);
});


$('#deleteCommunity').on('show.bs.modal', function (e) {
  var $trigger = $(e.relatedTarget);
  var id=$trigger.data('id');
  $('#ys-comm-btn').attr('data-id',id);
});
$('#ys-comm-btn').click(function()
{
  var id = $(this).attr('data-id');
  $('#deleteCommunity').modal('hide');
  $('.modal-backdrop').css('display','none');
    deleteCommunity(id);

});

 
</script>


  <Script>
    function UploadPdf()
    {
      var id = window.location.href.split('/').pop();
      function processPdf(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            console.log(e.target.result);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
      $("#pdfUpload").submit(function(e) {
        e.preventDefault();
        var frm = $('#pdfUpload');
        var formData = new FormData(frm[0]);
        formData.append('file', $('#pdf')[0].files[0]);
        var id = window.location.href.split('/').pop();
        $.ajax({
          type: 'post',
          url: "/api/admin/pdfUpload/"+id,
          data: formData,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
          processData: false,
          contentType: false,

          success: function(result) {
            $('#myBroucher').modal('hide');
            $('.modal-backdrop').css('display','none');
            loadpdfList();
            $('#success').html('Broucher Added for this home').show().delay(2000).addClass('alert').addClass('alert-success').fadeOut();
          }

        });
      }) 
    }
  </Script>


@if(Route::currentRouteName() == 'edit-home') 
<script>
  var image="a",image_name="a";
  var latitude,longitude;
$(document).ready(function() {
  loadmap();
  function loadmap(){
    var myLatLng=new google.maps.LatLng(40.71331,-74.0688);
    var map = new google.maps.Map(
      document.getElementById('mapshow'),
      {zoom: 15, center: myLatLng}
    );
      google.maps.event.addListener(map, "click", function (event) {
       latitude = event.latLng.lat();
       longitude = event.latLng.lng();
       document.getElementById("lat").value = latitude;
       document.getElementById("lng").value = longitude;

      radius = new google.maps.Circle({map: map,
          radius: 100,
          center: event.latLng,
          fillColor: '#777',
          fillOpacity: 0.1,
          strokeColor: '#AA0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          draggable: true,    // Dragable
          editable: true      // Resizable
      });

      // Center of map
      map.panTo(new google.maps.LatLng(latitude,longitude));
      
    });
    
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
  }
      var APP_URL = "{{ url('/') }}";
      var id = window.location.href.split('/').pop();
      var gal=[];
      var gal_name=[];
      $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/home/'+id,

      success: function(result){     
        document.getElementById("title").value = result.title;
        document.getElementById("description").value = result.description;
        document.getElementById("bedroom").value = result.bedroom;
        document.getElementById("bathroom").value = result.bathroom;
        document.getElementById("garage").value = result.garage;
        document.getElementById("stories").value = result.stories;
        document.getElementById("mls").value = result.type;
        document.getElementById("area").value = result.area;
        document.getElementById("community_list").value = result.community;
        document.getElementById("builder").value = result.builder;
        document.getElementById("status").value = result.status;
        document.getElementById("price").value = result.price;
        document.getElementById("lat").value = result.lat;
        document.getElementById("lng").value = result.lng;
        document.getElementById("community_list").value = result.community_list;
      }
      
    }); 
    $('#file').change(function(e){
            let files = e.target.files[0];
            let reader = new FileReader();
            if(files){
              reader.onloadend = ()=>{
                $('#chosen_feature_img').attr('src',reader.result);
                image = reader.result;
                image_name = files.name;
              }
              reader.readAsDataURL(files); 
          }
        });

        $('#files').change(function(evt){
          var files = evt.target.files; 
          for (var i = 0, f; f = files[i]; i++) {
              // Only process image files.
              if (!f.type.match('image.*')) {
                continue;
              }

            var reader = new FileReader();
              // Closure to capture the file information.
                reader.onload = (function(theFile) {
                  return function(e) {
                    // Render thumbnail.
                    gal.push(e.target.result);
                    gal_name.push(theFile.name);
                  };
                })(f);

            // Read in the image file as a data URL.
              reader.readAsDataURL(f);
        }
        });
        $(function () {
          $('form').on('submit', function (e) {
            var title,description,bedroom,bathroom,garage,status,stories,mls,area
            ,builder,meta_description,meta_title,price;
            e.preventDefault();
                title              =  document.getElementById("title").value;         
                description        =  document.getElementById("description").value;         
                bedroom            =  document.getElementById("bedroom").value;         
                bathroom           =  document.getElementById("bathroom").value;         
                garage             =  document.getElementById("garage").value;         
                stories            =  document.getElementById("stories").value;         
                mls                =  document.getElementById("mls").value;         
                area               =  document.getElementById("area").value;         
                status             =  document.getElementById("status").value;         
                latitude           =  document.getElementById("lat").value;         
                longitude          =  document.getElementById("lng").value;         
                price              =  document.getElementById("price").value;         
                builder            =  document.getElementById("builder").value;         
                community          =  document.getElementById("community_list").value;         
                $.ajax({
                  type: 'post',
                  url: '/api/admin/home/'+id,
                  data:{
                    'title'               : title,
                    'description'         : description,
                    'bedroom'             : bedroom,
                    'bathroom'            : bathroom,
                    'garage'              : garage,
                    'stories'             : stories,
                    'mls'                 : mls,
                    'area'                : area,
                    'builder'             : builder,
                    'community'           : community,
                    'status'              : status,
                    'featured-image'      : image,
                    'featured-image-name' : image_name,
                    'gallery'             : gal,
                    'gallery_name'        : gal_name,
                    'lat'                 : latitude,
                    'lng'                 : longitude,
                    'price'               : price,
                  },
                  success: function () {
                    window.location.href = "/admin/home/manage/"+id;
                    $('#success').html('Home Edited').show().delay(2000).addClass('alert').addClass('alert-success').fadeOut();
                  }
                });

          });

      });
});
</script>
@endif

<script>

function Editloadmap(aid){
    var latitude,longitude;
    var APP_URL = "{{ url('/') }}";
    $('#Mapshow').modal('show'); 
    var myLatLng=new google.maps.LatLng(40.71331,-74.0688);
    var map = new google.maps.Map(
      document.getElementById('mapshow'),
      {zoom: 15, center: myLatLng}
    );
      google.maps.event.addListener(map, "click", function (event) {
       latitude = event.latLng.lat();
       longitude = event.latLng.lng();
      radius = new google.maps.Circle({map: map,
          radius: 100,
          center: event.latLng,
          fillColor: '#777',
          fillOpacity: 0.1,
          strokeColor: '#AA0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          draggable: true,    // Dragable
          editable: true      // Resizable
      });

      // Center of map
      map.panTo(new google.maps.LatLng(latitude,longitude));
      
    });
    
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

              $('#latlngAvb').on('submit', function (e) {
                e.preventDefault();
                    $.ajax({
                      type: 'post',
                      url: '/api/Available/'+aid,
                      data:{
                        'lat'             : latitude,
                        'lng'             : longitude,
                      },
                      success: function () {
                        $('#Mapshow').modal('hide');
                          loadAvailableList();
                        $('#success').html('Home Location Edited').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();
                      }
                    });
              });
    }

  function loadmap(){
    var latitude,longitude;
    var APP_URL = "{{ url('/') }}";
    var id = window.location.href.split('/').pop();
    $('#Mapshow').modal('show'); 
    var myLatLng=new google.maps.LatLng(40.71331,-74.0688);
    var map = new google.maps.Map(
      document.getElementById('mapshow'),
      {zoom: 15, center: myLatLng}
    );
      google.maps.event.addListener(map, "click", function (event) {
       latitude = event.latLng.lat();
       longitude = event.latLng.lng();
      radius = new google.maps.Circle({map: map,
          radius: 100,
          center: event.latLng,
          fillColor: '#777',
          fillOpacity: 0.1,
          strokeColor: '#AA0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          draggable: true,    // Dragable
          editable: true      // Resizable
      });

      // Center of map
      map.panTo(new google.maps.LatLng(latitude,longitude));
      
    });
    
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

              $('#latlngAvb').on('submit', function (e) {
                e.preventDefault();
                    $.ajax({
                      type: 'post',
                      url: '/api/Available',
                      data:{
                        "home_id"         : id,
                        'lat'             : latitude,
                        'lng'             : longitude,
                      },
                      success: function () {
                        $('#Mapshow').modal('hide');
                          loadAvailableList();
                        $('#success').html('New Home is Added on Another Location').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();
                      }
                    });
              });
    }
</script>

@if(Route::currentRouteName() == 'create-home')
<script>
  var latitude,longitude;
  $(document).ready(function() {
    loadmap();
  function loadmap(){
    var myLatLng=new google.maps.LatLng(40.71331,-74.0688);
    var map = new google.maps.Map(
      document.getElementById('mapshow'),
      {zoom: 15, center: myLatLng}
    );
      google.maps.event.addListener(map, "click", function (event) {
       latitude = event.latLng.lat();
       longitude = event.latLng.lng();
      radius = new google.maps.Circle({map: map,
          radius: 100,
          center: event.latLng,
          fillColor: '#777',
          fillOpacity: 0.1,
          strokeColor: '#AA0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          draggable: true,    // Dragable
          editable: true      // Resizable
      });

      // Center of map
      map.panTo(new google.maps.LatLng(latitude,longitude));
      
    });
    
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
  }
  var APP_URL = "{{ url('/') }}";
  var id = window.location.href.split('/').pop();
  var image,image_name;
  var gal=[];
  var gal_name=[];
    $('#file').on('change',function(e){
            let files = e.target.files[0];
            let reader = new FileReader();
            if(files){
              reader.onloadend = ()=>{
                $('#chosen_feature_img').attr('src',reader.result);
                image = reader.result;
                image_name = files.name;
              }
              reader.readAsDataURL(files); 
          }
        });

        $('#files').on('change',function(evt){
          var files = evt.target.files; 
          for (var i = 0, f; f = files[i]; i++) {
              // Only process image files.
              if (!f.type.match('image.*')) {
                continue;
              }

            var reader = new FileReader();
              // Closure to capture the file information.
                reader.onload = (function(theFile) {
                  return function(e) {
                    // Render thumbnail.
                    gal.push(e.target.result);
                    gal_name.push(theFile.name);
                  };
                })(f);

            // Read in the image file as a data URL.
              reader.readAsDataURL(f);
        }
        });
        $(function () {
          $('form').on('submit', function (e) {
            e.preventDefault();
            if(latitude)
            {
            var title,description,bedroom,bathroom,price,garage,community,stories,mls,status,area,builder;
                title            =  document.getElementById("title").value;         
                description      =  document.getElementById("description").value;         
                bedroom          =  document.getElementById("bedroom").value;         
                bathroom         =  document.getElementById("bathroom").value;         
                garage           =  document.getElementById("garage").value;         
                stories          =  document.getElementById("stories").value;         
                mls              =  document.getElementById("mls").value;         
                area             =  document.getElementById("area").value;         
                community        =  document.getElementById("community_list").value;         
                builder          =  document.getElementById("builder").value;         
                status           =  document.getElementById("status").value;         
                price           =  document.getElementById("price").value;     
                $.ajax({
                  type: 'post',
                  url: '/api/admin/home/',
                  data:{
                    'title'               : title,
                    'description'         : description,
                    'bedroom'             : bedroom,
                    'bathroom'            : bathroom,
                    'garage'              : garage,
                    'stories'             : stories,
                    'mls'                 : mls,
                    'area'                : area,
                    'community'           : community,
                    'status'              : status,
                    'builder'             : builder,
                    'featured-image'      : image,
                    'featured-image-name' : image_name,
                    'gallery'             : gal,
                    'gallery_name'        : gal_name,
                    'price'               : price,
                    'lat'                 : latitude,
                    'lng'                 : longitude,
                  },
                  success: function ( ) {
                    window.location.href = "/admin/homes";
                    $('#success').html('New Home Added').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();
                  }
                });
              }
            else
            {
              alert("Please Select the Location from Google map");
            }

          });

      });
      
					
        });
</script>
@endif


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ZAdsxYc_U1xxyA3ga9gcmG260tW783I&libraries=places"></script>


@if(Route::currentRouteName() == 'manage_home')
<script>
    var APP_URL = "{{ url('/') }}";
    var id = window.location.href.split('/').pop();
    function updategal(){
      var gal=[];
      var gal_name=[];
      $('#files').on('change',function(evt){
          var files = evt.target.files; 
          for (var i = 0, f; f = files[i]; i++) {
              // Only process image files.
              if (!f.type.match('image.*')) {
                continue;
              }

            var reader = new FileReader();
              // Closure to capture the file information.
                reader.onload = (function(theFile) {
                  return function(e) {
                    // Render thumbnail.
                    gal.push(e.target.result);
                    gal_name.push(theFile.name);
                  };
                })(f);

            // Read in the image file as a data URL.
              reader.readAsDataURL(f);
        }
        });
      $('#galleryupdate').on('submit', function (e) {
          e.preventDefault();
            $.ajax({
              type: 'post',
              url: '/api/admin/update-gal/'+id,
              data:{
                    'gallery'      : gal,
                    'gallery_name' : gal_name,
                      },
                      success: function () {
                        $('#galleryModal').modal('hide');
                        $('.modal-backdrop').css('display','none');
                          loadGalleryList();
                          document.gallery1.reset();
                        $('#success').html('Gallery Images Added').show().delay(2000).addClass('alert').addClass('alert-success').fadeOut();
                      }
                    });

              });     
     
    }
    

    loadFeatureList();
      function loadFeatureList(){
        $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/home-feature/'+id,
          success: function(result){   
            $('#feature_list').html(result);
          }   
        });
      }

      loadpdfList();
      function loadpdfList(){
        $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/home-pdf/'+id,
          success: function(result){   
            $('#pdfShow').html(result);
          }   
        });
      }

      loadAvailableList();
      function loadAvailableList(){
        $.ajax({
          type: 'GET',
          url: APP_URL+'/api/homeAvailable/'+id,
          success: function(result){   
            $('#homeAvial').html(result);
          }   
        });
      }
      
      loadGalleryList();
      function loadGalleryList(){
        $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/home-gallery/'+id,
          success: function(result){  
            $('#gallery').html(result);
          }   
        });
      }

      function deletePdf(id)
      {
        $.ajax({
                url: APP_URL + '/api/admin/pdf/'+id,
                type: 'DELETE',
                success: function(result){
                  loadpdfList();  
                  $('#danger').html('Pdf deleted').show().delay(2000).addClass('alert').addClass('alert-danger').fadeOut();
                }
              });
              }


      function deleteGallery(id)
      {
        var home_id = window.location.href.split('/').pop();
        $.ajax({
                url: APP_URL + '/api/admin/home-gallery/'+ home_id +'/'+id,
                type: 'DELETE'
              });
              loadGalleryList();  
              $('#danger').html('Gallery Image deleted').show().delay(2000).addClass('alert').addClass('alert-danger').fadeOut();
      }

      
      function deleteAvail(id)
      {
        $.ajax({
                url: APP_URL + '/api/home-Avail/'+id,
                type: 'DELETE'
              });
              loadAvailableList();
              $('#danger').html('Home Availability deleted').show().delay(2000).addClass('alert').addClass('alert-danger').fadeOut();
      }

      function deleteFeature(id)
      {
        $.ajax({
                url: APP_URL + '/api/admin/home-feature/'+ id,
                type: 'DELETE'
              });
              loadFeatureList();    
              $('#danger').html('Feature deleted').show().delay(2000).addClass('alert').addClass('alert-danger').fadeOut();
      }

    function addFeature(id)
      {      
        $('#AddFeatureModal').modal('show'); 
        $('input[type=file]').on('change',function(e){
                let files = e.target.files[0];
                let reader = new FileReader();
                if(files){
                  reader.onloadend = ()=>{
                    $('#image').attr('src',reader.result);
                    image = reader.result;
                    image_name = files.name;
                  // document.getElementById("featured_img").value  = reader.result;
                  }
                  reader.readAsDataURL(files); 
              }
            });
            $(function () {
              $('#addFeature').on('submit', function (e) {
                var title,home_id ;
                e.preventDefault();
                    title              =  document.getElementById("title").value;         
                    home_id              =  document.getElementById("home_id").value;   
                    $.ajax({
                      type: 'post',
                      url: '/api/admin/home-feature/',
                      data:{
                        'title'               : title,
                        'home_id'             : home_id,
                        'image'      : image,
                        'image-name' : image_name,
                      },
                      success: function () {
                        $('#AddFeatureModal').modal('hide');
                          loadFeatureList();
                          document.AddFeature.reset();
                        $('#success').html('New Feature Added').show().delay(2000).addClass('alert').addClass('alert-success').fadeOut();

                      }
                    });

              });

          });
      }

    function editfeature(id)
      {     
        var image="a",image_name="a";
        var APP_URL = "{{ url('/') }}";
        $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/home-feature-data/'+id,
      success: function(result){    
        document.getElementById("edit_title").value = result.title;
        $('#Editfeature').modal('show');
      }
      }); 

      $('#featuredimage').change(function(e){
                let files = e.target.files[0];
                let reader = new FileReader();
                if(files){
                  reader.onloadend = ()=>{
                    $('#image').attr('src',reader.result);
                    image = reader.result;
                    image_name = files.name;
                  // document.getElementById("featured_img").value  = reader.result;
                  }
                  reader.readAsDataURL(files); 
              }
            });
            $(function () {
              $('#editFeature').on('submit', function (e) {
                var title,home_id ;
                e.preventDefault();
                    title              =  document.getElementById("edit_title").value;         
                    home_id              =  document.getElementById("home_id").value;         
                    $.ajax({
                      type: 'post',
                      url: '/api/admin/home-feature/'+id,
                      data:{
                        'title'               : title,
                        'home_id'             : home_id,
                        'featured-image'      : image,
                        'featured-image-name' : image_name,
                      },
                      success: function () {
                        $('#Editfeature').modal('hide');
                          loadFeatureList();
                        $('#success').html('Feature Edited').show().delay(2000).addClass('alert').addClass('alert-success').fadeOut();
                      }
                    });

              });

          });
      }
</script>
@endif
    {{-- // $.ajax({
    //     type: 'GET',
    //     url: APP_URL+'/api/admin/home/'+id,
  
    //     success: function(result){     
    //       document.getElementById("title").innerHTML = result.title;
    //       document.getElementById("description").innerHTML = result.description;
    //       document.getElementById("area").innerHTML = result.area;
    //       document.getElementById("builder").innerHTML = result.builder;
    //     }
        
    //   });  --}}

   
<script>
    var APP_URL = "{{ url('/') }}";
    loadPagesList(); 
    function loadPagesList(){
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/page',
          success: function(result){
          $('#pages_list').html(result);
          }   
      });
  } 
</script> 
@if(Route::currentRouteName() == 'homes')
  <script>
    var APP_URL = "{{ url('/') }}";
    loadHomeList();
      function loadHomeList(){
        $.ajax({
              type: 'GET',
              url: APP_URL+'/api/admin/home',
              success: function(result){   
              $('#home_list').html(result);
              }   
          });
        }  
       
        
      $(function () {
          $('#homeSearch').on('submit', function (e) {
            var search;
            e.preventDefault();
                search            =  document.getElementById("search").value;  
                $.ajax({
                  type: 'get',
                  url: '/api/admin/home/',
                  data:{
                    'search'           : search,
                  },
                  success: function(result){   
                    $('#home_list').html(result);
                  }  
                });
          });
      });

      function deleteHome(id)
      {       $.ajax({
              url: APP_URL + '/api/admin/home/'+ id,
              type: 'DELETE'
            });
           loadHomeList();
           $('#danger').html('Home deleted').show().delay(2000).addClass('alert').addClass('alert-danger').fadeOut();

      }
      function BlockHome(id)
      {
             $.ajax({
              url: APP_URL + '/api/admin/home-block/'+ id,
              type: 'GET'
            });
           loadHomeList();
           $('#success').html('Home Status changed').show().delay(2000).addClass('alert').addClass('alert-success').fadeOut();

      }
      
      
 </script> 
 @endif 

 @if(Route::currentRouteName() == 'create-home'||Route::currentRouteName() == 'edit-home')
  <script>
    var APP_URL = "{{ url('/') }}";
    var id = window.location.href.split('/').pop();
    loadCommunityList();
      function loadCommunityList(){
        var display;
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/communityList',
          success: function(result){
            $.each(result,function(k){
              display += '<option value="'+result[k].id+'">'+result[k].title+'</option>';
            })
          $('#community_list').html(display);
          }   
      });
  }
  loadStatusList();
      function loadStatusList(){
        var display;
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/home-status',
          success: function(result){
            $.each(result,function(k){
              display += '<option value="'+result[k].id+'">'+result[k].status+'</option>';
            })
          $('#status').html(display);
          }   
      });
  }
</script>
@endif

@if(Route::currentRouteName() == 'dashboard'||Route::currentRouteName() == 'home')
  <script>
    LoadUserList();
    function LoadUserList()
    {
      $.ajax({
              type: 'GET',
              url: APP_URL+'/api/admin/dashboard/user',
              success: function(result){   
              $('#userdash').html(result);
              }   
          });
    }
    function BlockUser(id)
      {
             $.ajax({
              url: APP_URL + '/api/admin/user-block/'+ id,
              type: 'GET'
            });
           LoadUserList();
           $('#success').show().html('User Status changed').show().delay(2000).addClass('alert').addClass('alert-success').fadeOut();

      }
  </script>
@endif

@if(Route::currentRouteName() == 'site-plan')
  <script>
      function deleteSite(s_id)
      {
        $.ajax({
            type: 'DELETE',
            url: APP_URL+'/api/admin/site/'+s_id,
            success: function(result){  
              openHome(event,s_id);
              $('#danger').html('Site Plan Deleted').show().delay(2000).addClass('alert').addClass('alert-danger').fadeOut();
            }   
        });
      }

          loadHomeList();
          function loadHomeList(){
            var display='';
        $.ajax({
              type: 'GET',
              url: APP_URL+'/api/admin/homelist',
              success: function(result){
                $.each(result,function(k){
                  display += '<option value="'+result[k].id+'">'+result[k].title+'</option>';
                })
              $('#home_id').html(display);
              $('#Edit_home_id').html(display);
              }   
          });
      }
     function addSite()
      {
        var APP_URL = "{{ url('/') }}";
        var id = window.location.href.split('/').pop();
        $('#AddNewSite').modal('show');
      $('input[type=file]').on('change',function(e){
              let files = e.target.files[0];
              let reader = new FileReader();
              if(files){
                reader.onloadend = ()=>{
                  $('#image').attr('src',reader.result);
                  image = reader.result;
                  image_name = files.name;
                  // document.getElementById("featured_img").value  = reader.result;
                }
                reader.readAsDataURL(files); 
            }
          });
          $(function () {
            $('#SiteAddForm').on('submit', function (e) {
              e.preventDefault();
              home_id            =  document.getElementById("home_id").value;    
              $.ajax({
                    type: 'get',
                    url: '/api/admin/SiteNo/'+home_id,
                    success: function (result) {
                      if(result==0)
                      {
                        var home_id;
                        home_id            =  document.getElementById("home_id").value;         
                        $.ajax({
                          type: 'post',
                          url: '/api/admin/Site/',
                          data:{
                            'home_id'             : home_id,
                            'image'               : image,
                            'image-name'          : image_name,
                          },
                          success: function ( ) {
                              $('#AddNewSite').modal('hide');
                          document.AddFloor.reset();
                            $('#success').html('New Site Plan Added').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();
                          }
                        });
                      }
                      else
                      {
                        alert("Site Plan already exist for this house ");
                      }
                    }
                  });
            
            });
        });
      }


    loadHomeListDrop();
      function loadHomeListDrop(){
        var display='';
          $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/homelist',
          success: function(result){
            $.each(result,function(k){
              display +='<a class="tablinks"   onclick="openHome(event,'+result[k].id+')">'+result[k].title+'</a>';
            })
          $('#myDropdown').html(display);
          }   
      });
    } 
  </script>
@endif

@if(Route::currentRouteName() == 'FloorComponent')
  <script>
    loadFloorComponent();
    function loadFloorComponent()
    {
      var data = window.location.href.split('/');
      var id = window.location.href.split('/').pop();
      var type = data[5];
      $.ajax({
            type: 'GET',
            url: APP_URL+'/api/admin/floor-component-gallery/'+type+'/'+id,
            success: function(result){     
              $('#floorComponent_list').html(result);
            }   
        });
      }  
      function deletefloorcomponent(fc_id)
      {
        $.ajax({
            type: 'DELETE',
            url: APP_URL+'/api/admin/floor-component/delete/'+fc_id,
            success: function(result){  
              $('.modal-backdrop').css('display','none');
              loadFloorComponent();
              $('#danger').html('Floor Component Deleted').show().show().delay(2000).addClass('alert').addClass('alert-danger').fadeOut();
            }   
        });
      }
        function addFloorComponent()
        {
          var data = window.location.href.split('/');
          var id = window.location.href.split('/').pop();
          var type = data[5];
          $('#AddNewFloorComponent').modal('show');
          $('input[type=file]').on('change',function(e){
                let files = e.target.files[0];
                let reader = new FileReader();
                if(files){
                  reader.onloadend = ()=>{
                    $('#image').attr('src',reader.result);
                    image = reader.result;
                    image_name = files.name;
                  }
                  reader.readAsDataURL(files); 
              }
            });
            $(function () {
              $('#ComponentAddForm').on('submit', function (e) {
                var name,cno;
                e.preventDefault();
                $.ajax({
                  type: 'get',
                  url: APP_URL+'/api/admin/floorCom/'+id+'/'+type,
                  success: function(result){  
                    if(result==1)
                    {
                          name      =  document.getElementById("name").value;         
                          cno      =  document.getElementById("cno").value; 
                          $.ajax({
                            type: 'post',
                            url: '/api/admin/floor-component/',
                            data:{
                              'name'                : name,
                              'cno'                 : cno,
                              'floor_id'            : id,
                              'type'                : type,
                              'image'               : image,
                              'image-name'          : image_name,
                            },
                            success: function ( ) {
                                $('#AddNewFloorComponent').modal('hide');
                                loadFloorComponent();
                                $('#success').html('Add New Floor Component').show().show().delay(4000).addClass('alert').addClass('alert-success').fadeOut();
                            }
                          });
                      }
                      else
                      {
                        $('#AddNewFloorComponent').modal('hide');
                        loadFloorComponent();
                        $('#danger').html('Limit Exceed You Cannot Enter Any More Component').show().show().delay(8000).addClass('alert').addClass('alert-danger').fadeOut();
                           
                      }
                    }
                  });
                });
              });
            }

    function editfloorcomponent(fid)
          {  
            var image="a",image_name="a";
            var data = window.location.href.split('/');
            var id = window.location.href.split('/').pop();
            var type = data[5];
            $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/floor-component/'+fid,

          success: function(result){    
            $('#editfloorModal').modal('show');
              document.getElementById("edit_name").value = result.name;         
              document.getElementById("edit_cno").value = result.component_no;         
          }
          });    
            $('input[type=file]').on('change',function(e){
                let files = e.target.files[0];
                let reader = new FileReader();
                if(files){
                  reader.onloadend = ()=>{
                    $('#Edit_image').attr('src',reader.result);
                    image = reader.result;
                    image_name = files.name;
                  }
                  reader.readAsDataURL(files); 
              }
            });
            $(function () {
              $('#EditComponentForm').on('submit', function (e) {
                e.preventDefault();
                      name =  document.getElementById("edit_name").value; 
                      cno =  document.getElementById("edit_cno").value; 
                    $.ajax({
                      type: 'post',
                      url: '/api/admin/floor-component/'+fid,
                      data:{
                        'name'                : name,
                        'floor_id'            : id,
                        'cno'                 : cno,
                        'type'                : type,
                        'image'               : image,
                        'image-name'          : image_name,
                      },
                      success: function ( ) {
                        $('#editfloorModal').modal('hide');
                        loadFloorComponent();
                      $('#success').html('Floor Component edited').addClass('alert').addClass('alert-success').show().show().delay(2000).fadeOut();
                      }
                    });

              });

          });
    }        
  </script>
@endif

@if(Route::currentRouteName() == 'floorView')
<script> 
    loadHomeList();
      function loadHomeList(){
        var display='';
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/homelist',
          success: function(result){
            $.each(result,function(k){
              display += '<option value="'+result[k].id+'">'+result[k].title+'</option>';
            })
          $('#home_id').html(display);
          $('#Edit_home_id').html(display);
          }   
      });
  } 
    loadHomeListDrop();
      function loadHomeListDrop(){
        var display;
          $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/homelist',
          success: function(result){
            $.each(result,function(k){
              display +='<a class="tablinks"   onclick="openHome(event,'+result[k].id+')">'+result[k].title+'</a>';
            })
          $('#myDropdown').html(display);
          }   
      });
    } 

      function floorComponent(type,home_id)
      {
            window.location.href='/admin/floor-component-gallery/'+type+'/'+home_id;
  
      }

      function floorinfo(fid){
        $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/floor-data/'+fid,
          success: function(result){
            $('#floorContent').html(result);
             $('#viewFloor').modal('show');    
          }   
      });
  } 
  function deleteFloor(f_id)
      {
        $.ajax({
            type: 'DELETE',
            url: APP_URL+'/api/admin/floor/'+f_id,
            success: function(result){  
              openHome(event,f_id);
              $('#danger').html('Floor Deleted').show().delay(2000).addClass('alert').addClass('alert-danger').fadeOut();
            }   
        });
      }
  
      function addFloor()
      {
        var APP_URL = "{{ url('/') }}";
        var id = window.location.href.split('/').pop();
        $('#AddNewFloor').modal('show');
      $('input[type=file]').on('change',function(e){
              let files = e.target.files[0];
              let reader = new FileReader();
              if(files){
                reader.onloadend = ()=>{
                  $('#image').attr('src',reader.result);
                  image = reader.result;
                  image_name = files.name;
                  // document.getElementById("featured_img").value  = reader.result;
                }
                reader.readAsDataURL(files); 
            }
          });
          $(function () {
            $('#FloorAddForm').on('submit', function (e) {
              e.preventDefault();
              home_id            =  document.getElementById("home_id").value;    
              floor_no      =  document.getElementById("floor_no").value;         
              $.ajax({
                    type: 'get',
                    url: '/api/admin/floorNo/'+home_id+'/'+floor_no,
                    success: function (result) {
                      if(result==0)
                      {
                        var home_id,floor_no,bedroom,bathroom,garage,dinning,kitchen;
                        home_id            =  document.getElementById("home_id").value;         
                        floor_no      =  document.getElementById("floor_no").value;         
                        bedroom          =  document.getElementById("bedroom").value;         
                        bathroom         =  document.getElementById("bathroom").value;         
                        garage           =  document.getElementById("garage").value;         
                        dining          =  document.getElementById("dining").value;         
                        kitchen              =  document.getElementById("kitchen").value;         
                        $.ajax({
                          type: 'post',
                          url: '/api/admin/floor/',
                          data:{
                            'home_id'             : home_id,
                            'floor_no'            : floor_no,
                            'bedroom'             : bedroom,
                            'bathroom'            : bathroom,
                            'garage'              : garage,
                            'dining'             : dining,
                            'kitchen'             : kitchen,
                            'image'               : image,
                            'image-name'          : image_name,
                          },
                          success: function ( ) {
                              $('#AddNewFloor').modal('hide');
                          document.AddFloor.reset();
                            $('#success').html('New Floor Added').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();
                          }
                        });
                      }
                      else
                      {
                        alert("Floor No already exist for this house ");
                      }
                    }
                  });
            
            });
        });
      }


      function editfloor(fid)
    {     
      var image_name="a",image="a";
      $.ajax({
    type: 'GET',
    url: APP_URL+'/api/admin/floor/'+fid,
    success: function(result){    
      $('#EditFloor').modal('show');
        document.getElementById("Edit_bedroom").value = result.bedroom;         
        document.getElementById("Edit_bathroom").value = result.bathroom;         
        document.getElementById("Edit_garage").value = result.garage;         
        document.getElementById("Edit_dining").value = result.dining;         
        document.getElementById("Edit_kitchen").value = result.kitchen; 
    }
    });    
    
     $('input[type=file]').change(function(e){
           let files = e.target.files[0];
           let reader = new FileReader();
           if(files){
             reader.onloadend = ()=>{
               $('#Edit_image').attr('src',reader.result);
               image = reader.result;
               image_name = files.name;
             }
             reader.readAsDataURL(files); 
         }
       });
       $(function () {
         $('#EditForm').on('submit', function (e) {
           var home_id,floor_no,bedroom,bathroom,garage,dining,kitchen;
           e.preventDefault();
               bedroom            =  document.getElementById("Edit_bedroom").value;         
               bathroom           =  document.getElementById("Edit_bathroom").value;         
               garage             =  document.getElementById("Edit_garage").value;         
               dining            =  document.getElementById("Edit_dining").value;         
               kitchen            =  document.getElementById("Edit_kitchen").value;         
               $.ajax({
                 type: 'post',
                 url: '/api/admin/floor/'+fid,
                 data:{
                   'bedroom'             : bedroom,
                   'bathroom'            : bathroom,
                   'garage'              : garage,
                   'dining'             : dining,
                   'kitchen'             : kitchen,
                   'image'               : image,
                   'image-name'          : image_name,
                 },
                 success: function ( ) {
                  $('#EditFloor').modal('hide');
                  
                   $('#success').html('Floor Edited').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();
                 }
               });
         });
     });
    }
</script>
@endif

@if(Route::currentRouteName() == 'enquiry')
  <script>
      loadEnquiryList();
      function loadEnquiryList(){
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/enquiry',
          success: function(result){
          $('#enquiry').html(result);
          }   
      });
  } 
  </script>
@endif

@if(Route::currentRouteName() == 'selling')
  <script>
      loadSellingList();
      function loadSellingList(){
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/AllSelling',
          success: function(result){
          $('#SellingEnquiry').html(result);
          }   
      });
    } 

    function SeenSellingUpdate(id)
    {
      $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/Selling-seen-update/'+id,
          success: function(result){
            loadTotalNotification();
          }   
      });
    }
  </script>
@endif

 

 @if(Route::currentRouteName() == 'communities')
  <script>
    var APP_URL = "{{ url('/') }}";
    var id = window.location.href.split('/').pop();
    loadCommunityList();
      function loadCommunityList(){
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/community',
          success: function(result){
          $('#community_list').html(result);
          }   
      });
  }  
       
      function deleteCommunity(id)
      {         $.ajax({
                url: APP_URL + '/api/admin/community/'+ id,
                type: 'DELETE',
            });
            loadCommunityList();
            $('#danger').append('Community Delete').addClass('alert').addClass('alert-danger').show().delay(2000).fadeOut();
      }

      function editcommunity(cid)
      {        
        $('#communityModal').modal('show');

        var APP_URL = "{{ url('/') }}";
        var id = window.location.href.split('/').pop();
        $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/community/'+cid,

      success: function(result){    

          document.getElementById("title").value        = result.title;
          document.getElementById("address").value      = result.address;
          document.getElementById("area").value         = result.area;
          document.getElementById("subdivission").value = result.subdivission;
          document.getElementById("city").value         = result.city;
          document.getElementById("state").value        = result.state;
          document.getElementById("country").value      = result.county;
          document.getElementById("description").value  = result.description;
          document.getElementById("area").value         = result.area;
          document.getElementById("zipcode").value      = result.zipcode;
      }
      }); 
      $(function () {
          $('#Communityform').on('submit', function (e) {
            var title,address,area,state,country,city,description,subdivission,zipcode;
            e.preventDefault();
                title            =  document.getElementById("title").value;         
                address           =  document.getElementById("address").value;         
                area             =  document.getElementById("area").value;         
                city             =  document.getElementById("city").value;         
                country     =  document.getElementById("country").value;         
                subdivission     =  document.getElementById("subdivission").value;         
                state     =  document.getElementById("state").value;         
                zipcode          =  document.getElementById("zipcode").value;  
                description          =  document.getElementById("description").value;  
                        
                $.ajax({
                  type: 'post',
                  url: '/api/admin/community/'+cid,
                  data:{
                    'title'           : title,
                    'address'         : address,
                    'area'            : area,
                    'city'            : city,
                    'county'          : country,
                    'subdivission'    : subdivission,
                    'state'           : state,
                    'zipcode'         : zipcode,
                    'description'     : description,
                     
                  },
                  success: function () {
                    $('#communityModal').modal('hide');
                    loadCommunityList();
                    $('#success').html('Community Edit').addClass('alert').addClass('alert-Success').show().delay(2000).fadeOut();
                  }
                });

          });

      });
      }

      function Addcommunity()
      {        
        $('#AddcommunityModal').modal('show');
        var APP_URL = "{{ url('/') }}";
        
      $(function () {
          $('#Communityaddform').on('submit', function (e) {
            var title,address,area,state,description,country,city,subdivission,zipcode;
            e.preventDefault();
                title            =  document.getElementById("addtitle").value;         
                address          =  document.getElementById("addaddress").value;         
                area             =  document.getElementById("addarea").value;         
                city             =  document.getElementById("addcity").value;         
                country          =  document.getElementById("addcountry").value;         
                subdivission     =  document.getElementById("addsubdivission").value;         
                state            =  document.getElementById("addstate").value;         
                description      =  document.getElementById("Adddescription").value;         
                zipcode          =  document.getElementById("addzipcode").value;  
                        

                $.ajax({
                  type: 'post',
                  url: '/api/admin/community/',
                  data:{
                    'title'           : title,
                    'address'         : address,
                    'area'            : area,
                    'city'            : city,
                    'county'          : country,
                    'subdivission'    : subdivission,
                    'state'           : state,
                    'zipcode'         : zipcode,
                    'description'     : description,
                     
                  },
                  success: function () {
                    $('#AddcommunityModal').modal('hide');
                    $('.modal-backdrop').css('display','none');
                    document.AddCommunity.reset();
                    loadCommunityList();
                    $('#success').html('New Community Added').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();
                  }
                });
          });
      });
    }
 </script> 
 @endif

 </body>
<!-- END: Body-->
</html>
