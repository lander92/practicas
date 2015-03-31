<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        width: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
        <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCKCfIwvBuXvsA2HdVQTb1Ny-zLQ1jjXjw
&sensor=false">
</script>
    <script>
var map;
var zubiriPos;
function initialize() {
  zubiriPos=new google.maps.LatLng(-34.397, 150.644);
  var mapOptions = {
    zoom: 13,
    center: zubiriPos,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
  //crear un marcador en el mapa en zubiri
  var marker = new google.maps.Marker({
     position: zubiriPos,
      map: map,
      title: 'Intza hemen dago!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>