@extends('layouts.user')
    @section('content')

    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
          height: 100%;
        }
    
      </style>
        <div id="map">

        </div>
      
  
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ZAdsxYc_U1xxyA3ga9gcmG260tW783I"
        async defer></script>
        <script>
            $(document).ready(function(){
                var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
                });
                alert(map);
            });
        </script>    
    @endsection