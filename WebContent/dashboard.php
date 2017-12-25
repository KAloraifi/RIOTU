<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<?php
include_once 'include/headers_links.php';
?>

<script src="admin.js"></script>
<script src="update.js"></script>
<script src="director.js"></script>
<script src="Publication.js"></script>
<script src="news.js"></script>
<script src="PublicationUser.js"></script>
<script src="NewsUser.js"></script>
<style>
.bgColor {
    max-width: 440px;
    height: 400px;
   
    padding: 30px;
    border-radius: 4px;
	text-align: center;    
}
#targetOuter{	
	position:relative;
    text-align: center;
    background-color: #F0E8E0;
    margin: 20px auto;
    width: 200px;
    height: 200px;
	border-radius: 4px;
}
.btnSubmit {
    background-color: #565656;
    border-radius: 4px;
    padding: 10px;
    border: #333 1px solid;
    color: #FFFFFF;
    width: 200px;
	cursor:pointer;
}
.inputFile {
    padding: 5px 0px;
	margin-top:8px;	
    background-color: #FFFFFF;
    width: 48px;	
    overflow: hidden;
	opacity: 0;	
	cursor:pointer;
}
.icon-choose-image {
    position: absolute;
    opacity: 0.1;
    top: 50%;
    left: 50%;
    margin-top: -24px;
    margin-left: -24px;
    width: 48px;
    height: 48px;
}
.upload-preview {border-radius:4px;}
#body-overlay {background-color: rgba(0, 0, 0, 0.6);z-index: 999;position: absolute;left: 0;top: 0;width: 100%;height: 100%;display: none;}
#body-overlay div {position:absolute;left:50%;top:50%;margin-top:-32px;margin-left:-32px;}

</style>

</head>

<body>
	<!-- WRAPPER -->
  <div id="wrapper">
	<?php
    include_once 'include/nav_bar.php';

    ?>
		<!-- END NAVBAR -->
		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">

			<div class="container">
				<h1 class="page-title pull-left"><?php if(isset($_SESSION["firstname"]))echo "<p> Welcome " . $_SESSION["firstname"];  ?></h1>
				<ol class="breadcrumb link-accent">
					<li><a href="index.php">Home</a></li>

					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>
		<!-- END PAGE HEADER DEFAULT -->
		<!-- PAGE CONTENT -->
		<div class="page-content"> <?php if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin"){
                    include 'admin1.php';
                    include 'director.php';
                }

                    elseif(isset($_SESSION["role"])&&($_SESSION["role"] == "director" || $_SESSION["role"] == "senior member")) {
                        include 'director.php';

                    }
                    else{
                        if(isset($_SESSION["role"]) && ($_SESSION["role"] == "student" || $_SESSION["role"] == "member" || $_SESSION["role"] == "user")) 
                        include 'User.php';
                    }
                    ?>

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

  <script src="admin.js"></script>
  <script src="update.js"></script>
  <script src="director.js"></script>
  <script src="Publication.js"></script>
  <script src="news.js"></script>

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
