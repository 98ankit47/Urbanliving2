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
                        $gallery=[];
                        foreach($homes as $home)
                        {
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
                                @foreach($gallery as $key =>$gal)
                                    <button class="w3-button demo" onclick="currentDiv({{$key+1}})">{{$key+1}}</button> 
                                @endforeach 
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
        </div> <br><br><br>
        <div id="success" style="text-align: center;"></div>
        <!--FLOOR PLAN-->
 
        <!--FLOOR PLAN-->
 
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="height:45rem; text-align:center;">
                    <div class="row inner">
                        <div class="col-md-4">      
                            <div class="card" style="height:45rem;">
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:25rem;">
                                        <div class="card-body">
                                            <div id="floorDetail" class="container" style="text-align: left;">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:17rem;">
                                        <div class="card-body" id="componentImage">
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
                                        <a type="button" onclick="floorDetail({{$floor->id}})"><img class="demo w3-opacity w3-hover-opacity-off" id="floor{{$floor->id}}" src="/uploads/floor/{{$floor->image}}" style="width:100%; height: 32.5rem;cursor:pointer" onclick="currentDiv(1)"></a>
                                    <h5 class="text-align:center">Floor No {{$floor->floor_no}}</h5>
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
        </div>
 
        <br><br>
        
        <div class="row">
        <div class="col-md-4">
            <div class="card" style="height:30rem; width:25rem; text-align:center;">
                <div class="card-body">
                    <h4>AVAILABILITY</h4><br>
                        <div class="card" style="height:22rem;">
                            <div class="card-body">
                                <img style="width:100%;height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRZaJIjBNF3kO4CIoQjqq8byvddTYNrxoaaoLQyRDXSrzmkOfdB&usqp=CAU"/>
                            </div>
                        </div>
                </div>
            </div>
            </div>
            <div class="col-md-8" id="MapAvailabe">
            <div class="card" style="height:30rem; width:25rem;">
                        <div class="card-body">
                        <img class="img-feature" style="height:27rem; width:22.5rem;" src="/uploads/homeFeature/{{$feature->image}}"/>
                            <div class="bottom-right">{{$feature->title}}</div>
                        </div>
                    </div>
            </div>
        </div>
        <br><br><br>
 <!-- LOOK BOOK -->
 
 <div class="row">
            <div class="col-md-12">
                <div class="card" style="height:45rem; text-align:center;">
                    <div class="row inner">
                        <div class="col-md-4">      
                            <div class="card" style="height:45rem;">
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:25rem;">
                                        <div class="card-body">
                                        <span style="font-size:18px;"><b>LOOK BOOK</b></span><br><br><br>
                                            <div class="container" style="text-align: left;">
                                                <a type="button" onclick="PrintDiv();" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">PRINT</a><br><br><br>
                                                <a type="button" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100 download">DOWNLOAD</a><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" style="text-align:center;">
                                    <div class="card" style="height:17rem;">
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-8"><br>
                            <div class="card" style="width:700px;height:630px;">
                                <div class="card-body">
                                    <div class="mySlides1 container">
                                        @foreach($homes as $home)
                                            <img src="/uploads/homes/{{$home->featured_image}}" style="height:320px; width:100%;">
                                        @endforeach
                                        <br>
                                        <div class="row">
                                            @foreach($gallery as  $key=>$gal)
                                                @if($key<3)
                                                    <div class="col-md-4" style="height:250px;"><br>
                                                        <img src="/uploads/gallery/{{$gal}}" style="height:100%; width:100%;">
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mySlides1 container">
                                        <div class="row">
                                            @foreach($homes as $home)
                                                @foreach($home->feature as $key=> $features)
                                                    @if($key<3)
                                                        @if($key==0)
                                                            <img src="/uploads/homeFeature/{{$features->image}}" style="height:300px; width:100%;">
                                                        @endif
                                                        @if($key%3!=0 && $key!=0)     
                                                            <div class="col-md-6" style="height:250px;"><br>
                                                                <img src="/uploads/homeFeature/{{$features->image}}" style="height:100%; width:100%;">
                                                            </div> 
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                    <div class="mySlides1 container">
                                        <div class="row">
                                            @foreach($homes as $home)
                                                @foreach($home->floor as $key=> $floor)
                                                    @if($key<2)
                                                    <div class="col-md-6" style="height:522px;"><br>
                                                       <img src="/uploads/floor/{{$floor->image}}" style="height:100%; width:100%;">
                                                    </div> 
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mySlides1 container">
                                        <div class="row">
                                            @foreach($floorcomponents as $key=>$floorcomponent)
                                                @if($key<3)
                                                    @if($key==0)
                                                        <img src="/uploads/floorcomponent/{{$floorcomponent->image}}" style="height:300px; width:100%;">
                                                    @endif
                                                    @if($key%3!=0 && $key!=0)     
                                                        <div class="col-md-6" style="height:250px;"><br>
                                                            <img src="/uploads/floorcomponent/{{$floorcomponent->image}}" style="height:100%; width:100%;">
                                                        </div> 
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <br>
 
                                    <div class="w3-center">
                                        <div class="w3-section">
                                            <button class="w3-button w3-light-grey" onclick="plusDivss(-1)">❮ Prev</button>
                                            <button class="w3-button w3-light-grey" onclick="plusDivss(1)">Next ❯</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>           
 
<br><br><br>
 
 
<!-- CONTNET SHOWED ON CLICK OF PRINT BUTTON -->
 
 
<div id="dvContents" class="container" style="display:none;">
    <div class="card" style="height: 770px;">
        <div class="card-body">
            @foreach($homes as $home)
                <img src="/uploads/homes/{{$home->featured_image}}" style="height:400px; width:100%;">
            @endforeach
            <br>
            <div class="row">
                @foreach($gallery as  $key=>$gal)
                    @if($key<3)
                        <div class="col-md-4" style="height:250px;"><br>
                            <img src="/uploads/gallery/{{$gal}}" style="height:100%; width:100%;">
                        </div>
                    @endif
                @endforeach
            </div>
    </div>
</div>
        <br>
<div class="card" style="height: 770px;">
<div class="card-body">
    <div class="row">
        @foreach($homes as $home)
            @foreach($home->floor as $key=> $floor)
                @if($key<2)
                <div class="col-md-6" style="height:522px;"><br>
                   <img src="/uploads/floor/{{$floor->image}}" style="height:100%; width:100%;">
                </div> 
                @endif
            @endforeach
        @endforeach
        
    </div>
</div>
</div>
<br>
<div class="card" style="height: 770px;">
<div class="card-body">
    <div class="row">
        @foreach($homes as $home)
            @foreach($home->floor as $key=> $floor)
                @if($key<2)
                <div class="col-md-6" style="height:522px;"><br>
                   <img src="/uploads/floor/{{$floor->image}}" style="height:100%; width:100%;">
                </div> 
                @endif
            @endforeach
        @endforeach
    </div>
</div>
</div>
<br>
<div class="card" style="height: 770px;">
<div class="card-body">
    <div class="row">
        @foreach($floorcomponents as $key=>$floorcomponent)
            @if($key<3)
                @if($key==0)
                    <img src="/uploads/floorcomponent/{{$floorcomponent->image}}" style="height:300px; width:100%;">
                @endif
                @if($key%3!=0 && $key!=0)     
                    <div class="col-md-6" style="height:250px;"><br>
                        <img src="/uploads/floorcomponent/{{$floorcomponent->image}}" style="height:100%; width:100%;">
                    </div> 
                @endif
            @endif
        @endforeach
    </div>
</div>
</div>
</div>
 
@if(Route::currentRouteName() == 'developmentDetail')
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
 
 
 
var slideIndex1 = 1;
showDivss(slideIndex1);
 
function plusDivss(n)
 {
  showDivss(slideIndex1 += n);
}
 
function currentDivs(n)
 {
  showDivss(slideIndex1 = n);
}
 
function showDivss(n)
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
}
</script>
 
<script> 
       
        function show(divId) { 
            $("#" + divId).show(); 
        } 
  
        
        function userFloorComponent(type,floor_id,component_no) { 
            var APP_URL = "{{ url('/') }}";
            loadFloorComponent();
            function loadFloorComponent(){
                $.ajax({
                type: 'GET',
                url: APP_URL+'/api/floorComponent/'+type+'/'+floor_id+'/'+component_no,
                  success: function(result){
                    $('#componentImage').html(result);
                  }   
               });
              } 
       } 
    </script> 
 
 
<script type="text/javascript">
        function PrintDiv() {
            var contents = document.getElementById("dvContents").innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title></title>');
            frameDoc.document.write('</head><body>');
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                document.body.removeChild(frame1);
            }, 500);
            return false;
        }
    </script>

<script>
    $('.download').on('click', function(){
       $('<a />').attr({
              download: 'export.html', 
              href: "data:text/html," + $('#dvContents').html() 
       })[0].click()
    });
</script>
@endif
@endsection