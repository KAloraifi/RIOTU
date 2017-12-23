<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<?php
include_once 'include/headers_links.php';
?>

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
		width: auto;
		max-width: 100%;
		width: auto;
	}
	</style>

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	<?php
	//include_once 'include/nav_bar_black.php';
	?>
		<!-- END NAVBAR -->
		<!-- SLIDER -->
		<section id="slider-fullscreen" class="rev_slider no-padding">
		
			<img src="gimages/world-map.png"
					 width="1600" height="669"
					 alt="Slide" usemap="#worldmap">
					


<map name="worldmap">
  <area shape="rect" coords="0,0,82,126" href="sun.htm" alt="Sun">
  <area shape="circle" coords="10,10,200" href="riyadh.html" alt="PSU">
  <area shape="circle" coords="2000,500,20" href="riyadh2.html" alt="PSU">
</map>		
					
					
		</section>

		<!-- FOOTER -->
		<?php
		include_once 'include/footer.php';
		?>
		<!-- END FOOTER -->
		<div class="back-to-top">
			<a href="#top"><i class="fa fa-chevron-up"></i> </a>
		</div>

		<!-- END WRAPPER -->
		<!-- JAVASCRIPT -->
		<script src="theme/assets/js/jquery-2.1.1.min.js"></script>
		<script src="theme/assets/js/bootstrap.min.js"></script>
		<script src="theme/assets/js/plugins/easing/jquery.easing.min.js"></script>
		<script
			src="theme/assets/js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script
			src="theme/assets/js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="theme/assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="theme/assets/js/bravana.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54522619-4', 'auto');
  ga('send', 'pageview');

</script>


<script src="js/jquery.rwdImageMaps.min.js"></script>
<script>
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
	

});
</script>
</body>

</html>
