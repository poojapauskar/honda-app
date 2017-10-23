<!DOCTYPE html>
<html>
<head>
<style type="text/css">
#map-canvas{
  height: 500px;
  width: 500px;
  border: 3px solid black;
}
</style>
<script type="text/javascript">
  // if HTML DOM Element that contains the map is found...
if (document.getElementById('map-canvas')){
 
    // Coordinates to center the map
    var myLatlng = new google.maps.LatLng(52.525595,13.393085);
 
    // Other options for the map, pretty much selfexplanatory
    var mapOptions = {
        zoom: 14,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    // Attach a map to the DOM Element, with the defined settings
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

}
</script>
</head>
<body>

<h1>My First Google Map</h1>

<div id="map-canvas"></div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>

</body>
</html>