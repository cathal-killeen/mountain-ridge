<?php
	$pageTitle = 'Location';
	$backgroundImageSrc = 'media/airplane.jpg';
	$backgroundImageAlt = 'airplane';

	include 'head.php';
?>

<br>
<h1>Location</h1>
<p>Mountain Ridge Resort is situated just a 15 minute drive from the scenic town of Boulder, CO</p>
<br>
<br>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:900px;"><div id="gmap_canvas" style="height:500px;width:900px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wptiger.com/premium-wordpress-themes/" id="get-map-data">wordpress-specific category</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(39.9837375,-105.29555749999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(39.9837375, -105.29555749999997)});infowindow = new google.maps.InfoWindow({content:"<b>Mountain Ridge Ski Resort</b><br/>Boulder Mountain Park<br/> Boulder, CO" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

<br>
<br>
<br>	
<?php
		include 'foot.php';
?>