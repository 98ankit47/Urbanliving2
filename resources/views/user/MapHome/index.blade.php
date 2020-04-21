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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" style="color: white;">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown" style="margin-left: 250%;">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-filter" style="color:white;"></i>
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
      </li>
    </ul>
  </div>
</nav><br>

        <div class="row">
            <div id="map" class="col-md-6">

            </div>
            <div class="col-md-6 maps">
                <div class="card" style="width: 32rem; height:20rem;">
                    <img style="height:320px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSb9CAGNFxjRjbjWHiJfj_mur9GvV0ILk-529usQRWUTkvo7Spp&usqp=CAU"/>
                    <button type="button" class="btn btnss btn-outline-dark">DETAILS</button>
                    <button type="button" class="btn btns btn-outline-dark">SUMMARY</button>
                </div><br>
                <div class="card" style="width: 32rem; height:20rem;">
                    <img style="height:320px;" src="https://www.whoa.in/20140224-Whoa/Amazing-House-in-Amazing-Place-HD-Wallpaper.jpg"/>
                    <button type="button" class="btn btnss btn-outline-dark">DETAILS</button>
                    <button type="button" class="btn btns btn-outline-dark">SUMMARY</button>
                </div><br>
                <div class="card" style="width: 32rem; height:20rem;">
                    <img style="height:320px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQT8Bk00cznT4lTPGpiefwv-ryKsLuMwc1IBNZCukJZAhPwHIS0&usqp=CAU"/>
                    <button type="button" class="btn btnss btn-outline-dark">DETAILS</button>
                    <button type="button" class="btn btns btn-outline-dark">SUMMARY</button>
                </div><br>
                <div class="card" style="width: 32rem; height:20rem;">
                    <img style="height:320px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTHClJGnfaKbFimIaiPPqhjp1C54_aVt5Dw9VG8-hKgd0FBpZ5q&usqp=CAU"/>
                    <button type="button" class="btn btnss btn-outline-dark">DETAILS</button>
                    <button type="button" class="btn btns btn-outline-dark">SUMMARY</button>
                </div>
            </div>
        </div>

        <script>
             var map;
             var myLatLng={lat: 30.6792786, lng: 76.7269971};;
            function initMap() {
               // The location of Uluru 
            // The map, centered at Uluru
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 15, center: myLatLng});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: myLatLng, map: map});

            var request = {
                location: myLatLng,
                radius: '500',
                type: ['store', 'school'],
            };

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });

                service = new google.maps.places.PlacesService(map);
                service.nearbySearch(request, callback);


                function callback(results, status) {
                    console.log(results);
                }
               
            }
        </script>  
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ZAdsxYc_U1xxyA3ga9gcmG260tW783I&callback=initMap&libraries=places"
          async defer></script>  
    @endsection