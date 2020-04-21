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
             var myLatLng;
            function initMap() {
            var myLatLng=new google.maps.LatLng(31.3448372,75.555309);

            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 15, center: myLatLng});

            var request = {
                location: myLatLng,
                radius: '500',
                type: ['college'],
            };
            function createmarker(latlng,icn)
            {
                console.log(latlng);
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: icn,
                    title: 'Hello World!'
                });
            }

                service = new google.maps.places.PlacesService(map);
                service.nearbySearch(request, callback);

                function callback(results, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        for (var i = 0; i < results.length; i++) {
                            var place=results[i];
                            latlng=place.geometry.location;
                            icn=place.icon;
                            createmarker([latlng,icn]);
                        }
                    }
             }
            }
        </script>  
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ZAdsxYc_U1xxyA3ga9gcmG260tW783I&callback=initMap&libraries=places"
          async defer></script>  
    @endsection