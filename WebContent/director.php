<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Developers">
<!-- CORE CSS -->
<?php
include_once 'include/headers_links.php';
?>
<script type="text/javascript" src="director.js"></script>
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
        <!-- ADD FORMS FOR CONFERENCE AND PROJECT -->
				<div class="well well-form-wrapper col-sm-6">
					<span class="lead">Add a </span>
          <select id="add" name="type" onchange="createAddForm()">
            <option>Choose what to add</option>
            <option value="conference">Conference</option>
            <option value="project">Project</option>
          </select>

          <!-- ADD FORM FOR CONFERENCE -->
					<form class="form-horizontal label-left" id="conferenceAddForm"
					<?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

						<div class="form-group">
							<label for="add-name" class="col-sm-3 control-label">Name*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control cinput" id="add-name"
									name="name">
                <p id="used" class="" style="display:none;"></p>
							</div>
						</div>
            <div class="form-group">
							<label for="add-location" class="col-sm-3 control-label">Location*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control cinput" id="add-location"
									name="location">
							</div>
						</div>
            <div class="form-group">
							<label for="add-start-date" class="col-sm-3 control-label">Start Date*</label>
							<div class="col-sm-9">
								<input type="date" class="form-control cinput" id="add-start-date"
									name="start-date">
							</div>
						</div>
            <div class="form-group">
							<label for="add-end-date" class="col-sm-3 control-label">End Date*</label>
							<div class="col-sm-9">
								<input type="date" class="form-control cinput" id="add-end-date"
									name="end-date">
							</div>
						</div>
            <div class="form-group">
							<label for="add-picture" class="col-sm-3 control-label">Picture Link*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control cinput" id="add-picture"
									name="picture">
							</div>
						</div>
            <div class="form-group">
							<label for="add-description" class="col-sm-3 control-label">Description*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control cinput" id="add-description"
									name="description">
							</div>
						</div>
            <div class="form-group">
							<label for="add-publisher" class="col-sm-3 control-label">Publisher*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control cinput" id="add-publisher"
									name="publisher">
							</div>
						</div>
            <div class="form-group">
							<label for="add-rank" class="col-sm-3 control-label">Rank*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control cinput" id="add-rank"
									name="rank">
							</div>
						</div>

						<button type="button" class="btn btn-primary btn-lg center-block" onclick="addCPRequest()"><i class="fa fa-plus"></i> ADD</button>
            <p id="added" class="">
					</form>

          <!-- ADD FORM FOR PROJECT -->
          <form class="form-horizontal label-left" id="projectAddForm"
					<?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

						<div class="form-group">
							<label for="add-name" class="col-sm-3 control-label">Name*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control pinput" id="add-name"
									name="name">
                <p id="used2" class="" style="display:none;"></p>
							</div>
						</div>
            <div class="form-group">
							<label for="add-funding-agency" class="col-sm-3 control-label">Funding Agency*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control pinput" id="add-funding-agency"
									name="funding-agency">
							</div>
						</div>
            <div class="form-group">
							<label for="add-start-date" class="col-sm-3 control-label">Start Date*</label>
							<div class="col-sm-9">
								<input type="date" class="form-control pinput" id="add-start-date"
									name="start-date">
							</div>
						</div>
            <div class="form-group">
							<label for="add-end-date" class="col-sm-3 control-label">End Date*</label>
							<div class="col-sm-9">
								<input type="date" class="form-control pinput" id="add-end-date"
									name="end-date">
							</div>
						</div>
            <div class="form-group">
							<label for="add-picture" class="col-sm-3 control-label">Picture Link*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control pinput" id="add-picture"
									name="picture">
							</div>
						</div>
            <div class="form-group">
							<label for="add-description" class="col-sm-3 control-label">Description*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control pinput" id="add-description"
									name="description">
							</div>
						</div>
            <div class="form-group">
							<label for="add-pi" class="col-sm-3 control-label">Principle Investigator*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control pinput" id="add-pi"
									name="pi">
							</div>
						</div>
            <div class="form-group">
							<label for="add-co-i" class="col-sm-3 control-label">Co-investigator*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control pinput" id="add-co-i"
									name="co-i">
							</div>
						</div>
            <div class="form-group">
							<label for="add-total-budget" class="col-sm-3 control-label">Total Budget*</label>
							<div class="col-sm-9">
								<input type="number" class="form-control pinput" id="add-total-budget"
									name="total-budget">
							</div>
						</div>

						<button type="button" class="btn btn-primary btn-lg center-block" onclick="addCPRequest()"><i class="fa fa-plus"></i> ADD</button>
            <p id="added2" class="">
					</form>
				</div>

        <!-- REMOVE FORMS FOR CONFERENCE AND PROJECT -->
        <div class="well well-form-wrapper col-sm-12">
					<span class="lead">Remove a </span>
          <select id="remove" name="type" onchange="createRemoveForm()">
            <option>Choose what to remove</option>
            <option value="conference">Conference</option>
            <option value="project">Project</option>
          </select>

          <!-- REMOVE FORM FOR CONFERENCE -->
					<form class="form-horizontal label-left" id="conferenceRemoveForm"
					<?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

						<div class="form-group">
							<label for="remove-name" class="col-sm-3 control-label">Name*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="cname"
									name="name">
                <p id="used3" class="" style="display:none;"></p>
							</div>
						</div>

						<button type="button" class="btn btn-primary btn-lg center-block" onclick="removeCPRequest()"><i class="fa fa-times"></i> REMOVE</button>
            <p id="removed" class="">
					</form>

          <!-- REMOVE FORM FOR PROJECT -->
          <form class="form-horizontal label-left" id="projectRemoveForm"
					<?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

						<div class="form-group">
							<label for="remove-name" class="col-sm-3 control-label">Name*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="pname"
									name="name">
                <p id="used4" class="" style="display:none;"></p>
							</div>
						</div>

						<button type="button" class="btn btn-primary btn-lg center-block" onclick="removeCPRequest()"><i class="fa fa-times"></i> REMOVE</button>
            <p id="removed2" class="">
					</form>
				</div>

        <!-- UPDATE FORMS FOR CONFERENCE AND PROJECT -->
        <div class="well well-form-wrapper col-sm-12">
          <span class="lead">Update a </span>
          <select id="update" name="type" onchange="createUpdateForm()">
            <option>Choose what to update</option>
            <option value="conference">Conference</option>
            <option value="project">Project</option>
          </select>
          <!-- ENTER TARGET CONFERENCE/PROJECT TO BE UPDATED -->
					<form class="form-horizontal label-left"
					<?php echo $_SERVER["PHP_SELF"];?> method="get">

						<div class="form-group">
							<label for="update-name" class="col-sm-3 control-label">Name*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="updatename"
									name="name">
                <p id="used5" class="" style="display:none;"></p>
							</div>
						</div>

						<button type="button" class="btn btn-primary btn-lg center-block" onclick="displayCPRequest()"><i class="fa fa-eye"></i> DISPLAY INFO</button>
            <p id="show" class="">
					</form>
          <!-- UPDATE FORM FOR CONFERENCE -->
          <form class="form-horizontal label-left" id="conferenceUpdateForm"
          <?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

            <div class="form-group">
              <label for="update-name" class="col-sm-3 control-label">Name*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatec-name"
                  name="name">
                <p id="used6" class="" style="display:none;"></p>
              </div>
            </div>
            <div class="form-group">
              <label for="update-location" class="col-sm-3 control-label">Location*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatec-location"
                  name="location">
              </div>
            </div>
            <div class="form-group">
              <label for="update-start-date" class="col-sm-3 control-label">Start Date*</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="updatec-start-date"
                  name="start-date">
              </div>
            </div>
            <div class="form-group">
              <label for="update-end-date" class="col-sm-3 control-label">End Date*</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="updatec-end-date"
                  name="end-date">
              </div>
            </div>
            <div class="form-group">
              <label for="update-picture" class="col-sm-3 control-label">Picture Link*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatec-picture"
                  name="picture">
              </div>
            </div>
            <div class="form-group">
              <label for="update-description" class="col-sm-3 control-label">Description*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatec-description"
                  name="description">
              </div>
            </div>
            <div class="form-group">
              <label for="update-publisher" class="col-sm-3 control-label">Publisher*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatec-publisher"
                  name="publisher">
              </div>
            </div>
            <div class="form-group">
              <label for="update-rank" class="col-sm-3 control-label">Rank*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatec-rank"
                  name="rank">
              </div>
            </div>

            <button type="button" class="btn btn-primary btn-lg center-block" onclick="updateCPRequest()"><i class="fa fa-sign-in"></i> UPDATE</button>
            <p id="updated" class="">
          </form>

          <!-- UPDATE FORM FOR PROJECT -->
          <form class="form-horizontal label-left" id="projectUpdateForm"
          <?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

            <div class="form-group">
              <label for="update-name" class="col-sm-3 control-label">Name*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatep-name"
                  name="name">
                <p id="used7" class="" style="display:none;"></p>
              </div>
            </div>
            <div class="form-group">
              <label for="update-funding-agency" class="col-sm-3 control-label">Funding Agency*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatep-funding-agency"
                  name="funding-agency">
              </div>
            </div>
            <div class="form-group">
              <label for="update-start-date" class="col-sm-3 control-label">Start Date*</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="updatep-start-date"
                  name="start-date">
              </div>
            </div>
            <div class="form-group">
              <label for="update-end-date" class="col-sm-3 control-label">End Date*</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="updatep-end-date"
                  name="end-date">
              </div>
            </div>
            <div class="form-group">
              <label for="update-picture" class="col-sm-3 control-label">Picture Link*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatep-picture"
                  name="picture">
              </div>
            </div>
            <div class="form-group">
              <label for="update-description" class="col-sm-3 control-label">Description*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatep-description"
                  name="description">
              </div>
            </div>
            <div class="form-group">
              <label for="update-pi" class="col-sm-3 control-label">Principle Investigator*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatep-pi"
                  name="pi">
              </div>
            </div>
            <div class="form-group">
              <label for="update-co-i" class="col-sm-3 control-label">Co-investigator*</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="updatep-co-i"
                  name="co-i">
              </div>
            </div>
            <div class="form-group">
              <label for="update-total-budget" class="col-sm-3 control-label">Total Budget*</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="updatep-total-budget"
                  name="total-budget">
              </div>
            </div>

            <button type="button" class="btn btn-primary btn-lg center-block" onclick="updateCPRequest()"><i class="fa fa-sign-in"></i> UPDATE</button>
            <p id="updated2" class="">
          </form>
        </div>

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

<script type="text/javascript" src="director.js"></script>
</body>

</html>
