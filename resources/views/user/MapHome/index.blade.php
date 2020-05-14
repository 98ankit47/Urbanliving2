@extends('layouts.user')
    @section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            
        .card .btnss {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        
        color: white;
        font-size: 22px;
        padding: 12px 24px;
        border-color: white;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        }

        .card .btns {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        
        color: white;
        font-size: 22px;
        padding: 12px 24px;
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

.box {
  margin: 5px;
  background-color: yellow;
  height: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
}


.modal-body .w3-button7 {
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

/* .modal-body .w3-button7:hover {
    background-color: black;
} */


.modal-body .w3-button8 {
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

/* .modal-body .w3-button8:hover {
    background-color: black;
} */

    </style>

 <div class="container" style="text-align:left;">
 <div class="wrapper" style="background-color:#557A95; height:45px; width:108.5%;text-align:left;">
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
                <div class="col-md-3" style="text-align:left;">
                    <a type="button" style="margin-top:9px;" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="row" style="width:1220px;">
        
            <div id="map" class="col-md-8">
               
            </div>

            <div class="col-md-4 maps scrollContainer" id="container">
                <div id="mapHome">
                        
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="summaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" style="margin-left:45%;">SUMMARY</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" id="summarydata">
                 
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
            function homescrollh(homeid)
            {
                scrollIfNeeded(document.getElementById(homeid), document.getElementById('container'));
            }    
        </script>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusDivs(n){
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
          $('.dropdown-menu').click(function(e) {
    e.stopPropagation();
});
            </script>

    @endsection