<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Polygon</title>
   <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <h1>Spherical Triangle</h1>
    <div id="map"></div>
    <script>

      var lat1 = <?php echo $_POST["lat1"];?>;
      var lat2 = <?php echo $_POST["lat2"];?>;
      var lat3 = <?php echo $_POST["lat3"];?>;
      var lng1 = <?php echo $_POST["lng1"];?>;
      var lng2 = <?php echo $_POST["lng2"];?>;
      var lng3 = <?php echo $_POST["lng3"];?>;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: lat1, lng: lng1},
          mapTypeId: 'terrain'
        });

        // Defining the LatLng coordinates for the polygon's path.
        var triangleCoords = [
          {lat: lat1, lng: lng1},
          {lat: lat2, lng: lng2},
          {lat: lat3, lng: lng3},
          {lat: lat1, lng: lng1}
        ];

        // Constructing polygon.
        var myTriangle = new google.maps.Polygon({
          paths: triangleCoords,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        myTriangle.setMap(map);
      }
    </script>
  <script async 
  defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_Key&callback=initMap"></script>
  </body>
</html>
