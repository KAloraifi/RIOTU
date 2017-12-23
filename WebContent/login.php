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
include "include/dbconfig2.php";

?>
</head>

<body>
	<!-- WRAPPER -->

            
        <?php
				
	if (isset($_SESSION["username"])){
	    header('location: index.php');
	}
    
    if (! isset($_GET["username"]) || ! isset($_GET["password"])) {} else {
        
        $username = $_GET["username"];
        $password = $_GET["password"];
        
        $sql = "select * from users where username = '" . $username . "' and password = '" . $password . "'";
         //echo $sql;
        
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            
            
            $_SESSION["username"] = $username;
            $_SESSION["firstname"] = $row["firstname"];
            $_SESSION["lastname"] = $row["lastname"];
            $_SESSION["role"] = $row["role"];
            if ($row["role"]=="admin")
            header('location: AdminDashboard.php');
            else             
                header('location: dashboard.php');

        } else {
            echo "<p> Incorrect username and/or password";
        }
    }
    
    ?>    

  <div id="wrapper">
	<?php
    include_once 'include/nav_bar.php';
    ?>
		<!-- END NAVBAR -->
		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">LogIn</h1>
				<ol class="breadcrumb link-accent">
					<li><a href="index.php">Home</a></li>

					<li class="active">Has Navigation Links</li>
				</ol>
			</div>
		</div>
		<!-- END PAGE HEADER DEFAULT -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<!-- SIGN IN FORM -->
				<div class="well well-form-wrapper center-block">
					<p class="lead">Enter your username and password:</p>
					<form class="form-horizontal label-left"
					<?php echo $_SERVER["PHP_SELF"];?> method="get">
						<div class="form-group">
							<label for="signin-username" class="col-sm-3 control-label">Username*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="signin-username"
									name="username">
							</div>
						</div>
						<div class="form-group">
							<label for="signin-password" class="col-sm-3  control-label">Password*</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="signin-password"
									name="password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9 col-md-offset-3">
								<label class="fancy-checkbox">
									<input type="checkbox">
									<span>Remember me next time</span>
								</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-lg center-block"><i class="fa fa-sign-in"></i> LOG IN</button>
					</form>
				</div>
				<!-- END SIGN IN FORM -->

			</div>
		</div>
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
