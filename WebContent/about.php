<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - About</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<?php
include_once 'include/headers_links.php';
?>
</head>

<body onload="navigation()">
	<!-- WRAPPER -->
	<div id="wrapper">
	<?php
	include_once 'include/nav_bar.php';
	?>
		<!-- END NAVBAR -->
		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">About</h1>
				<ol class="breadcrumb link-accent">
					<li><a href="index.php">Home</a></li>

					<li class="active">Has Navigation Links</li>
				</ol>
			</div>
		</div>
		<!-- END PAGE HEADER DEFAULT -->
		<!-- PAGE CONTENT -->
		<div class="page-content no-margin-bottom">
			<div class="container">
				<a href='#'><img src="images/lab04.jpg" width="70%"
					class="image-responsive center"> </a> <br> <br> <br>
				<p class="paragraph_large"><?php $myfile = fopen("Text/inroduction.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/inroduction.txt"));?></p>

				<h2 class="section-heading">VISION</h2>
				<p class="paragraph_large"><?php $myfile = fopen("Text/VISION.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/VISION.txt"));?></p>

				<h2 class="section-heading">MISSION</h2>

				<ul class="paragraph_large">
					<li><?php $myfile = fopen("Text/MISSION1.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/MISSION1.txt"));?></li>
					<li><?php $myfile = fopen("Text/MISSION2.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/MISSION2.txt"));?></li>

				</ul>



				<h2 class="section-heading">OBJECTIVES</h2>

				<ul class="paragraph_large">
					<li><?php $myfile = fopen("Text/OBJECTIVES1.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/OBJECTIVES1.txt"));?></li>
					<li><?php $myfile = fopen("Text/OBJECTIVES2.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/OBJECTIVES2.txt"));?></li>
					<li><?php $myfile = fopen("Text/OBJECTIVES3.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/OBJECTIVES3.txt"));?></li>
					<li><?php $myfile = fopen("Text/OBJECTIVES4.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/OBJECTIVES4.txt"));?></li>
					<li><?php $myfile = fopen("Text/OBJECTIVES5.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/OBJECTIVES5.txt"));?></li>
					<li><?php $myfile = fopen("Text/OBJECTIVES6.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/OBJECTIVES6.txt"));?></li>
					<li><?php $myfile = fopen("Text/OBJECTIVES7.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/OBJECTIVES7.txt"));?></li>
					<li><?php $myfile = fopen("Text/OBJECTIVES8.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/OBJECTIVES8.txt"));?></li>

				</ul>

			</div>
			<!--
<div class="cta cta-solid-bg cta-2-columns margin-top-50">
<div class="container">
<h2 class="heading">An elegant Bootstrap theme with tons of features</h2>
<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> PURCHASE</a>
</div>
</div>
-->
		</div>
		<!-- END PAGE CONTENT -->
		<!-- FOOTER -->
		<?php
		include_once 'include/footer.php';
		?>
		<!-- END FOOTER -->
		<div class="back-to-top">
			<a href="#top"><i class="fa fa-chevron-up"></i> </a>
		</div>
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPT -->
	<script src="theme/assets/js/jquery-2.1.1.min.js"></script>
	<script src="theme/assets/js/bootstrap.min.js"></script>
	<script src="theme/assets/js/plugins/easing/jquery.easing.min.js"></script>
	<script src="theme/assets/js/bravana.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54522619-4', 'auto');
  ga('send', 'pageview');

</script>


</body>

</html>
