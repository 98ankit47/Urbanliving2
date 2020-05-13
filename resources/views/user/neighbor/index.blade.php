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
        top: 20%;
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

        .card .single {
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

        .card .town {
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

        .card .mid{
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        width:70%;
        color: white;
        font-size: 18px;
        padding: 8px 20px;;
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
<div class="row" style="width:1220px;">
    <div class="col-md-8" id="neighbor-map">
               
    </div>
    <div class="col-md-4 maps scrollContainer" id="container">
        <div id="neighborHome">
            <div id="" class="card homebox1" style="width: 100%; height:24rem;" >
                <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU"/>
                <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                <a href="#" type="button" class="btn single btn-outline-dark">Single Family</a>
                <a href="#" type="button" class="btn town btn-outline-dark">TownHouse/Condo</a>
                <a href="#" type="button" class="btn mid btn-outline-dark">Mid/Hi Rise Condo</a>
            </div><br>
            <div id="" class="card homebox1" style="width: 100%; height:24rem;" >
                <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6FKg7LOZ32716WR_CzKNDh-DtZSKHNnWFwTxoxYjxms-SbBhU&usqp=CAU"/>
                <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                <a href="#" type="button" class="btn single btn-outline-dark">Single Family</a>
                <a href="#" type="button" class="btn town btn-outline-dark">TownHouse/Condo</a>
                <a href="#" type="button" class="btn mid btn-outline-dark">Mid/Hi Rise Condo</a>
            </div><br>
            <div id="home3" class="card homebox1" style="width: 100%; height:24rem;" >
                <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT0SD6h1f2t6g5HreAWg9zv2FV2BIZ-i39EcmfJ9VQCKSz_YgBm&usqp=CAU"/>
                <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                <a href="#" type="button" class="btn single btn-outline-dark">Single Family</a>
                <a href="#" type="button" class="btn town btn-outline-dark">TownHouse/Condo</a>
                <a href="#" type="button" class="btn mid btn-outline-dark">Mid/Hi Rise Condo</a>
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