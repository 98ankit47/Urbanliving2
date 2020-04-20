@extends('layouts.user')
    @section('content')

    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
          height: 500px;
          width:50%
        }
    
      </style>
        <div class="row">
            <div id="map" class="col-md-6">
            </div>
            </div class="col-md-6">

            </div>
        </div>
      
  
        <script>
             var map;
            function initMap() {
               // The location of Uluru
                var house = {lat: -25.344, lng: 131.036};
            // The map, centered at Uluru
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 8, center: house});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: house, map: map});
               
            }
        </script>  
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ZAdsxYc_U1xxyA3ga9gcmG260tW783I&callback=initMap"
          async defer></script>  
    @endsection