<!DOCTYPE html>
<html lang="en">
<style>
.main-sidebar {
  position: fixed;
}
.addcard:hover {
  transform: scale(1.03); 
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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
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

      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" rel="stylesheet">

</head>


<body class="hold-transition sidebar-mini" style="font-family: Open Sans, sans-serif;">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

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
                      <a style="margin-right: 20px;">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>
 
                  </li>
              @endguest
          </ul>
  


    <!-- SEARCH FORM -->
     

    <!-- Right navbar links -->
     
  </nav>
</div>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
    <!-- Brand Logo -->
    <div  class="brand-link" id="logo">
      
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
              <li class="nav-item">
                <a href="/admin" class="nav-link">
 
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
                <a href="/admin/enquiry" class="nav-link">
                <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><p>Home Enquiry</p>
                <span class="badge bg-primary" style="margin-left:10px;" id="notification"></span>
                </a>
              </li>

               
              </li><li class="nav-item">
                <a href="/admin/selling" class="nav-link">
                <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><p>Selling Enquiry</p>
                <span class="badge bg-primary" style="margin-left:10px;" id="Sellnotification"></span>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/settings" class="nav-link">
                <i class="fa fa-cogs"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><p>Settings</p></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" data-toggle="modal" data-target="#logout" aria-expanded="true" aria-controls="logout">
                  <i class="fa fa-power-off"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><p>Logout</p></span>
                </a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
             

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


    <div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="logout" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
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