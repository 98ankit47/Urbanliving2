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