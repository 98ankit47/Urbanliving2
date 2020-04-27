@extends('layouts.user')
    @section('content')
<style>
.devnav {
    margin-left:25%;
}

/* .propDetails {
    display: none;
} */
</style>

<br><br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar-nav devnav" style="text-align:center;">
      <a class="nav-item nav-link active devitem" type="button" id='overClick' href="#overview">Overview<span class="sr-only">(current)</span></a>&nbsp;&nbsp;&nbsp;
      <a class="nav-item nav-link devitem" type="button" id='detailClick' href="#floor-plan">Property Details</a>&nbsp;&nbsp;&nbsp;
      <a class="nav-item nav-link devitem" type="button" id='neighborClick' href="#site-plan">Neighborhood</a>&nbsp;&nbsp;&nbsp;
      <a class="nav-item nav-link devitem" type="button" id='paymentClick' href="#feature">Payment Calculator</a>&nbsp;&nbsp;&nbsp;
    </div>
</nav><br>

<div class="row" id="overview">
    <div class="col-md-8">
        <div class="card" style="height:40rem; text-align:center;">
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
    <div class="card" style="height:40rem;">
        <div class="card-body" style="text-align:center;">
            <h2>SCHEDULE TOUR</h2>
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
                        <input type="text" class="form-control" id="uname" required>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Email</label>
                        <input type="email" class="form-control" id="uemail" required>
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
    </div>

<br>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="height:35rem; text-align:center;">
                    <div class="row inner">
                        <div class="col-md-4">      
                            <div class="card" style="height:35rem;">
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:15rem;">
                                        <div class="card-body">
                                            <div id="floorDetail" class="container" style="text-align: center;">
                                                <span>NEIGHBORHOOD</span><br><br>
                                                @foreach($homes as $home)
                                                    <a onclick="Nearby('food',{{$home->lat}},{{$home->lng}})" type="button" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">RESTURANTS</a><br><br>
                                                    <a onclick="Nearby('health',{{$home->lat}},{{$home->lng}})" type="button" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">HEALTH</a><br><br>
                                                    <a onclick="Nearby('school',{{$home->lat}},{{$home->lng}})" type="button" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">SCHOOLS</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:16rem;">
                                        <div class="card-body" id="showNeighbor">
                                        <div class="container propDetails" style="text-align:center;">
                                                <span>PROPERTY DETAIL</span><br><br>
                                                <div class="row">
                                                  
                                                </div>
                                            </div>
                                        </div>
<!-- 
                                        <div class="card-body" id="showAmenities">
                                        <div class="container propDetails" style="text-align:center;">
                                                <span>PROPERTY DETAIL</span><br><br>
                                                <div class="row">
                                                    <div class="col-md-6" style="text-align:right;">
                                                        <span>Address</span><br>
                                                        <span>Unit</span><br>
                                                        <span>Area</span><br>                                                      
                                                    </div>
                                                    <div class="col-md-6" style="text-align:left;">
                                                        <span></span><br>
                                                        <span></span><br>
                                                        <span></span><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="map">
                         
                        </div>
                    </div>
                </div>
            </div>
            </div>
<br><br><br>


<!--PROPERTY DETAIL-->

        <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n){
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

    @endsection