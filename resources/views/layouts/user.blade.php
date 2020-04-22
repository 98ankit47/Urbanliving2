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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
 

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

<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#"><img style="height:40px;" src="https://urbanliving.com/imgs/82"/></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="#" class="nav-link">Development</a></li>&nbsp;&nbsp;
			<li class="nav-item"><a href="/maps" class="nav-link">Map</a></li>&nbsp;&nbsp;
			<li class="nav-item"><a href="#" class="nav-link">Features</a></li>&nbsp;&nbsp;
			<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>&nbsp;&nbsp;
			<li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
		</ul>
		<form class="navbar-form form-inline">
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
                                                                                   

<div class="container">
  @yield('content')
</div>

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

@if(Route::currentRouteName() == 'developmentDetail')
  <script>   
        var APP_URL = "{{ url('/') }}";
        var id = window.location.href.split('/').pop();
         $('#enquiry').on('submit', function (e) {
           var email,name,time,date,message,phone;
           e.preventDefault();
               email            =  document.getElementById("uemail").value;         
               name      =  document.getElementById("uname").value;         
               time          =  document.getElementById("time").value;         
               date         =  document.getElementById("date").value;         
               message           =  document.getElementById("message").value;         
               phone          =  document.getElementById("phone").value;         
               $.ajax({
                 type: 'post',
                 url: '/api/enquiry',
                 data:{
                   'email'             : email,
                   'date'              : date,
                   'time'              : time,
                   'phone'             : phone,
                   'name'              : name,
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

@if(Route::currentRouteName() == 'homeMap')

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
			selectMarkerHome();
			function selectMarkerHome(){
			$.ajax({
			type: 'GET',
			url: APP_URL+'/api/mapMarkerHome/'+lat +'/' +lng,
				success: function(result){
					var request = {
								location: new google.maps.LatLng(result.lat,result.lng),
								radius: '500',
								type: ['college'],
							};
					service = new google.maps.places.PlacesService(map);
					service.nearbySearch(request, callback);

								function callback(results, status) {
									if (status === google.maps.places.PlacesServiceStatus.OK) {
										for (var i = 0; i < results.length; i++) {
											var place=results[i];
											 console.log(place);
										}
										loadMap();
									}
								}
				}   
			});
			} 
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
					var map;
					var myLatLng=new google.maps.LatLng(31.3448372,75.555309);
					var map = new google.maps.Map(
						document.getElementById('map'), {zoom: 15, center: myLatLng});
						var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
						for(var i=0;i<ln;i++)
						{	
							var marker = new google.maps.Marker({
								position: new google.maps.LatLng(result[i].lat,result[i].lng),
								map: map,
								icon: iconBase + 'library_maps.png',
								title: result[i].title,
							});
							google.maps.event.addListener(marker, "click", function (event) {
                    			var lat=this.position.lat();
                    			var lng=this.position.lng();
								scrollList(lat,lng)
							});
							// var request = {
							// 	location: myLatLng,
							// 	radius: '500',
							// 	type: ['college'],
							// };
							// function createmarker(latlng,icn,title)
							// {
							// 	var marker = new google.maps.Marker({
							// 		position: latlng,
							// 		map: map,
							// 		icon: icn,
							// 		title: title
							// 	});
							// }

								// service = new google.maps.places.PlacesService(map);
								// service.nearbySearch(request, callback);

								// function callback(results, status) {
								// 	if (status === google.maps.places.PlacesServiceStatus.OK) {
								// 		for (var i = 0; i < results.length; i++) {
								// 			var place=results[i];
								// 			latlng=place.geometry.location;
								// 			icn=place.icon;
								// 			title=place.title;
								// 			createmarker(latlng,icn,title);
								// 		}
								// 	}
								// }
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