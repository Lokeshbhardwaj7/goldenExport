<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Golden Exports</title>
<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyA4AuMkW7F4HFKE1m4WxKfvh2xIJ6NWeQ8"></script>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jquery.gmap-1.1.0-min.js"></script>    
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
#map{width:100%; height:260px;}
</style>
</head>
<body>
<script type="text/javascript">
$(function() {
    $("#map").gMap({ maptype:G_HYBRID_MAP,markers: [{ 
								latitude: 23.06600,
                              longitude: 70.14430,
							  icon: { image: "img/mark.png", 
							  iconsize: [40, 48],
							  iconanchor: [12, 48],
							  infowindowanchor: [12, 0] },}],
							  zoom: 14 });
});
</script>
<div id="map">
</div>
</body>
</html>
