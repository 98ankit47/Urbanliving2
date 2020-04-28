@extends('layouts.user')
    @section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.devnav {
    margin-left:25%;
}

.icon {
  padding: 10px;
  background: gray;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

/* SLIDER */

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: gray;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: gray;
  cursor: pointer;
}

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
<br><br>

<!--Payment Calculator-->

<div class="row">
            <div class="col-md-12">
                <div class="card" style="height:35rem; text-align:center;">
                    <div class="row inner">
                        <div class="col-md-4">      
                            <div class="card" style="height:35rem;">
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:15rem;">
                                        <div class="card-body">
                                            <span><strong>PAYMENT CALCULATOR</strong></span><br><br>
                                            <span><b>HOME PRICE</b></span><br>
                                            <span>$64667</span><br><br>
                                            <div class="container" style="text-align:left;">
                                            <label for="years"><b>LOAN TYPE:</b></label><br>
                                                <select id="years">
                                                    <option value="30 YEARS FIXED">30 YEARS FIXED</option>
                                                    <option value="15 YEARS FIXED">15 YEARS FIXED</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:16rem;">
                                        <div class="card-body" id="">
                                           <span><b>SBI LOANS</b></span> 
                                           <hr><br><br>
                                           <div class="row">
                                            <div class="col-md-6">
                                                <a type="button" style="font-family: Open Sans, sans-serif;color:white;width:120px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">APPLY NOW</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a type="button" style="font-family: Open Sans, sans-serif;color:white;width:120px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">FIND OFF.</a>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id=""> 
                        <div class="container"><br>
                            <span class="price" style="font-size:22px;">$</span>&nbsp;<input class="input1" value="" style="font-size:22px; border:none; width:15%;">&nbsp;<span style="font-size:14px;color:gray;">PER MONTH</span><br>
                            <span style="font-size:14px;color:gray;">30 YEARS FIXED</span><br><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6" style="text-align:left;">
                                        <li style="font-size:14px; color:gray;">PRINICIPAL AND INTEREST&nbsp;<span style="font-size:18px; color:black;">$</span><input class="input1" value="" style="font-size:15px; border:none; width:18%;"></li>
                                        <li style="font-size:14px; color:gray;">HOA DUES&nbsp;<span style="font-size:18px; color:black;">$</span>&nbsp;<span style="font-size:15px;">99.58</span></li><br>
                                        
                                        <label><b>HOME PRICE</b></label>
                                        <div class="input-container">
                                            <i class="fa fa-usd icon"></i>
                                            <input class="input1" value="" style="width:100%" type="text" name="price">
                                        </div>
                                        <div class="container slidrr">
                                            <input type="range" min="480000" max="580000" value="50" class="slider" id="myRange1">
                                        </div><br>
                                        
                                        <label><b>PROPERTY TAXES</b></label>
                                        <div class="input-container">
                                            <i class="fa fa-usd icon"></i>
                                            <input class="input-field" type="text" value="10,859.00" name="price"><input class="input-field" value="2%" style="width:70px;text-align:center;" type="text" name="price">
                                        </div><br>
                                        
                                        <label><b>INTEREST RATE</b></label>
                                        <div class="input-container">
                                            <input class="input-field" value="4.25%" style="width:100%" type="text" name="price">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6" style="text-align:left;">
                                        <li style="font-size:14px; color:gray;">PROPERTY TAXES&nbsp;<span style="font-size:18px; color:black;">$</span><input class="input1" value="" style="font-size:15px; border:none; width:18%;"></span></li>
                                        <li style="font-size:14px; color:gray;">HOMEOWNER'S INSURANCE&nbsp;<span style="font-size:18px; color:black;">$</span><input class="input1" value="" style="font-size:15px; border:none; width:18%;"></li><br>
                                        
                                        <label><b>DOWN PAYMENT</b></label>
                                        <div class="input-container">
                                            <i class="fa fa-usd icon"></i>
                                            <input class="input2" value="" type="text" name="price"><input class="input-field" style="width:70px;" type="text" name="price">
                                        </div>
                                        <div class="container slidrr">
                                            <input type="range" min="0" max="520000" value="50" class="slider" id="myRange2">
                                        </div><br>
                                        
                                        <label><b>HOA DUES</b></label>
                                        <div class="input-container">
                                            <i class="fa fa-usd icon"></i>
                                            <input class="input-field" value="1,195" type="text" name="price"><input class="input-field" value="ANNUALLY" style="width:70px;background-color:lightgray;font-size:12px;" type="text" name="price">
                                        </div><br>
                                        
                                        <label><b>HOMEOWNER'S INSURANCE</b></label>
                                        <div class="input-container">
                                            <i class="fa fa-usd icon"></i>
                                            <input class="input-field" value="226.25" type="text" name="price"><input class="input-field" value="0.5%" style="width:70px;background-color:lightgray;text-align:center;" type="text" name="price">
                                        </div>
                                    </div>
                                </div>
                                <a type="button" class="btn btn-secondary btn-block" style="color:white;">APPLY NOW</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

<br><br>

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

<!-- PAYMENT SLIDER SCRIPT -->

<script>

var slider = document.getElementById("myRange1");
var output = document.getElementsByClassName("input1");
output.value = slider.value;

slider.oninput = function() {
  $(".input1").val(slider.value);
}


var slider1 = document.getElementById("myRange2");
var output1 = document.getElementsByClassName("input2");
output1.value = slider1.value;

slider1.oninput = function() {
  $(".input2").val(slider1.value);
}
</script>


    @endsection