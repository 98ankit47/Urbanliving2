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
<div class="row">
    <div class="col-md-6">
        <div class="card" style="height:585px;">
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
                <form id="enquiry" style="font-family: Open Sans, sans-serif; text-align:left;">
                <div class="row">
                <div class="col-md-6">                
                    <div class="form-group">
                        <label for="inputTitle">Contact Name</label>
                        <input type="text" class="form-control" id="contact" placeholder="Enter Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" id="mail" required>
                    </div>
                </div>
                </div><br>
                <span style="color:darkgray"><b>PROPERTY INFORMATION</b></span><br><br>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="message" id="message" cols="41" rows="2" placeholder="Address1" class="form-control"></textarea>
                    </div>
                </div><br>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="message" id="message" cols="41" rows="2" placeholder="Address2" class="form-control"></textarea>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input name="message" id="message" cols="41" rows="2" placeholder="City" class="form-control"></input>
                    </div>
                </div><br>
                <div class="col-md-4">
                    <div class="form-group">
                        <input name="message" id="message" cols="41" rows="2" placeholder="State" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input name="message" id="message" cols="41" rows="2" placeholder="ZIP" class="form-control"></input>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <select id="country" class="form-control">
                        <option selected>Beds</option>
                        <option>Any</option>
                        <option>1+ Beds</option>
                        <option>2+ Beds</option>
                        <option>3+ Beds</option>
                        <option>4+ Beds</option>
                        <option>5+ Beds</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select id="country" class="form-control">
                        <option selected>Baths</option>
                        <option>Any</option>
                        <option>1+ Baths</option>
                        <option>2+ Baths</option>
                        <option>3+ Baths</option>
                        <option>4+ Baths</option>
                        <option>5+ Baths</option>
                    </select>
                </div>
                </div><br>
                <div class="row">
                <div class="col-md-6">
                    <select id="country" class="form-control">
                        <option selected>Square Ft.</option>
                        <option>0 - 1,000</option>
                        <option>1,000 - 2,000</option>
                        <option>2,000 - 3,000</option>
                        <option>3,000 - 4,000</option>
                        <option>4,000 - 5,000</option>
                        <option>5,000 - 6,000</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select id="country" class="form-control">
                        <option selected>Price Range</option>
                        <option>$0 - $150,000</option>
                        <option>$150,000 - $200,000</option>
                        <option>$200,000 - $250,000</option>
                        <option>$250,000 - $300,000</option>
                        <option>$300,000 - $400,000</option>
                        <option>$400,000 - $450,000</option>
                    </select>
                </div>
                </div><br>
                <div class="row">
                <div class="col-md-6">
                    <select id="country" class="form-control">
                        <option selected>Property type</option>
                        <option>Any</option>
                        <option>Single Family</option>
                        <option>TownHouse/Condo</option>
                        <option>Mid/HighRise Condo</option>
                        <option>Multi Family</option>
                        <option>Lots/Land</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select id="country" class="form-control">
                        <option selected>When do you Plan to sell ?</option>
                        <option>1 Mpnth</option>
                        <option>2 Months</option>
                        <option>3 Months</option>
                        <option>6 Months</option>
                        <option>12 Months</option>
                        <option>12+ Months</option>
                    </select>
                </div>
                </div>
                <br>
                    <button type="submit" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">Submit</button> 
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<br><br>
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