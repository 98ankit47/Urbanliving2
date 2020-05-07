@extends('layouts.user')
  @section('content')

<style>
.col-md-4 {
  padding-left:0px;
  padding-right:0px;
}

.card-body .w3-button {
    position: absolute;
    top: 50%;
    left: 14%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: lightgray;
    color: white;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.card-body .w3-button:hover {
    background-color: black;
}


.card-body .w3-button1 {
    position: absolute;
    top: 50%;
    left: 86%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: lightgray;
    color: white;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.card-body .w3-button1:hover {
    background-color: black;
}


.card-body .share {
    position: absolute;
    top: 15%;
    left: 85%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    color: white;
    font-size: 20px;
    padding: 10px 10px;
    border: none;
    cursor: pointer;
    text-align: center;
}

.card-body .share:hover {
    background-color:#DC143C;
}


.card-body .fav {
    position: absolute;
    top: 15%;
    left: 75%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    font-size: 20px;
    padding: 10px 10px;
    border: none;
    cursor: pointer;
    text-align: center;
}

.card-body .fav:hover {
    background-color:white;
}


.bottom-left {
  position: absolute;
  bottom: 25px;
  left: 30px;
}
</style>

<div class="card" style="background-color:#485563;">
  <div class="card-body"> 
    <div class="row">
      <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="card" style=" background-color:lightgray; height:350px;">
            <div class="card-body" style="text-align:center;"><br><br><br>
              <h3 style="color:black;">Seach Development</h3><br>
              <div class="container" style="text-align:center; padding-left:22%;">
              <form action="/search" class="form-inline my-2" method="get">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button style="background-color:#33CABB; color:#DC143C;" class="btn" type="submit"><i class="fa fa-search"> </i></button>
              </form>
              </div>
            </div> 
            <a href="/all-development" class="btn btn-outline-info" style="color:black;">VIEW ALL DEVELOPMENTS</a>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="card" style=" background-color:lightgray;height:350px;">
            <div class="card-body" style="text-align:center;"><br><br><br>
              <h3 style="color:black;">Seach Map List</h3><br>
              <div class="container" style="text-align:center; padding-left:22%;">
              <form action="/search" class="form-inline my-2" method="get">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button style="background-color:#33CABB; color:#DC143C;" class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search"> </i></button>
              </form>
             </div> 
            </div> 
            <a href="/home-map" class="btn btn-outline-info" style="color:black;">VIEW MAP LIST</a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<br><br><br>

<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <div class="card">
          <div class="card-body" style="height:258px;"><br>
            <a type="button" href="/all-development" style="color:black;" class="btn btn-outline-primary w-100"><b>VIEW ALL DEVELOPMENTS</b></a><br><br>
            <a type="button" href="/home-map" style="color:black;" class="btn btn-outline-primary w-100"><b>VIEW MAP LIST</b></a><br><br>
            <a type="button" class="btn btn-outline-primary w-100"><b>VIEW ALL</b></a><br>
          </div>
        </div>  
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body" style="height:300px;">
        <img style="width:100%;height:100%;" class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU"/>
        <img style="width:100%;height:100%;" class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6FKg7LOZ32716WR_CzKNDh-DtZSKHNnWFwTxoxYjxms-SbBhU&usqp=CAU"/>
        <div class="w3-center">
          <div class="w3-section">
            <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮</button>
            <button class="w3-button1 w3-light-grey" onclick="plusDivs(1)">❯</button>
            <a class="fav"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
            <a class="share"><i style="color:white;" class="fa fa-share-alt" aria-hidden="true"></i></a>
            <div class="bottom-left" style="color:white;"><b>COTTAGE GROVE</b></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body" style="height:300px;">
        <img style="width:100%;height:100%;" class="mySlides1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6FKg7LOZ32716WR_CzKNDh-DtZSKHNnWFwTxoxYjxms-SbBhU&usqp=CAU"/>
        <img style="width:100%;height:100%;" class="mySlides1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTGPbk3me6blsPigoAHLumD5sfYty3qelUQI9c8-RRPcOYqr8CG&usqp=CAU"/>
        <div class="w3-center">
          <div class="w3-section">
            <button class="w3-button w3-light-grey" onclick="plusDivs1(-1)">❮</button>
            <button class="w3-button1 w3-light-grey" onclick="plusDivs1(1)">❯</button>
            <a class="fav"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
            <a class="share"><i style="color:white;" class="fa fa-share-alt"></i></a>
            <div class="bottom-left" style="color:white;"><b>MEDICAL CENTRE</b></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-4">
    <div class="card">
      <div class="card-body" style="height:300px;">
        <img style="width:100%;height:100%;" class="mySlides2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTCr3yDTUXyWxWRZBXCcflu6quE2cloqspbc1ZcR-JNRouwjvfs&usqp=CAU"/>
        <img style="width:100%;height:100%;" class="mySlides2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTGPbk3me6blsPigoAHLumD5sfYty3qelUQI9c8-RRPcOYqr8CG&usqp=CAU"/>
        <div class="w3-center">
          <div class="w3-section">
            <button class="w3-button w3-light-grey" onclick="plusDivs2(-1)">❮</button>
            <button class="w3-button1 w3-light-grey" onclick="plusDivs2(1)">❯</button>
            <a class="fav"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
            <a class="share"><i style="color:white;" class="fa fa-share-alt"></i></a>
            <div class="bottom-left" style="color:white;"><b>EODA</b></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body" style="height:300px;">
        <img style="width:100%;height:100%;" class="mySlides3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT-iqYSYXOuWn7BsUNu7hLcwIH70TCF22AwhoCTPeCnpIjq_7i-&usqp=CAU"/>
        <img style="width:100%;height:100%;" class="mySlides3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTCr3yDTUXyWxWRZBXCcflu6quE2cloqspbc1ZcR-JNRouwjvfs&usqp=CAU"/>
        <div class="w3-center">
          <div class="w3-section">
            <button class="w3-button w3-light-grey" onclick="plusDivs3(-1)">❮</button>
            <button class="w3-button1 w3-light-grey" onclick="plusDivs3(1)">❯</button>
            <a class="fav"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
            <a class="share"><i style="color:white;" class="fa fa-share-alt"></i></a>
            <div class="bottom-left" style="color:white;"><b>RIVER OAKS</b></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body" style="height:300px;">
        <img style="width:100%;height:100%;" class="mySlides4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTGPbk3me6blsPigoAHLumD5sfYty3qelUQI9c8-RRPcOYqr8CG&usqp=CAU"/>
        <img style="width:100%;height:100%;" class="mySlides4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU"/>
        <div class="w3-center">
          <div class="w3-section">
            <button class="w3-button w3-light-grey" onclick="plusDivs4(-1)">❮</button>
            <button class="w3-button1 w3-light-grey" onclick="plusDivs4(1)">❯</button>
            <a class="fav"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
            <a class="share"><i style="color:white;" class="fa fa-share-alt"></i></a>
            <div class="bottom-left" style="color:white;"><b>UNIVERSITY AREA</b></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

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


<script>
var slideIndex1 = 1;
showDivs1(slideIndex1);
 
function plusDivs1(n)
 {
  showDivs1(slideIndex1 += n);
}
 
function currentDiv1(n)
 {
  showDivs1(slideIndex1 = n);
}
 
function showDivs1(n)
 {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("demo1");
  if (n > x.length) {slideIndex1 = 1}    
  if (n < 1) {slideIndex1 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex1-1].style.display = "block";  
  dots[slideIndex1-1].className += " w3-red";
}
</script>


<script>
var slideIndex2 = 1;
showDivs2(slideIndex2);
 
function plusDivs2(n)
 {
  showDivs2(slideIndex2 += n);
}
 
function currentDiv2(n)
 {
  showDivs2(slideIndex2 = n);
}
 
function showDivs2(n)
 {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("demo2");
  if (n > x.length) {slideIndex2 = 1}    
  if (n < 1) {slideIndex2 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex2-1].style.display = "block";  
  dots[slideIndex2-1].className += " w3-red";
}
</script>


<script>
var slideIndex3 = 1;
showDivs3(slideIndex3);
 
function plusDivs3(n)
 {
  showDivs3(slideIndex3 += n);
}
 
function currentDiv3(n)
 {
  showDivs3(slideIndex3 = n);
}
 
function showDivs3(n)
 {
  var i;
  var x = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("demo3");
  if (n > x.length) {slideIndex3 = 1}    
  if (n < 1) {slideIndex3 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex3-1].style.display = "block";  
  dots[slideIndex3-1].className += " w3-red";
}
</script>


<script>
var slideIndex4 = 1;
showDivs4(slideIndex4);
 
function plusDivs4(n)
 {
  showDivs4(slideIndex4 += n);
}
 
function currentDiv4(n)
 {
  showDivs4(slideIndex4 = n);
}
 
function showDivs4(n)
 {
  var i;
  var x = document.getElementsByClassName("mySlides4");
  var dots = document.getElementsByClassName("demo4");
  if (n > x.length) {slideIndex4 = 1}    
  if (n < 1) {slideIndex4 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex4-1].style.display = "block";  
  dots[slideIndex4-1].className += " w3-red";
}
</script>

  @endsection
 

