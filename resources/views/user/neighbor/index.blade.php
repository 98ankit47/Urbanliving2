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

<button id="btn">scroll to home 3</button>
<div class="row" style="width:1220px;">
    <div class="col-md-8" id="neighbor-map">
               
    </div>
    <div class="col-md-4 maps scrollContainer" id="container">
        <div id="neighborHome">
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
@endsection