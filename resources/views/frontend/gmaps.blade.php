<head>
	<title>Multiple Google Map with custom icon</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
  	<style type="text/css">
    	#mymap {
      		border:1px solid red;
      		width: 100%;
      		height: 500px;
    	}
  	</style>
</head>
<body>
  <div id="mymap"></div>
  <div id="map"></div>
  <script type="text/javascript">
    var locations = <?php print_r(json_encode($locations)) ?>;
    var mymap = new GMaps({
        el: '#mymap',
        lat: 16.80528,
        lng: 96.15611,
        zoom:11

    });
    $.each(locations, function( index, value ){
	    mymap.addMarker({
	           lat: value.latitude,
	           lng: value.longitude,
	           title: value.name +" ,Address: " + value.address + ' , Phone: ' +value.phone,
	    });
   });
  </script>
</body>