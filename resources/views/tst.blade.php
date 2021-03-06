<html>
<head>
   <title>Seattle Drinking Fountains</title>
   <link rel="stylesheet" href="css/app.css">
   <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
   <script src="https://unpkg.com/tangram/dist/tangram.min.js"></script>
   <script src="https://cdn.jsdelivr.net/gh/IvanSanchez/Leaflet.Polyline.SnakeAnim/L.Polyline.SnakeAnim.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
</head>

<body>
   <div id="control">
      <h3>Kazan TBOs coords</h3>
      <p>
         Starting position
      </p>
      <input type="text" value="Main street!" id="start" />
      <button id="change-start">Change</button>
      <p>
         Routing options
      </p>
      <form id="routing-mode" action="">
         <input type="radio" name="routing-mode" id="walking" value="pedestrian" checked> Walking<br>
         <input type="radio" name="routing-mode" id="driving" value="car"> Driving
      </form>
      <button id="clear">Clear polylines</button>
   </div>
   <div id="map"></div>
   <script src="js/app.js" type="text/javascript"></script>s
</body>
</html>