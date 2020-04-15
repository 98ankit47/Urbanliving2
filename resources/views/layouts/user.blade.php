<!DOCTYPE html>
<head>
  <title>Urban Living</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</head>

<style>

.nav-item {
    padding-left:10px;
}

</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img style="height:60px;" src="https://urbanliving.com/imgs/82"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Development<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Map Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sell Your Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<br><br>
<div class="container">
  @yield('content')
</div>
@if(Route::currentRouteName() == 'developmentDetail')
  <script>   
        var APP_URL = "{{ url('/') }}";
         $('#enquiry').on('submit', function (e) {
           var email,name,time,date,message,phone;
           e.preventDefault();
               email            =  document.getElementById("email").value;         
               name      =  document.getElementById("name").value;         
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
                 },
                 success: function ( ) {
                   $('#success').html('Urban Living receive your Message they will respond you earlier').addClass('alert').addClass('alert-success').delay(4000).fadeOut();
                 }
               });

         });
         function floorDetail(id)
         {
           alert();
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
</body>

</html>