
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HTML ImageMap resizing example</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="iFrame message passing test">
	<meta name="viewport" content="width=device-width"></head>
	<style type="text/css">
	
	.credits{
		margin: 25px auto;
		font-size: 11px;
		font-style: italic;
		text-align: center;
	}

	</style>
<body>

	<h2>Automagically resizing imageMap</h2>
	<p>Resize window and the HTML ImageMap will scale with the image.</p>

	<p>
		<img name="usaMap" src="gimages/gaitechmap.png" usemap="#m_usaMap" border="0" width="100%" max-width="720px">
	</p>

	<map name="m_usaMap">

		
		<!-- R -->
		
		<area shape="circle" coords="425,250,20" href="http://www.psu.edu.sa/" alt="PSU">
		<area shape="circle" coords="543,205,20" href="http://www.gaitech.com" alt="PSU">
		<area shape="circle" coords="526,243,20" href="http://www.gaitech.hk" alt="PSU">
		</map>

	<p class="credits">
		JavaScript &copy; David J. Bradshaw - <a href="https://github.com/davidjbradshaw/imagemap-resizer">https://github.com/davidjbradshaw/imagemap-resizer</a>.
		<br>
		HTML imageMap example from <a href="http://html.cita.illinois.edu/text/map/map-example.php">http://html.cita.illinois.edu/text/map/map-example.php</a>  (Permission requested).
	</p>
	<!--[if lte IE 8]>
		<script type="text/javascript" src="../js/ie8.polyfil.min.js"></script>
	<![endif]-->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/resize2/js/imageMapResizer.min.js"></script>
	<script type="text/javascript">

		$('map').imageMapResize();

	</script>

</body>
</html>