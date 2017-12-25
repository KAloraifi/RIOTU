<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - About</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<script src="adminDashboard.js"></script>
<?php
include_once 'include/headers_links.php';
    
?>
    
    
    
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
				<h1 class="page-title pull-left">Users Management</h1>
				<ol class="breadcrumb link-accent">
					<li><a href="index.php">Home</a></li>

					<li class="active">Has Navigation Links</li>
				</ol>
			</div>
		</div>
        
        <a href="dashboard.php"> <button type="button" style="font-size: 16px; border-radius: 12px; float: right; margin-right:50px;">Manage Users</button></a>
        
        <?php 
include_once 'include/headers_links.php';
include_once 'include/tablesLinks.php';
        
        include 'dashboard/users.php';
        
        ?>
		<!-- END PAGE HEADER DEFAULT -->
		<!-- PAGE CONTENT -->
		
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
	<!-- END WRAPPER -->
	<!-- JAVASCRIPT -->
	<script src="theme/assets/js/jquery-2.1.1.min.js"></script>
	<script src="theme/assets/js/bootstrap.min.js"></script>
	<script src="theme/assets/js/plugins/easing/jquery.easing.min.js"></script>
	<script src="theme/assets/js/bravana.js"></script>





</body>
        <script src="theme/assets/js/jsTable/jquery.min.js"></script> 
<script src="theme/assets/js/jsTable/jquery.uniform.js"></script> 
<script src="theme/assets/js/jsTable/select2.min.js"></script> 
<script src="theme/assets/js/jsTable/jquery.dataTables.min.js"></script> 
<script src="theme/assets/js/jsTable/maruti.tables.js"></script>

</html>
