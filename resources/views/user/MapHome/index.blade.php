@extends('layouts.user')
    @section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
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
        </div>

        <div class="row">
            <div id="map" class="col-md-8">

            </div>
            <div class="col-md-4 maps" id="mapHome">
            </div>
        </div>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ZAdsxYc_U1xxyA3ga9gcmG260tW783I&libraries=places"
          async defer></script>  
    @endsection