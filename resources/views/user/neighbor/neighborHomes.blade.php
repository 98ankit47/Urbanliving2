@extends('layouts.user') 
@section('content')

<style>
#map {
          height: 520px;
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

.card .share1 {
    position: absolute;
    top: 7%;
    left: 90%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    color: white;
    font-size: 20px;
    padding: 10px 10px;
    border: none;
    cursor: pointer;
    text-align: center;
}

/* .card .share1:hover {
    background-color:#DC143C;
} */

.card .fav1 {
    position: absolute;
    top: 7%;
    left: 78%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    font-size: 20px;
    padding: 10px 10px;
    border: none;
    cursor: pointer;
    text-align: center;
}

/* .card .fav1:hover {
    background-color:white;
} */

.bottom-left {
  position: absolute;
  bottom: 25px;
  left: 30px;
}
</style>

<div class="row">
    <div class="col-md-8" id="map">
               
    </div>
    <div class="col-md-4 maps scrollContainer" id="container">
        <div id="neigTypeHome">
           
        </div>
    </div>
</div>

<!-- SUMMARY SECTION-->

<div class="row" id="overview" style="font-family: Open Sans, sans-serif;">
    <div class="card" style="height:34.6rem; text-align:center;display:none;">
        <div class="row inner">
            <div class="col-md-8">      
                <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU" style="height:553px; width:100%;">
                <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6FKg7LOZ32716WR_CzKNDh-DtZSKHNnWFwTxoxYjxms-SbBhU&usqp=CAU" style="height:553px; width:100%;">
                <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT0SD6h1f2t6g5HreAWg9zv2FV2BIZ-i39EcmfJ9VQCKSz_YgBm&usqp=CAU" style="height:553px; width:100%;">
                    <div class="w3-section">
                        <a class="w3-button9" style="font-size:24px; color:white;" onclick="plusDivs(-1)"> ❮ </a>
                        <a class="w3-button0" style="font-size:24px; color:white;" onclick="plusDivs(1)"> ❯ </a>
                    </div>
            </div>
            <div class="col-md-4" style="text-align:left;"><br><br>
                <h4>BALLAIRE</h4><br>
                <span style="font-size:15px;color:gray;">BELLAIRE IS A SUBURB OF HOUSTON WITH A POPULATION OF 18,479. BELLAIRE IS 
                    IN HARRIS COUNTY AND IS ONE OF THE BEST PLACES TO LIVE IN TEXAS. LIVING IN BELLAIRE OFFERS RESIDENTS 
                    A SUBURBAN FEEL AND MOST RESIDENTS OWN THEIR HOMES. IN BELLAIRE THERE ARE A LOT OF RESTAURANTS, 
                    COFFEE SHOPS, AND PARKS.
                </span><br><br><br>
                <div class="w3-center">
                    <a class="fav1"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
                    <a class="share1"><i style="color:black;" class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
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