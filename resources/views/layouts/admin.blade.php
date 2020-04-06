<!DOCTYPE html>
<html lang="en">
<style>
.main-sidebar {
  position: fixed;
}

@media (min-width: 768px) {
        .control-sidebar {
               .tab-content {
                       height: calc(100vh - 85px);
                }
        }
}
</style>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Urban</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/bower_components/admin-lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
  <style>
    .card-body{
       height: 150px;
    }
    </style>
     <!-- custom style sheet -->
  <link rel="stylesheet" href="/css/style.css" class="rel">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @if(Route::currentRouteName() == 'edit-page') 
  <!-- include summernote css/js -->
  <link href="{{asset('summernote/summernote.min.css')}}" rel="stylesheet">
  @endif

<link href="{{asset('/admin/cms/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">  
      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('/admin/cms/css/bootstrap.min.css')}}">
      <link href="{{asset('/admin/cms/css/sb-admin-2.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('/admin/cms/css/bootstrap-extended.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/admin/cms/css/material-extended.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/admin/cms/fonts/simple-line-icons/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/admin/cms/css/vendors/datatables.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/urban_project/public/admin/cms/css/components.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/urban_project/public/admin/cms/css/core/style.css')}}">
      <link href="{{asset('/admin/cms/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
      <link href="{{asset('/admin/cms/css/custom2.css')}}" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
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
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>


    <!-- SEARCH FORM -->
     

    <!-- Right navbar links -->
     
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/bower_components/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Urban</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
              <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link">
 
                <i class="fa fa-address-card"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><p>Dashboard</p></span>

                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/homes" class="nav-link">
                <i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><p>Homes</p></span>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/community" class="nav-link">
                <i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><p>Communities</p></span>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="/admin/floor" class="nav-link">
                <i class="fa fa-terminal"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><p>Floor</p></span>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/pages" class="nav-link">
                <i class="fa fa-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><p>Page</p></span>
                </a>
              </li>

            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div id="success" style="text-align:center; color:green; font-size:25px ;font-weight:bold;background:grey;"></div>
    <div id="danger" style="text-align:center; color:red; font-size:25px ;font-weight:bold;background:grey;"></div>
    @yield('content')
        

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>

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
  $('#deleteHome').on('show.bs.modal', function (e) {

 var $trigger = $(e.relatedTarget);
 var id=$trigger.data('id');
 $('#ys-home-btn').click(function()
 {
   $('#deleteHome').modal('hide');
     deleteHome(id);

 });
});

$('#deleteFloorComponent').on('show.bs.modal', function (e) {

var $trigger = $(e.relatedTarget);
var id=$trigger.data('id');
$('#ys-floor-component-btn').click(function()
{
  $('#deleteFloorComponent').modal('hide');
  deletefloorcomponent(id);
});
});

$('#deleteFloor').on('show.bs.modal', function (e) {

var $trigger = $(e.relatedTarget);
var id=$trigger.data('id');

$('#ys-floor-btn').click(function()
{
  $('#deleteFloor').modal('hide');
  deleteFloor(id);
});
});

$('#deleteCommunity').on('show.bs.modal', function (e) {

var $trigger = $(e.relatedTarget);
var id=$trigger.data('id');
$('#ys-comm-btn').click(function()
{
  $('#deleteCommunity').modal('hide');
  $('.modal-backdrop').css('display','none');
    deleteCommunity(id);

});
});
</script>

@if(Route::currentRouteName() == 'edit-home' )
<script>
$(document).ready(function() {
  var APP_URL = "{{ url('/') }}";
  var id = window.location.href.split('/').pop();
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
        document.getElementById("mls").value = result.mls;
        document.getElementById("area").value = result.area;
        document.getElementById("community_list").value = result.community;
        document.getElementById("builder").value = result.builder;
        document.getElementById("file").value = result.featured_image;
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
            var title,description,bedroom,bathroom,garage,status,stories,mls,area,builder,meta_description,meta_title;
            e.preventDefault();
                title              =  document.getElementById("title").value;         
                description        =  document.getElementById("description").value;         
                bedroom            =  document.getElementById("bedroom").value;         
                bathroom           =  document.getElementById("bathroom").value;         
                garage             =  document.getElementById("garage").value;         
                stories            =  document.getElementById("stories").value;         
                mls                =  document.getElementById("mls").value;         
                area               =  document.getElementById("area").value;         
                status               =  document.getElementById("status").value;         
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
                  },
                  success: function () {
                    window.location.href = "/admin/home/manage/"+id;
                    $('#success').html('Home Edited').delay(2000).fadeOut();
                  }
                });

          });

      });
});
</script>
@endif
@if(Route::currentRouteName() == 'create-home' )
<script>
$(document).ready(function() {
  var APP_URL = "{{ url('/') }}";
  var id = window.location.href.split('/').pop();
  
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
            var title,description,bedroom,bathroom,garage,community,stories,mls,status,area,builder;
            e.preventDefault();
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
                status       =  document.getElementById("status").value;         
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
                  },
                  success: function ( ) {
                    window.location.href = "/admin/homes";
                    $('#success').html('New Home Added').delay(2000).fadeOut();
                  }
                });

          });

      });
});
</script>
@endif

<script>
    var APP_URL = "{{ url('/') }}";
    var id = window.location.href.split('/').pop();
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
    function deleteFeature(id)
    {
      $.ajax({
              url: APP_URL + '/api/admin/home-feature/'+ id,
              type: 'DELETE'
            });
            loadFeatureList();    
            $('#danger').html('Feature deleted').delay(2000).fadeOut();
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
                        $('#success').html('New Feature Added').delay(2000).fadeOut();

                      }
                    });

              });

          });
      }

    function editfeature(id)
      {     
        
        var APP_URL = "{{ url('/') }}";
        $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/home-feature-data/'+id,
      success: function(result){    
        document.getElementById("edit_title").value = result.title;
        $('#Editfeature').modal('show');
      }
      }); 
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
                        $('#success').html('Feature Edited').delay(2000).fadeOut();
                      }
                    });

              });

          });
      }
</script>
   
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
      function deleteHome(id)
      {       $.ajax({
              url: APP_URL + '/api/admin/home/'+ id,
              type: 'DELETE'
            });
           loadHomeList();

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

@if(Route::currentRouteName() == 'dashboard')
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
              $('#danger').html('Floor Component Deleted').delay(2000).fadeOut();
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
                var name;
                e.preventDefault();
                    name      =  document.getElementById("name").value;         
                    $.ajax({
                      type: 'post',
                      url: '/api/admin/floor-component/',
                      data:{
                        'name'                : name,
                        'floor_id'            : id,
                        'type'                : type,
                        'image'               : image,
                        'image-name'          : image_name,
                      },
                      success: function ( ) {
                          $('#AddNewFloorComponent').modal('hide');
                          loadFloorComponent();
                          $('#success').html('Add New Floor Component').delay(2000).fadeOut();
                      }
                    });
              });
            });
        }

    function editfloorcomponent(fid)
          {  
            var data = window.location.href.split('/');
            var id = window.location.href.split('/').pop();
            var type = data[5];
            $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/floor-component/'+fid,

          success: function(result){    
            $('#editfloorModal').modal('show');
              document.getElementById("edit_name").value = result.name;         
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
                    $.ajax({
                      type: 'post',
                      url: '/api/admin/floor-component/'+fid,
                      data:{
                        'name'                : name,
                        'floor_id'            : id,
                        'type'                : type,
                        'image'               : image,
                        'image-name'          : image_name,
                      },
                      success: function ( ) {
                        $('#editfloorModal').modal('hide');
                        loadFloorComponent();
                      $('#success').html('Floor Component edited').delay(2000).fadeOut();
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
        var display;
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
              display +='<a class="tablinks" onclick="openHome(event,'+result[k].id+')">'+result[k].title+'</a>';
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
              window.location.href='/admin/floor';
              $('#danger').html('Floor Deleted').delay(2000).fadeOut();
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
           var home_id,floor_no,bedroom,bathroom,garage,dinning,kitchen;
           e.preventDefault();
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
                   window.location.href = "/admin/floor";
                   $('#success').html('New Floor Added').delay(2000).fadeOut();
                 }
               });

         });

     });
  }

     function editfloor(fid)
    {     
      $.ajax({
    type: 'GET',
    url: APP_URL+'/api/admin/floor/'+fid,

    success: function(result){    
      $('#EditFloor').modal('show');

        document.getElementById("Edit_floor_no").value = result.floor_no;         
        document.getElementById("Edit_bedroom").value = result.bedroom;         
        document.getElementById("Edit_bathroom").value = result.bathroom;         
        document.getElementById("Edit_garage").value = result.garage;         
        document.getElementById("Edit_dining").value = result.dining;         
        document.getElementById("Edit_kitchen").value = result.kitchen; 
        document.getElementById("Edit_image").value = result.image; 
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
         $('#EditForm').on('submit', function (e) {
           var home_id,floor_no,bedroom,bathroom,garage,dining,kitchen;
           e.preventDefault();
               home_id            =  document.getElementById("Edit_home_id").value;         
               floor_no           =  document.getElementById("Edit_floor_no").value;         
               bedroom            =  document.getElementById("Edit_bedroom").value;         
               bathroom           =  document.getElementById("Edit_bathroom").value;         
               garage             =  document.getElementById("Edit_garage").value;         
               dining            =  document.getElementById("Edit_dining").value;         
               kitchen            =  document.getElementById("Edit_kitchen").value;         
               $.ajax({
                 type: 'post',
                 url: '/api/admin/floor/'+fid,
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
                   window.location.href = "/admin/floor";
                   $('#success').html('Floor Edited').delay(2000).fadeOut();
                 }
               });

         });

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
            $('#danger').html('Community Delete').delay(2000).fadeOut();
      }

      function editcommunity(cid)
      {        
        var APP_URL = "{{ url('/') }}";
        var id = window.location.href.split('/').pop();
        $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/community/'+cid,

      success: function(result){    
        $('#communityModal').modal('show');

        document.getElementById("title").value = result.title;
        document.getElementById("address").value = result.address;
        document.getElementById("area").value = result.area;
        document.getElementById("subdivission").value = result.subdivission;
        document.getElementById("city").value = result.city;
        document.getElementById("state").value = result.state;
        document.getElementById("country").value = result.county;
        document.getElementById("area").value = result.area;
        document.getElementById("zipcode").value = result.zipcode;
      }
      }); 
      $(function () {
          $('#Communityform').on('submit', function (e) {
            var title,address,area,state,country,city,subdivission,zipcode;
            e.preventDefault();
                title            =  document.getElementById("title").value;         
                address           =  document.getElementById("address").value;         
                area             =  document.getElementById("area").value;         
                city             =  document.getElementById("city").value;         
                country     =  document.getElementById("country").value;         
                subdivission     =  document.getElementById("subdivission").value;         
                state     =  document.getElementById("state").value;         
                zipcode          =  document.getElementById("zipcode").value;  
                        

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
                     
                  },
                  success: function () {
                    $('#communityModal').modal('hide');
                    loadCommunityList();
                    $('#success').html('Community Edit').delay(2000).fadeOut();
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
            var title,address,area,state,country,city,subdivission,zipcode;
            e.preventDefault();
                title            =  document.getElementById("addtitle").value;         
                address           =  document.getElementById("addaddress").value;         
                area             =  document.getElementById("addarea").value;         
                city             =  document.getElementById("addcity").value;         
                country     =  document.getElementById("addcountry").value;         
                subdivission     =  document.getElementById("addsubdivission").value;         
                state     =  document.getElementById("addstate").value;         
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
                     
                  },
                  success: function () {
                    $('#AddcommunityModal').modal('hide');
                    $('.modal-backdrop').css('display','none');
                    loadCommunityList();
                    $('#success').html('New Community Added').delay(2000).fadeOut();
                  }
                });
          });
      });
    }
 </script> 
 @endif
</body>
</html>
