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
				<h1 class="page-title pull-left"><?php if (isset($_SESSION["firstname"])) {
        echo "<p> Welcome " . $_SESSION["firstname"];
    }  ?></h1>
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
				<!-- SIGN UP FORM -->
				<div class="well well-form-wrapper col-sm-6 ">
					<p class="lead">Add a user</p>
          <form class="form-horizontal label-left">
            <div class="form-group">
							<div class="form-group">
  							<label for="signin-username" class="col-sm-2 control-label">FirstName*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control" id="firstname"
  									name="firstname">
  							</div>
              </div>
              <div class="form-group">
  							<label for="signin-password" class="col-sm-2  control-label">LastName*</label>
  							<div class="col-sm-9">
  								<input  class="form-control" id="lastname"
  									name="lastname">
  							</div>
						  </div>
              <div class="form-group">
  							<label for="signin-username" class="col-sm-2 control-label">Username*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control" id="username"
  									name="username"><br>
                  <p id="used" class="" style="display:none;"></p>
  							</div>
              </div>
              <div class="form-group">
  							<label for="signin-password" class="col-sm-2  control-label">Password*</label>
  							<div class="col-sm-9">
  								<input type="password" class="form-control" id="password"
  									name="password">
  							</div>
						  </div>
              <div class="form-group">
  							<label for="signin-password" class="col-sm-2  control-label">Role*</label>
  							<div class="col-sm-9">
  								<input  class="form-control" id="role"
  									name="role">
  							</div>
						  </div>
              <div class="form-group">
  							<label for="signin-password" class="col-sm-2  control-label">BirthDate</label>
  							<div class="col-sm-9">
  								<input  class="form-control" id="birth_date"
  									name="birth_date">
  							</div>
			        </div>
             <button type="button" class="btn btn-primary btn-lg center-block" onclick="registerationRequest()" id="adduser"><i class="fa fa-sign-in"></i> Add</button>
             <br><p id="added" class=""></p>
           </div>
         </form>

    <!-- END SIGN IN FORM -->

    <!-- Remove FORM -->
      <div class="col-sm-6 ">
        <div class="well well-form-wrapper">
          <p class="lead">Remove a user</p>
          <form class="form-horizontal label-left">
            <div class="form-group">
              <div class="form-group">
                <label for="signin-username" class="col-sm-2 control-label">Username*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="usernameremove"
                  name="usernameremove"><br>
                  <p id="remove"></p>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary btn-lg center-block" onclick="RemoveRequest()"><i class="fa fa-sign-out"></i> Remove</button>
          </form>

      <div class="well well-form-wrapper">
        <p class="lead">Update Data</p>
        <form class="form-horizontal label-left">
        <div class="form-group">
          <div class="form-group">
            <label for="signin-username" class="col-sm-2 control-label">Username*</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="usernamedisplay"
                name="usernamedisplay">
              <button type="button" class="btn btn-primary btn-lg center-block" onclick="DisplayRequest()">Display info</button><br>
              <p id="display"></p>
            </div>
           </div>

           <form class="form-horizontal label-left" style="display:none; ">
           <div class="form-group">
             <div class="form-group">
               <label for="signin-username" class="col-sm-2 control-label">FirstName*</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" id="firstname_up"
                  name="firstname">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="signin-password" class="col-sm-2  control-label">LastName*</label>
              <div class="col-sm-9">
                <input  class="form-control" id="lastname_up"
                  name="lastname">
              </div>
            </div>

            <div class="form-group">
              <label for="signin-username" class="col-sm-2 control-label">Username*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="username_up"
                  name="username"><br>
              </div>
            </div>

            <div class="form-group" id="update_user">
              <label for="signin-password" class="col-sm-2  control-label">Password*</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="password_up"
                  name="password">
              </div>
            </div>

            <div class="form-group">
              <label for="signin-password" class="col-sm-2  control-label">Role*</label>
              <div class="col-sm-9">
                <input  class="form-control" id="role_up"
                  name="role">
              </div>
            </div>

            <div class="form-group">
              <label for="signin-password" class="col-sm-2  control-label">BirthDate</label>
              <div class="col-sm-9">
                <input  class="form-control" id="birth_date_up"
                  name="birth_date">
              </div>
            </div>

            <div class="form-group">
              <label for="signin-password" class="col-sm-2  control-label">joinDate</label>
              <div class="col-sm-9">
                <input  class="form-control" id="join_date_up"
                  name="join_date">
              </div>
            </div>
            <button type="button" class="btn btn-primary btn-lg center-block" onclick="UpdateRequest()"><i class="fa fa-recycle"></i> Update</button>
            <br><p id="updatep" class=""></p>

           </form>
          </div>
        </div>
      </div>
    </div>
      <!-- END Remove IN FORM -->
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
