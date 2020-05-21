@extends('layouts.user') 
@section('content')
<style>
.card .w3-button {
    position: absolute;
    top: 50%;
    left: 14%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    color: white;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.card .w3-button1 {
    position: absolute;
    top: 50%;
    left: 86%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    color: white;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

</style>
<div class="container">
    <div id="success"></div>
<div class="row">
    <div class="col-md-6">
        <div class="card" style="height:605px;">
            <img style="width:100%;height:100%;" class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6FKg7LOZ32716WR_CzKNDh-DtZSKHNnWFwTxoxYjxms-SbBhU&usqp=CAU"/>
            <img style="width:100%;height:100%;" class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU"/>
            <div class="w3-center">
                <div class="w3-section">
                    <a class="w3-button" style="font-size:24px;" onclick="plusDivs(-1)">❮</a>
                    <a class="w3-button1" style="font-size:24px;" onclick="plusDivs(1)">❯</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body" style="text-align:center;">
                <h4>CONTACT US</h4><br>
                <form id="selling" style="font-family: Open Sans, sans-serif; text-align:left;">
                   
                    <input type="hidden" class="form-control" id="name" value="{{Auth::user()->name}}" required>
                 
                    <input type="hidden" class="form-control" value="{{Auth::user()->email}}" required>
                     
                <span style="color:darkgray"><b>PROPERTY INFORMATION</b></span><br><br>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
 
                        <label>Address 1</label>
                        <textarea name="message" id="address" cols="41" rows="2" placeholder="Address1" class="form-control"></textarea>
                    </div>
                </div><br>
                
                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
 
                        <label>City</label>
                        <input name="message" id="city" cols="41" rows="2" placeholder="City" class="form-control"></input>
                    </div>
                </div><br>
                <div class="col-md-4">
                    <div class="form-group">
 
                        <label>State</label>
                        <input name="message" id="state" cols="41" rows="2" placeholder="State" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
 
                        <label>Zip</label>
                        <input name="message" id="zip" cols="41" rows="2" placeholder="ZIP" class="form-control"></input>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <label>Beds</label>
                    <select id="bedroom" class="form-control">
                        <option selected>Beds</option>
                        <option value="1">1 Beds</option>
                        <option value="2">2 Beds</option>
                        <option value="3">3 Beds</option>
                        <option value="4">4 Beds</option>
                        <option value="5">5 or 5+ Beds</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Baths</label>
                    <select id="bathroom" class="form-control">
                        <option selected>Baths</option>
                        <option value="1">1 Baths</option>
                        <option value="2">2 Baths</option>
                        <option value="3">3 Baths</option>
                        <option value="4">4 Baths</option>
                        <option value="5">5 or 5+ Baths</option>
                    </select>
                </div>
                </div><br>
                <div class="row">
                <div class="col-md-6">
                    <label>Square feet</label>
                    <select id="square" class="form-control">
                        <option selected>Square Ft.</option>
                        <option value="0 - 1,000">0 - 1,000</option>
                        <option value="1,000 - 2,000">1,000 - 2,000</option>
                        <option value="2,000 - 3,000">2,000 - 3,000</option>
                        <option value="3,000 - 4,000">3,000 - 4,000</option>
                        <option value="4,000 - 5,000">4,000 - 5,000</option>
                        <option value="5,000 - 6,000">5,000 - 6,000</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Price Range</label>
                    <select id="price" class="form-control">
                        <option selected>Price Range</option>
                        <option value="$100,000 - $150,000">$100,000 - $150,000</option>
                        <option value="$150,000 - $200,000">$150,000 - $200,000</option>
                        <option value="$200,000 - $250,000">$200,000 - $250,000</option>
                        <option value="$250,000 - $300,000">$250,000 - $300,000</option>
                        <option value="$300,000 - $400,000">$300,000 - $400,000</option>
                        <option value="$400,000 - $450,000">$400,000 - $450,000</option>
                    </select>
                </div>
                </div><br>
                <div class="row">
                <div class="col-md-6">
                    <label>Proprty Type</label>
                    <select id="type" class="form-control">
                        <option selected>Property type</option>
                        <option value="Single Family">Single Family</option>
                        <option value="TownHouse/Condo">TownHouse/Condo</option>
                        <option value="Mid/HighRise Condo">Mid/HighRise Condo</option>
                        <option value="Multi Family">Multi Family</option>
                        <option value="Lots/Land">Lots/Land</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Plan</label>
                    <select id="time" class="form-control">
                        <option selected>When do you Plan to sell ?</option>
                        <option value="1">1 Mpnth</option>
                        <option value="2">2 Months</option>
                        <option value="3">3 Months</option>
                        <option value="6">6 Months</option>
                        <option value="12">12 Months</option>
                        <option value="12+">12+ Months</option>
                    </select>
                </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-upload">
                        <p>Featured Image</p>
                        <p><input type="file"  name="image" id="file"  onchange="loadFile(event)"></p>
                        <p><img id="output" /></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="image-upload">
                    <p>Image Gallery</p>
                    <input type="file" id="files" name="files[]" multiple />
                    <br><br>
                    <output id="list" width="200px" height="200px"></output>
                    </div>
                    </div>
                </div>
                    <button type="submit" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">Submit</button> 
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);
 
function plusDivs(n)
 {
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
</script>
 
@endsection