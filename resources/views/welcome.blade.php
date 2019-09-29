<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
  type="text/javascript" charset="utf-8"></script>
        <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
  type="text/javascript" charset="utf-8"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />

       <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div style="width: 640px; height: 480px" id="mapContainer"></div>
  <script>
    // Initialize the platform object:
    var platform = new H.service.Platform({
    'apikey': 'hcydRypsVM_4kOjabJHEUWxDcP45lfzKvkmK2CHSNoY'
    });
    var curCoord={lng: 52.5, lat: 13.4};
    var getLng = function(){
        return curCoord.lng; 
    };

    var getLat = function(){
        return curCoord.lat; 
    };

    var setLng = function(a){
        curCoord.lng = a;
        return curCoord; 
    };
    var setLat = function(a){
        curCoord.lat = a;
        return curCoord; 
    };

    var getCoord=function(){return curCoord;}

    if ("geolocation" in navigator) {
  /* geolocation is available */
    navigator.geolocation.getCurrentPosition(function(position) {
    // Obtain the default map types from the platform object
    var maptypes = platform.createDefaultLayers();
    console.log(position);
    var crd =     {
      zoom: 12,
      center: {lng: position.coords.latitude, lat: position.coords.longitude}
    };
    var map =  new H.Map(
    document.getElementById('mapContainer'),
    maptypes.vector.normal.map,
    crd,
    console.log(crd),
    );
    });
    } else {
  /* geolocation IS NOT available */
        console.log('!');
    }
    console.log('====>',curCoord);
  </script>
    </body>
</html>
