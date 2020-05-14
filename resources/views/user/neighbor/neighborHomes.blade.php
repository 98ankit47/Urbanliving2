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
</style>

<br>
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
                <div class="col-md-6" style="margin-top:9px;">
                    <span>50 of 200 Homes</span>
                </div>
                <div class="col-md-3">
                    <a type="button" style="margin-top:9px;" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    &nbsp;&nbsp;&nbsp;<i class="fa fa-filter" style="color:white;"></i>
                    </a><br>
                </div>
                <div class="col-md-3" style="text-align:left;">
                    <a type="button" style="margin-top:9px;" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i></a>
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
                <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU"/>
                <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                <a href="#" type="button" class="btn summary btn-outline-dark">Summary</a>
            </div><br>
            <div id="home2" class="card homebox1" style="width: 100%; height:24rem;" >
                <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6FKg7LOZ32716WR_CzKNDh-DtZSKHNnWFwTxoxYjxms-SbBhU&usqp=CAU"/>
                <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                <a href="#" type="button" class="btn summary btn-outline-dark">Summary</a>
            </div><br>
            <div id="home3" class="card homebox1" style="width: 100%; height:24rem;" >
                <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT0SD6h1f2t6g5HreAWg9zv2FV2BIZ-i39EcmfJ9VQCKSz_YgBm&usqp=CAU"/>
                <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                <a href="#" type="button" class="btn summary btn-outline-dark">Summary</a>
            </div><br>
        </div>
    </div>
</div>
<br><br>

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

@endsection