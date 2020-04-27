@extends('layouts.user')
    @section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        Always set the map height explicitly to define the size of the div
          element that contains the map. /
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

 body {
  padding: 10px;
}

.box {
  margin: 5px;
  background-color: yellow;
  height: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
}

    </style>

 
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-filter" style="color:blue;"></i>
        </a>
        <div class="dropdown-menu" style="width:350px;" aria-labelledby="navbarDropdown">
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
                    <label for="year">YEAR BUILT</label>
                        <select id="year" class="form-control">
                            <option value="">Any</option>
                            <option value="">New Constructed</option>
                            <option value="">Upto 2020</option>
                            <option value="">Upto 2019</option>
                        </select>
                </div>
            </div>
            <div class="form-row "> 
                <div class="form-group col-md-6">
                    <label for="sq">SQUARE FEET</label>
                        <select id="sq" class="form-control">
                            <option value="">1000</option>
                            <option value="">2000</option>
                            <option value="">3000</option>
                            <option value="">4000</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="lot">LOT SQ. FOOTAGE</label>
                        <select id="lot" class="form-control">
                            <option value="">5000</option>
                            <option value="">10,000</option>
                            <option value="">15,000</option>
                            <option value="">20,000</option>
                        </select>
                </div>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" style="margin-left:130px;" type="submit">Apply</button>
        </form>
        </div><br>
        <div class="row">
        
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
                <div class="modal-body">
                  <div class="card">
                      <div class="card-body">
                          <img class="mySlides" style="width:60%; height:300px; margin-left:20%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRYk2PV9aG2lNWRynWfQJA2jfYCmLhjVaKsWz_Z5JP8hWHMrcnY&usqp=CAU"/>
                          <img class="mySlides" style="width:60%; height:300px; margin-left:20%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ30DsYM6amh92SYeBa_seFvKhfO6DX3ivP46i9280vcrU3I2gP&usqp=CAU"/>
                          <img class="mySlides" style="width:60%; height:300px; margin-left:20%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRcnRVqoK3RUHZ_pqI_Roop2dpEHVEIjMz9r080C5-VhfZOB0OG&usqp=CAU"/>
                          <br>
                          <div class="w3-center" style="text-align:center;">
                            <div class="w3-section">
                                <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                                <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
                            </div><br>
                                <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
                                <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
                                <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
                        </div>
                    </div>
            </div>
        </div><br>
        <div class="container" style= "text-align: center;">
            <span><strong>DETAILS</strong></span><br><br><hr>
            <span>1127 17TH ST, UNIT: B, HOUSTON TX 77008</span><br><br>
            <div class="row">
                <div class="col-md-3">
                    <span><b>PRICE</b></span><br><br>
                    <span>$330,990</span>
                </div>
                <div class="col-md-3">
                    <span><b>BEDS</b></span><br><br>
                    <span>2</span>
                </div>
                <div class="col-md-3">
                    <span><b>BATHS</b></span><br><br>
                    <span>2/1</span>
                </div>
                <div class="col-md-3">
                    <span><b>SQ.FT</b></span><br><br>
                    <span>1,311</span>
                </div>
            </div><br><br>
            <div class="container">
                <span>STUNNING HOME NESTLED IN A GATED COMMUNITY IN THE HIGHLY 
                      SOUGHT-AFTER SHADY ACRES COMMUNITY. WALKING DISTANCE TO LOCAL EATERIES, 
                      SHOPPING, NIGHTLIFE, WHITE OAK BAYOU TRAIL & MORE! THE OPEN CONCEPT LIVING AREA ON THE 
                      2ND FLOOR FEATURES BEAUTIFUL HARDWOOD FLOORING AND A GOURMET ISLAND KITCHEN PERFECT FOR 
                      ENTERTAINING! HIGH CEILINGS AND BEAUTIFUL FINISHES WILL MAKE THIS THE PERFECT HOME 
                </span>
                </div>
            </div>
            <br>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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

    @endsection