@extends('layouts.user') 

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.devnav {
    margin-left:25%;
}

.first-contain {
    display: none;
}

.floor-image {
    display: none;
}
</style>
<?php
?>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar-nav devnav" style="text-align:center;">
      <a class="nav-item nav-link active devitem" type="button" id='overClick' href="#overview">Overview<span class="sr-only">(current)</span></a>&nbsp;&nbsp;&nbsp;
      <a class="nav-item nav-link devitem" type="button" id='floorClick' href="#floor-plan">Floor Plan</a>&nbsp;&nbsp;&nbsp;
      <a class="nav-item nav-link devitem" type="button" id='siteClick' href="#site-plan">Site Plan</a>&nbsp;&nbsp;&nbsp;
      <a class="nav-item nav-link devitem" type="button" id='featureClick' href="#feature">Features</a>&nbsp;&nbsp;&nbsp;
      <a class="nav-item nav-link devitem" type="button" id='availClick' href="#avaliability">Availability</a>&nbsp;&nbsp;&nbsp;
      <a class="nav-item nav-link devitem" type="button" id='mapClick' href="#map">Map</a>
    </div>
</nav><br><br>

<div class="row" id="overview">
        <div class="col-md-8">
            <div class="card" style="height:46rem; text-align:center;">
                <div class="row inner">
                    <div class="col-md-8">      
                        <?php
                        foreach($homes as $home)
                        {
                            $gallery=[];
                            $gallery = explode(',', $home->gallery);
                        }                 
                            ?>
                        @foreach($gallery as $gals)
                    <img class="mySlides" src="/uploads/gallery/{{$gals}}" style="height:560px; width:100%;">
                        @endforeach
                            <div class="w3-center">
                            <div class="w3-section">
                                <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                                <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
                            </div>
                                <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
                                <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
                                <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
                        </div>
                    </div>
                    <div class="col-md-4"><br>
                        @foreach($homes as $home)
                        <h4 style="text-align:center">{{$home->title}}</h4><br><br><br>
                        <span style="text-align:center">$229,990</span><br><br>
                        <span style="text-align:center">{{$home->communities->communities->address}},
                              {{$home->communities->communities->county}},
                              {{$home->communities->communities->state}}</span><br><br><br><br><br>
                        <div class="container" style="text-align:left;">
                        <span>First Feature</span><br>
                        <span>Second Feature</span><br>
                        <span>Third Feature</span><br>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card" style="height:46rem;">
            <div class="card-body" style="text-align:center;">
                <h2>SCHEDULE TOUR</h2><br>
                <form id="enquiry" style="font-family: Open Sans, sans-serif; text-align:left;">                
                        <div class="form-group">
                            <label for="inputTitle">Date</label>
                            <input type="date" class="form-control" id="date" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Time</label>
                            <input type="time" class="form-control" id="time" required>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Phone No.</label>
                            <input type="text" class="form-control" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Message</label><br>
                            <textarea name="message" id="message" cols="41" rows="2" class="form-control"></textarea>
                        </div><br>
                        <button type="submit" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">Schedule Tour</button> 
                </form>
            </div>
        </div>
        </div>
        </div> <br><br><br>
        <div id="success" style="text-align: center;height:150px;"></div>


        <!--FLOOR PLAN-->

        <!--FLOOR PLAN-->

        <div class="row">
            <div class="col-md-12">
                <div class="card" style="height:45rem; text-align:center;">
                    <div class="row inner">
                        <div class="col-md-4">      
                            <div class="card" style="height:45rem;">
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:19rem;">
                                        <div class="card-body">
                                            <h4>FLOOR PLANS</h4>

                                            <!--First Floor-->
                                            <div id="firstFloor" class="container first-contain" style="text-align: left;">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <span>Bedrooms</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <a type="button" onClick="firstBed_fun()" class="btn btn-primary"> 1 </a>
                                                    <a type="button" class="btn btn-primary"> 2 </a>
                                                    <a type="button" class="btn btn-primary"> 3 </a>
                                                </div>
                                            </div>  <br>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <span>Bathrooms</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <a type="button" class="btn btn-primary" href=""> 1 </a>&nbsp;
                                                    <a type="button" class="btn btn-primary" href=""> 2 </a>
                                                </div>
                                            </div>  <br>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <span>Kitchens</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <a type="button" class="btn btn-primary" href=""> 1 </a>&nbsp;
                                                </div>
                                            </div>  <br>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <span>Garage</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <a type="button" class="btn btn-primary" href=""> 1 </a>&nbsp;
                                                </div>
                                            </div>    
                                        </div>
                            <!-- First Floor Ends -->

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:23rem;">
                                        <div class="card-body floor-image" id="floor_componentImage">
                                            <img class="mySlidess" src="https://methodhomes.net/wp-content/uploads/2019/05/MartisCamp1275_Final.jpg" style="height:20.5rem; width:18rem;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8"><br><br><br><br><br>
                          <div class="row">
                            @foreach($homes as $home)
                            <?php  
                                $count=12/($home->floor->count());
                            ?>
                                @foreach($home->floor as $floor)
                          <div class="col-md-{{$count}}">
                          <a type="button" onClick="floor_fun()"><img class="demo w3-opacity w3-hover-opacity-off" id="floor{{$floor->id}}" src="/uploads/floor/{{$floor->image}}" style="width:100%; height: 32.5rem;cursor:pointer" onclick="currentDiv(1)"></a>
                                    </div>
                                @endforeach
                            @endforeach
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
<br><br><br>
        <!--FEATURES-->

        <div class="row" id="feature">
            <div class="col-md-4">
            <div class="card" style="height:30rem; width:25rem; text-align:center;">
                <div class="card-body">
                    <h4>FEATURES</h4><br><br>
                    @foreach($homes as $home)
                        @foreach($home->feature as $feature)
                            <a style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">{{$feature->title}}</a><br><br>
                        @endforeach
                    @endforeach
                </div>
            </div>
            </div>
            @foreach($homes as $home)
                @foreach($home->feature as $feature)
                    <div class="col-md-4">
                    <div class="card" style="height:30rem; width:25rem;">
                        <div class="card-body">
                        <img class="img-feature" style="height:27rem; width:22.5rem;" src="/uploads/homeFeature/{{$feature->image}}"/>
                            <div class="bottom-right">{{$feature->title}}</div>
                        </div>
                    </div>
                    </div>
                @endforeach
            @endforeach
 

            

<br><br><br>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
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

</script>

{{-- <script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlidess");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script> --}}

<!--First Floor script-->
<script> 
       
        function show(divId) { 
            $("#" + divId).show(); 
        } 
  
        function floor_fun() { 
            show('firstFloor'); 
            // $('#GFG_DOWN').text("DIV Box is visible."); 
        } 

        function firstBed_fun() { 
           show('floor_componentImage'); 
           // $('#GFG_DOWN').text("DIV Box is visible."); 
       } 
    </script> 

 

@endsection