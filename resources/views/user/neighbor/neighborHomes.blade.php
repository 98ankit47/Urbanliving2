@extends('layouts.user') 
@section('content')

<style>
#map {
          height: 500px;
          width:50%
        }

    div.maps {
        width: 110px;
        height: 520px;
        overflow: auto;
        }
    
        .card .detail {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        width:70%;
        color: white;
        font-size: 18px;
        padding: 8px 20px;
        border-color: white;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        }

        .card .summary {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        width:70%;
        color: white;
        font-size: 18px;
        padding: 8px 20px;
        border-color: white;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        }

        .scrollContainer {
        overflow-y: auto;
        position: relative;
        width: 110px;
        height: 520px;
        }

        .card .w3-button0 {
    position: absolute;
    top: 50%;
    left: 91%;
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

.card .w3-button9 {
    position: absolute;
    top: 50%;
    left: 9%;
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

.card .share {
    position: absolute;
    top: 10%;
    left: 92%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    color: white;
    font-size: 20px;
    padding: 10px 10px;
    border: none;
    cursor: pointer;
    text-align: center;
}

.card .share:hover {
    background-color:#DC143C;
}


.card .fav {
    position: absolute;
    top: 10%;
    left: 82%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    font-size: 20px;
    padding: 10px 10px;
    border: none;
    cursor: pointer;
    text-align: center;
}

.card .fav:hover {
    background-color:white;
}

.bottom-left {
  position: absolute;
  bottom: 25px;
  left: 30px;
}
</style>


<button id="btn">scroll to home 3</button>
<div class="wrapper" style="background-color:#557A95; height:45px; width:105.5%;text-align:left;">
    <div class="row">
        <div class="col-md-3">
            <form class="navbar-form form-inline">
                <div class="input-group search-box" style="margin-top:4px;">								
                    <input type="text" id="search" class="form-control" placeholder="Address, Zip, Neighborhood">
                    <a type="button"><span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span></a>
                </div>
            </form>
        </div>
        <div class="col-md-2">
            <select class="form-control" style="margin-top:4px;text-align:left;width:170px;">
                <option>Single Family</option>
                <option>TownHouse/Condo</option>
                <option>Mid/HiRise Condo</option>
                <option>Lot/Land</option>
                <option>Multi Family</option>
                <option>Country Homes/Acreage</option>
            </select>
        </div>
        <div class="col-md-2">
            <select class="form-control" style="margin-top:4px;text-align:left;width:170px;">
                <option>Any Price</option>
                <option>$0 - $50,000</option>
                <option>$50,000 - $55,000</option>
                <option>$55,000 - $60,000</option>
                <option>$60,000 - $65,000</option>
                <option>$65,000 - $70,000</option>
            </select>
        </div>
        <div class="col-md-5" style="text-align:right;color:white;">
            <div class="row">
                <div class="col-md-5" style="margin-top:9px;">
                    <span>50 of 200 Homes</span>
                </div>
                <div class="col-md-3">
                    <a type="button" style="margin-top:9px;" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    &nbsp;&nbsp;&nbsp;<i class="fa fa-filter" style="color:white;"></i>
                    <div class="dropdown-menu" style="width:300px;" aria-labelledby="navbarDropdown">
                        <form class="details-containerr" style="font-family: Open Sans, sans-serif; margin-left: 5px; margin-right: 5px;">
                            <div class="form-row "> 
                                <div class="form-group col-md-6">
                                    <label for="neighbor">NEIGHBORHOOD</label>
                                        <select id="neighbor" class="form-control">
                                            <option value="">Any Neighborhood</option>
                                            <option value="">Balleir</option>
                                            <option value="">Camp Logan</option>
                                            <option value="">Cottage Grove</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="beds">BEDS</label>
                                        <select id="beds" class="form-control">
                                            <option value="">Any Beds</option>
                                            <option value="">1+ Bed</option>
                                            <option value="">2+ Bed</option>
                                            <option value="">3+ Bed</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-row "> 
                                <div class="form-group col-md-6">
                                    <label for="stories">STORIES</label>
                                        <select id="stories" class="form-control">
                                            <option value="">1 Stories</option>
                                            <option value="">2 Stories</option>
                                            <option value="">3 Stories</option>
                                            <option value="">4 Stories</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Garage">GARAGES</label>
                                        <select id="Garage" class="form-control">
                                            <option value="">1+</option>
                                            <option value="">2+</option>
                                            <option value="">3+</option>
                                            <option value="">4+</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-row "> 
                                <div class="form-group col-md-6">
                                    <label for="ul">TIME ON UL</label>
                                        <select id="ul" class="form-control">
                                            <option value="">7 Days</option>
                                            <option value="">14 Days</option>
                                            <option value="">21 Days</option>
                                            <option value="">28 Days</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="built">YEAR BUILT</label>
                                        <select id="built" class="form-control">
                                            <option value="">Any</option>
                                            <option value="">New Constructed</option>
                                            <option value="">Upto 2020</option>
                                            <option value="">Upto 2019</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-row "> 
                                <div class="form-group col-md-6">
                                    <label for="bath">Bath</label>
                                        <select id="bath" class="form-control">
                                            <option value="">Any Bath</option>
                                            <option value="">1 Bath</option>
                                            <option value="">2 Bath</option>
                                            <option value="">3 Bath</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sq">SQUARE FEET</label>
                                        <select id="sq" class="form-control">
                                            <option value="">1000</option>
                                            <option value="">2000</option>
                                            <option value="">3000</option>
                                            <option value="">4000</option>
                                        </select>
                                </div>
                            </div>
                            <button class="btn btn-outline-success my-2 my-sm-0" style="margin-left:130px;" type="submit">Apply</button>
                        </form>
                    </div>
                    </a><br>
                </div>
                <div class="col-md-4" style="text-align:left;">
                    <a type="button" style="margin-top:9px;" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i></a>
                    <div class="dropdown-menu" style="width:200px;" aria-labelledby="navbarDropdown">
                        <form class="details-containerr" style="font-family: Open Sans, sans-serif; margin-left: 5px; margin-right: 5px;">
                            <div class="form-row "> 
                                <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            AscendingPrice
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            DescendingPrice
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios5" value="option5">
                                        <label class="form-check-label" for="exampleRadios5">
                                            NewestBuilt
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">
                                            OldestBuilt
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">
                                            DaysOnMarket
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="width:1220px;">
    <div class="col-md-8" id="neighbor-map">
               
    </div>
    <div class="col-md-4 maps scrollContainer" id="container">
        <div id="neighborHome">
            <div id="home1" class="card homebox1" style="width: 100%; height:24rem;" >
                <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSdEE9j-X_C7ialRemOei-CbyvE1CU0p3qqxwflSJIYDgU0q8pc&usqp=CAU"/>
                <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                <a href="#" type="button" class="btn summary btn-outline-dark">Summary</a>
                <div class="w3-center">
                    <div class="w3-section">
                        <a class="fav"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
                        <a class="share"><i style="color:white;" class="fa fa-share-alt" aria-hidden="true"></i></a>
                        <div class="bottom-left" style="color:white;font-size:16px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <span><b>$470,000</b></span><br>
                                    <span><b>Community DR,</b></span><br>
                                    <span><b>Houstan,TX,123</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div id="home2" class="card homebox1" style="width: 100%; height:24rem;" >
                <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6FKg7LOZ32716WR_CzKNDh-DtZSKHNnWFwTxoxYjxms-SbBhU&usqp=CAU"/>
                <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                <a href="#" type="button" class="btn summary btn-outline-dark">Summary</a>
                <div class="w3-center">
                    <div class="w3-section">
                        <a class="fav"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
                        <a class="share"><i style="color:white;" class="fa fa-share-alt" aria-hidden="true"></i></a>
                        <div class="bottom-left" style="color:white;font-size:16px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <span><b>$475,000</b></span><br>
                                    <span><b>Community DR,</b></span><br>
                                    <span><b>Houstan,TX,123</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div id="home3" class="card homebox1" style="width: 100%; height:24rem;" >
                <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT0SD6h1f2t6g5HreAWg9zv2FV2BIZ-i39EcmfJ9VQCKSz_YgBm&usqp=CAU"/>
                <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                <a href="#" type="button" class="btn summary btn-outline-dark">Summary</a>
                <div class="w3-center">
                    <div class="w3-section">
                        <a class="fav"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
                        <a class="share"><i style="color:white;" class="fa fa-share-alt" aria-hidden="true"></i></a>
                        <div class="bottom-left" style="color:white;font-size:16px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <span><b>$450,000</b></span><br>
                                    <span><b>Community DR,</b></span><br>
                                    <span><b>Sidney,AUS,123</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>
    </div>
</div>
<br><br>

<!-- SUMMARY SECTION-->

<div class="row" id="overview" style="font-family: Open Sans, sans-serif;">
    <div class="card" style="height:34.6rem; text-align:center;display:none;">
        <div class="row inner">
            <div class="col-md-8">      
                <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU" style="height:553px; width:100%;">
                <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6FKg7LOZ32716WR_CzKNDh-DtZSKHNnWFwTxoxYjxms-SbBhU&usqp=CAU" style="height:553px; width:100%;">
                <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT0SD6h1f2t6g5HreAWg9zv2FV2BIZ-i39EcmfJ9VQCKSz_YgBm&usqp=CAU" style="height:553px; width:100%;">
                    <div class="w3-section">
                        <a class="w3-button9" style="font-size:24px; color:white;" onclick="plusDivs(-1)">❮ </a>
                        <a class="w3-button0" style="font-size:24px; color:white;" onclick="plusDivs(1)"> ❯</a>
                    </div>
            </div>
            <div class="col-md-4" style="text-align:left;"><br><br>
                <h4>BALLAIRE</h4><br>
                <span style="font-size:15px;color:gray;">BELLAIRE IS A SUBURB OF HOUSTON WITH A POPULATION OF 18,479. BELLAIRE IS 
                    IN HARRIS COUNTY AND IS ONE OF THE BEST PLACES TO LIVE IN TEXAS. LIVING IN BELLAIRE OFFERS RESIDENTS 
                    A SUBURBAN FEEL AND MOST RESIDENTS OWN THEIR HOMES. IN BELLAIRE THERE ARE A LOT OF RESTAURANTS, 
                    COFFEE SHOPS, AND PARKS.
                </span><br><br><br>
            </div>
        </div>
    </div>
</div>

<script>
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

document.getElementById('btn').addEventListener('click', ev => {
  ev.preventDefault();
  scrollIfNeeded(document.getElementById('home3'), document.getElementById('container'));
});  
</script>

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

<script>
    $('.dropdown-menu').click(function(e) {
    e.stopPropagation();
});
</script>

@endsection