<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Responsive Image Maps jQuery Plugin</title>
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1" />
	<script src="../../js/ios-orientationchange-fix.min.js"></script>
	<style>
	body {
		font-family: Helvetica, Arial, sans-serif;
	}
	h1 {
		font-size: 20px;
	}
	div {
		width: 100%;
	}
	img[usemap] {
		border: none;
		height: auto;
		max-width: 100%;
		width: auto;
	}
	</style>
</head>
<body>
<div>
	<h1>Responsive Image Maps jQuery Plugin</h1>
	<p>Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize.</p>
	<p><a href="https://github.com/stowball/jQuery-rwdImageMaps">Download the plugin from github</a></p>
	<p>This image map was created in minutes with Adobe Fireworks.</p>
	<img src="gimages/world-map.png" width="1600" height="669" usemap="#powerpuffgirls" alt="" />
	<map name="powerpuffgirls">
		<area shape="circle" coords="1000,300,200" href="riyadh.html" alt="PSU">
	</map>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jquery.rwdImageMaps.min.js"></script>
<script>
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
	
	$('area').on('click', function() {
		alert($(this).attr('alt') + ' clicked');
	});
});
</script>
</body>
</html>
