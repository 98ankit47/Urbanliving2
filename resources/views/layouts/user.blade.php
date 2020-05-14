<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Urban Living</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ZAdsxYc_U1xxyA3ga9gcmG260tW783I&libraries=places"
          async defer></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style type="text/css">
	body{
		font-family: 'Varela Round', sans-serif;
	}
	.form-control {
		box-shadow: none;		
		font-weight: normal;
		font-size: 13px;
	}
	.form-control:focus {
		border-color: #33cabb;
		box-shadow: 0 0 8px rgba(0,0,0,0.1);
	}
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #dfe3e8;
		border-radius: 0;
	}
	.nav-link img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand, .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
		padding-left: 0;
		font-size: 20px;
		padding-right: 50px;
	}
	.navbar .navbar-brand b {
		font-weight: bold;
		color: #33cabb;		
	}
	.navbar .form-inline {
        display: inline-block;
    }
	.navbar .nav li {
		position: relative;
	}
	.navbar .nav li a {
		color: #888;
	}
	.search-box {
        position: relative;
    }	
    .search-box input {
        padding-right: 35px;
		border-color: #dfe3e8;
        border-radius: 4px !important;
		box-shadow: none
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
		color: #fff;
		background: #33cabb;
		padding-top: 8px;
		padding-bottom: 6px;
		vertical-align: middle;
		border: none;
	}	
	.navbar .nav .btn-primary:hover, .navbar .nav .btn-primary:focus {		
		color: #fff;
		outline: none;
		background: #31bfb1;
	}
	.navbar .navbar-right li:first-child a {
		padding-right: 30px;
	}
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar ul.nav li.active a, .navbar ul.nav li.open > a {
		background: transparent !important;
	}	
	.navbar .nav .get-started-btn {
		min-width: 120px;
		margin-top: 8px;
		margin-bottom: 8px;
	}
	.navbar ul.nav li.open > a.get-started-btn {
		color: #fff;
		background: #31bfb1 !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .nav .dropdown-menu li {
		color: #999;
		font-weight: normal;
	}
	.navbar .nav .dropdown-menu li a, .navbar .nav .dropdown-menu li a:hover, .navbar .nav .dropdown-menu li a:focus {
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .navbar-form {
		border: none;
	}
	.navbar .dropdown-menu.form-wrapper {
		width: 280px;
		padding: 20px;
		left: auto;
		right: 0;
        font-size: 14px;
	}
	.navbar .dropdown-menu.form-wrapper a {		
		color: #33cabb;
		padding: 0 !important;
	}
	.navbar .dropdown-menu.form-wrapper a:hover{
		text-decoration: underline;
	}
	.navbar .form-wrapper .hint-text {
		text-align: center;
		margin-bottom: 15px;
		font-size: 13px;
	}
	.navbar .form-wrapper .social-btn .btn, .navbar .form-wrapper .social-btn .btn:hover {
		color: #fff;
        margin: 0;
		padding: 0 !important;
		font-size: 13px;
		border: none;
		transition: all 0.4s;
		text-align: center;
		line-height: 34px;
		width: 47%;
		text-decoration: none;
    }	
	.navbar .social-btn .btn-primary {
		background: #507cc0;
	}
	.navbar .social-btn .btn-primary:hover {
		background: #4676bd;
	}
	.navbar .social-btn .btn-info {
		background: #64ccf1;
	}
	.navbar .social-btn .btn-info:hover {
		background: #4ec7ef;
	}
	.navbar .social-btn .btn i {
		margin-right: 5px;
		font-size: 16px;
		position: relative;
		top: 2px;
	}
	.navbar .form-wrapper .form-footer {
		text-align: center;
		padding-top: 10px;
		font-size: 13px;
	}
	.navbar .form-wrapper .form-footer a:hover{
		text-decoration: underline;
	}
	.navbar .form-wrapper .checkbox-inline input {
		margin-top: 3px;
	}
	.or-seperator {
        margin-top: 32px;
		text-align: center;
		border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
		color: #666;
        padding: 0 8px;
		width: 30px;
		height: 30px;
		font-size: 13px;
		text-align: center;
		line-height: 26px;
		background: #fff;
		display: inline-block;
		border: 1px solid #e0e0e0;
		border-radius: 50%;
		position: relative;
		top: -15px;
		z-index: 1;
    }
    .navbar .checkbox-inline {
		font-size: 13px;
	}
	.navbar .navbar-right .dropdown-toggle::after {
		display: none;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 768px){
		.navbar .dropdown-menu.form-wrapper {
			width: 100%;
			padding: 10px 15px;
			background: transparent;
			border: none;
		}
		.navbar .form-inline {
			display: block;
		}
		.navbar .input-group {
			width: 100%;
		}
		.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
			display: block;
		}
	}
</style>
</head> 

<nav class="navbar navbar-default navbar-expand-lg navbar-light" style="background:#CBCBC6 ">
	<div class="navbar-header d-flex col" >
		<a class="navbar-brand" href="#"><img style="height:40px;" src="https://urbanliving.com/imgs/82"/></a>  		
		<!-- <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button> -->
	
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="#" class="nav-link">Development</a></li>&nbsp;&nbsp;
			<li class="nav-item"><a href="/maps" class="nav-link">Map</a></li>&nbsp;&nbsp;
			<li class="nav-item"><a href="/neighbor" class="nav-link">Neighborhood</a></li>&nbsp;&nbsp;
			<li class="nav-item"><a href="/sellHome" class="nav-link">Sell Home</a></li>&nbsp;&nbsp;
			<li class="nav-item"><a href="/userProfile" class="nav-link">About Us</a></li>
		</ul>
		<form class="navbar-form form-inline" style="padding-left:3%;">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right ml-auto">	
			@guest
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form method="POST" action="{{ route('login') }}">
							@csrf
	
							<div class="form-group row">
									<input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
	
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
							</div>
	
							<div class="form-group row">
									<input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
	
									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
							</div>
	
							<div class="form-group row">
									<div class="form-check" style="text-align:center">
										<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
	
										<label class="form-check-label" for="remember">
											{{ __('Remember Me') }}
										</label>
									</div>
							</div>
	
							<div class="form-group row mb-0">
									<button type="submit" class="btn btn-primary btn-block" style="width: 100%;">
										{{ __('Login') }}
									</button>
									@if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>	
									@endif
	
									<!-- @if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>
									@endif -->
							</div>
						</form>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form id="userCreate">
							<p class="hint-text">Fill in this form to create your account!</p>
              				<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="username" required="required">
							</div>
              				<div class="form-group">
								<input type="email" class="form-control" id="Cemail" placeholder="Email" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="Cpassword" placeholder="Password" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="confirm" placeholder="Confirm Password" required="required">
							</div>
							<div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Sign up">
						</form>
					</li>
				</ul>
			</li>
		 
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
</nav>
</div>
                                                                          
<br><br>

<div class="container">
  @yield('content')
</div>
<br><br>


<!--FOOTER-->
<hr>
<footer class="page-footer font-small stylish-color-dark pt-4"  style="background:#e8e8e8">
  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a type="button" class="btn-floating btn-fb mx-1">
        <i class="fa fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a type="button" class="btn-floating btn-tw mx-1">
        <i class="fa fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a type="button" class="btn-floating btn-gplus mx-1">
        <i class="fa fa-google-plus"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a type="button" class="btn-floating btn-li mx-1">
        <i class="fa fa-linkedin"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a type="button" class="btn-floating btn-dribbble mx-1">
        <i class="fa fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <hr>
  <!-- Call to action -->
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row" >

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!-- Form -->
        <form class="form-inline">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
            aria-label="Search">
          <a type="button"><i style="color:#DC143C;" class="fa fa-search" aria-hidden="true"></i></a>
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <form class="input-group">
          <input type="text" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button style="background-color:#DC143C; color:white;" class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
          </div>
        </form>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

</footer>
<!-- Footer -->
  <div class="footer-copyright text-center py-3" style="background:#CBCBC6" >© 2020 Copyright:
    <a href="#" style="color:#DC143C;">Urban Living</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script>   
	var APP_URL = "{{ url('/') }}";
	 $('#userCreate').on('submit', function (e) {
	   var email,name,password,confirm;
	   e.preventDefault();
		   	email            =  document.getElementById("Cemail").value;         
		   	name      		=  document.getElementById("name").value;         
		   	password          =  document.getElementById("Cpassword").value;         
		   	confirm        	 =  document.getElementById("confirm").value;      
		   if(password==confirm)
		   {   
				$.ajax({
					type: 'post',
					url: '/api/user',
					data:{
					'email'             : email,
					'name'              : name,
					'password'          : password,
					'confirm'           : confirm,
					},
					success: function ( ) {
					$('#success').html("").addClass('alert').addClass('alert-success').delay(4000).fadeOut();
					}
				});
		   }
		   else
		   {
			    alert("Password And Confirm Password is not same");
		   }
	 });
</script>


@if(Route::currentRouteName() == 'selling-home')
<script>
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
			$('#selling').on('submit', function (e) {
				alert();
			  var name,email,bedroom,bathroom,price,address,city,state,zip,area,square,time,type;
			  e.preventDefault();
				  name            =  document.getElementById("name").value;         
				  email           =  document.getElementById("mail").value;         
				  address         =  document.getElementById("address").value;         
				  city            =  document.getElementById("city").value;         
				  state           =  document.getElementById("state").value;         
				  zip             =  document.getElementById("zip").value;         
				  bedroom         =  document.getElementById("bedroom").value;         
				  bathroom        =  document.getElementById("bathroom").value;         
				  square          =  document.getElementById("square").value;         
				  price           =  document.getElementById("price").value;         
				  type            =  document.getElementById("type").value;         
				  time            =  document.getElementById("time").value;         
				  $.ajax({
					type: 'post',
					url: '/api/selling-home/',
					data:{
					  'name'                : name,
					  'email'               : email,
					  'bedroom'             : bedroom,
					  'bathroom'            : bathroom,
					  'city'                : city,
					  'state'               : state,
					  'zip'                 : zip,
					  'address'             : address,
					  'square'              : square,
					  'price'               : price,
					  'type'                : type,
					  'featured-image'      : image,
					  'featured-image-name' : image_name,
					  'gallery'             : gal,
					  'gallery_name'        : gal_name,
					  'time'                : time,
					},
					success: function ( ) {
					  $('#success').html('Your Enquiry Has Been Posted').addClass('alert').addClass('alert-success').show().delay(2000).fadeOut();
					}
				  });
  
			});
  
		});
		
  </script>
  @endif

@if(Route::currentRouteName() == 'developmentDetail')
  <script>   
        var APP_URL = "{{ url('/') }}";
        var id = window.location.href.split('/').pop();
		loadMap();
            function loadMap(){
				var id = window.location.href.split('/').pop();
                $.ajax({
                type: 'GET',
                url: APP_URL+'/api/Avail/'+id,
                  success: function(result){
					var ln = Object.keys(result).length;
					var infoWindow = new google.maps.InfoWindow();
					var myLatLng=new google.maps.LatLng(40.7133,-74.0688);
					var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
					var markers = [];
					var map = new google.maps.Map(
						document.getElementById('MapAvailabe'), {zoom:16, center: myLatLng});
						var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
						var markers = [];
						for(var i=0;i<ln;i++)
						{	
							var data = markers[result[i].id];
							var marker = new google.maps.Marker({
								position: new google.maps.LatLng(result[i].lat,result[i].lng),
								map: map,
								icon: iconBase + 'library_maps.png',
								title: result[i].title,
							});
						}
							 
				  }
               });
              } 
         $('#enquiry').on('submit', function (e) {
           var time,date,message,phone;
           e.preventDefault();
               time          =  document.getElementById("time").value;         
               date         =  document.getElementById("date").value;         
               message           =  document.getElementById("message").value;         
               phone          =  document.getElementById("phone").value;         
               $.ajax({
                 type: 'post',
                 url: '/api/enquiry',
                 data:{
                   'date'              : date,
                   'time'              : time,
                   'phone'             : phone,
                   'message'           : message,
                   'seen'              : 0,
                   'home_id'           : id,
                 },
                 success: function ( ) {
                   $('#success').html('Urban Living receive your Message they will respond you earlier').addClass('alert').addClass('alert-success').delay(4000).fadeOut();
                 }
               });

         });
         function floorDetail(id)
         {
            var APP_URL = "{{ url('/') }}";
            loadFloorDetail();
            function loadFloorDetail(){
                $.ajax({
                type: 'GET',
                url: APP_URL+'/api/admin/floorDetail/'+id,
                  success: function(result){
						$('#floorDetail').html(result);
                  }   
               });
              } 
         }
 
  </script>
@endif


@if(Route::currentRouteName() == 'neighbour')
  <script>
	  function Nearby(type,lat,lng)
	  {			
		var myLatLng=new google.maps.LatLng(lat,lng);
		var map = new google.maps.Map(
		document.getElementById('map'), {zoom:16, center: myLatLng});
		var request = {
			location: myLatLng,
			radius: '300',
			type: [type],
		};
		function createmarker(latlng,icn,title)
		{
			var marker = new google.maps.Marker({
				position: latlng,
				map: map,
				icon: icn,
				title: title
			});
		}

		service = new google.maps.places.PlacesService(map);
		service.nearbySearch(request, callback);

		function callback(results, status) {
			if (status === google.maps.places.PlacesServiceStatus.OK) {
				for (var i = 0; i < results.length; i++) {
					var place=results[i];
					latlng=place.geometry.location;
					icn=place.icon;
					title=place.title;
					createmarker(latlng,icn,title);
				}
			}
		}

	  }
			loadMap();
            function loadMap(){
				var id = window.location.href.split('/').pop();
                $.ajax({
                type: 'GET',
                url: APP_URL+'/api/map/'+id,
                  success: function(result){
					var lat=result.lat;
					var lng=result.lng;
					var infoWindow = new google.maps.InfoWindow();
					var myLatLng=new google.maps.LatLng(lat,lng);
					var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
					var markers = [];
					var map = new google.maps.Map(
						document.getElementById('map'), {zoom:16, center: myLatLng});
						var data = markers[result.id];
						var marker = new google.maps.Marker({
								position:  myLatLng,
								map: map,
								icon: iconBase + 'library_maps.png',
								title: "Home",
							});
							$.ajax({
								type: 'GET',
								url: APP_URL+'/api/Avail/'+id,
								success: function(results){
									var ln = Object.keys(results).length;
											for(var i=0;i<ln;i++)
											{	
												var data = markers[results[i].id];
												var marker = new google.maps.Marker({
												position: new google.maps.LatLng(results[i].lat,results[i].lng),
												map: map,
												icon: iconBase + 'library_maps.png',
												title: "home",
												});
											}
										}
									}); 
							markers.push(marker);
							(function (marker, data) {
								var image=result.featured_image;
								var title=result.title;
								var bed=result.bedroom;
								var bathroom=result.bathroom;
								var price=result.price;
								
								google.maps.event.addListener(marker, "mouseover", function (e) {
									infoWindow.setContent('<div id="content" class="map-window"><div class="item">'+
									'<div class="item-img"><img style="height:100px;width:150px" class="js-mediaFit js-mediaFitCollected landscape-media loaded" src="/uploads/homes/'+image+'">'+
									'</div><div class="item-body"><div class="item-body-content">'+
									'<div class="item-header"><h6>'+title+'</h6></div>'+
									'<ul class="item-details" type="none">'+
									'<li class="price "><i class="fa fa-price" style="font-size:20px"></i><span>$ '+price+'</span></li>'+
									'<li class="icon icon-bed"><i class="fa fa-bed" style="font-size:20px"></i><span>'+bed+'</span><i class="fa fa-bath" style="font-size:20px"></i><span>'+bathroom+'</span></li>'+
									'</ul>'+
									'</div></div>');
									infoWindow.open(map, marker);
									
								});
							})(marker, data);
				  }
               });
              } 
            
  </script>
@endif
@if(Route::currentRouteName() == 'homeMap' || Route::currentRouteName() == 'alldev')
	<script>
		var APP_URL = "{{ url('/') }}";
		loadMapHomeDetail();
		function loadMapHomeDetail(){
		$.ajax({
		type: 'GET',
		url: APP_URL+'/api/mapHome/',
			success: function(result){
				$('#mapHome').html(result);
			}   
		});
		} 
		function scrollList(lat,lng)
		{
			var APP_URL = "{{ url('/') }}";
			$.ajax({
			type: 'GET',
			url: APP_URL+'/api/mapMarkerHome/'+lat +'/' +lng,
				success: function(result){	
					homeScroll('home'+result.id)
				}   
			});
			

			function scrollIfNeeded(element, container) {
            if (element.offsetTop < container.scrollTop) {
                container.scrollTop = element.offsetTop;
            } else {
                const offsetBottom = element.offsetTop + element.offsetHeight;
                const scrollBottom = container.scrollTop + container.offsetHeight;
                if (offsetBottom > scrollBottom) {
                container.scrollTop = offsetBottom - container.offsetHeight;
                }
            }
            }
            function homeScroll(homeid)
            {
                scrollIfNeeded(document.getElementById(homeid), document.getElementById('container'));
            }   
		}
		function summary(id)
			{
				var APP_URL = "{{ url('/') }}";
				$.ajax({
				type: 'GET',
				url: APP_URL+'/api/summary/'+id,
					success: function(result){
						$('#summarydata').html(result);
  						$('#summaryModal').modal('show');
						var slideIndex = 1;
						showDivs(slideIndex);
						
						function plusDivs(n){
						showDivs(slideIndex += n);
						}
						
						function currentDiv(n)
						{
						showDivs(slideIndex = n);
						}
						function showDivs(n)
						{
							var i;
							var x = document.getElementsByClassName("mySlides");
							var dots = document.getElementsByClassName("demo");
							if (n > x.length) {slideIndex = 1}    
							if (n < 1) {slideIndex = x.length}
							for (i = 0; i < x.length; i++) {
								x[i].style.display = "none";  
							}
							for (i = 0; i < dots.length; i++) {
								dots[i].className = dots[i].className.replace(" w3-red", "");
							}
							x[slideIndex-1].style.display = "block";  
							dots[slideIndex-1].className += " w3-red";
						}
					}   
				});
			}
	</script>
        <script>
			loadMap();
            function loadMap(){
                $.ajax({
                type: 'GET',
                url: APP_URL+'/api/map/',
                  success: function(result){
					var ln = Object.keys(result).length;
					var infoWindow = new google.maps.InfoWindow();
					var myLatLng=new google.maps.LatLng(40.7133,-74.0688);
					var map = new google.maps.Map(
						document.getElementById('map'), {zoom: 15, center: myLatLng});
						var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
						var markers = [];
						for(var i=0;i<ln;i++)
						{	
							var data = markers[result[i].id];
							var marker = new google.maps.Marker({
								position: new google.maps.LatLng(result[i].lat,result[i].lng),
								map: map,
								icon: iconBase + 'library_maps.png',
								title: result[i].title,
							});
							markers.push(marker);
							(function (marker, data) {
								var image=result[i].featured_image;
								var title=result[i].title;
								var bed=result[i].bedroom;
								var bathroom=result[i].bathroom;
								var price=result[i].price;
								
								google.maps.event.addListener(marker, "mouseover", function (e) {
									infoWindow.setContent('<div id="content" class="map-window"><div class="item">'+
									'<div class="item-img"><img style="height:100px;width:150px" class="js-mediaFit js-mediaFitCollected landscape-media loaded" src="/uploads/homes/'+image+'">'+
									'</div><div class="item-body"><div class="item-body-content">'+
									'<div class="item-header"><h6>'+title+'</h6></div>'+
									'<ul class="item-details" type="none">'+
									'<li class="price "><i class="fa fa-price" style="font-size:20px"></i><span>$ '+price+'</span></li>'+
									'<li class="icon icon-bed"><i class="fa fa-bed" style="font-size:20px"></i><span>'+bed+'</span><i class="fa fa-bath" style="font-size:20px"></i><span>'+bathroom+'</span></li>'+
									'</ul>'+
									'</div></div>');
									infoWindow.open(map, marker);
									
								});
							})(marker, data);
							google.maps.event.addListener(marker, "click", function (event) {
                    			var lat=this.position.lat();
								var lng=this.position.lng();
								scrollList(lat,lng)
							});
							 
						} 
					}  
               });
              } 
            
		</script>  
	@endif

<script type="text/javascript">
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".navbar-right .dropdown-menu", function(e){
		e.stopPropagation();
	});
</script>
</body>

</html>