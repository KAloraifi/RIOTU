<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Publication input</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<?php
include_once 'include/headers_links.php';
?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	<?php
	include 'include/dbconfig.php';
	//session_start();
	?>

	<?php
	include_once 'include/nav_bar.php';
	?>
		<!-- END NAVBAR -->
		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">Publications</h1>
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
				<p></p>

				<h2 class="section-heading">Enter new publication</h2>

				<div class="col-md-8">
					<form method="post" action="publication_insert.php"
						id="add-publication-form"
						class="form-horizontal form-minimal margin-top-30" novalidate>


						<div class="form-group">
							<label for="pub-title" class="control-label sr-only">Title</label>
							<input type="text" class="form-control" id="pub-title"
								name="title" placeholder="Title*" required>
						</div>
						<div class="form-group" id="nb">
							<input type="hidden" class="form-control" id="number_of_authors"
								name="number_of_authors" placeholder="Number Of Authors"
								value="1">
						</div>


						<div class="form-group">
							<label for="pub-booktitle" class="control-label sr-only">Booktitle</label>
							<input type="text" class="form-control" id="pub-booktitle"
								name="booktitle" placeholder="Booktitle*" required>
						</div>

						<div class="form-group" id="authors-div">
							<label for="pub-author" class="control-label sr-only">Author</label>
							<input type="text" class="form-control" id="pub-author"
								name="author1" placeholder="Author name*" required>
						</div>

						<div class="form-group" id="authors-add">
							<button id="f_add">+ Another author</button>

						</div>



						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="icon icon_calendar"></i>
									&nbsp; Year &nbsp; </span> <select class="form-control"
									name="year">
									<?php
									for ($i = 2000; $i <= 2020; $i++){
										if ($i==2017){
											echo "<option value='$i' selected> $i</option>";
										} else{
											echo "<option value='$i'> $i</option>";
										}
									}
									?>



								</select>

							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="icon icon_calendar"></i>
									Month </span> <select class="form-control" name="month">
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</div>
						</div>







						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="icon icon_globe"></i>
									Publisher </span> <select class="form-control" name="publisher">
									<option value="Springer">Springer</option>
									<option value="IEEE">IEEE</option>
									<option value="ACM">ACM</option>
									<option value="Elsevier">Elsevier</option>
									<option value="Wiley">Wiley</option>
									<option value="Taylor and Francis">Taylor and Francis</option>
									<option value="Other">Other</option>
									<option value="Unknown">Unknown</option>

								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="pub-pages" class="control-label sr-only">Pages</label>
							<input type="text" class="form-control" id="pub-pages"
								name="pages" placeholder="Pages*" required>
						</div>

						<div class="form-group">
							<label for="pub-issue" class="control-label sr-only">Issue</label>
							<input type="number" class="form-control" id="pub-issue"
								name="issue" placeholder="Issue*" required>
						</div>

						<div class="form-group">
							<label for="pub-volume" class="control-label sr-only">Volume</label>

							<input type="number" class="form-control" id="pub-volume"
								name="volume" placeholder="Volume*" required>

						</div>

						<div class="form-group">
							<label for="pub-volume" class="control-label sr-only">Impact
								Factor</label> <input type="text" class="form-control"
								id="impact_factor" name="impactfactor"
								placeholder="Impact Factor" required>
						</div>

						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="icon icon_globe"></i>
									Category </span> <select class="form-control" name="category">
									<option value="1">Journal</option>
									<option value="2">Conference</option>
									<option value="3">Book</option>
									<option value="4">Book Chapter</option>
									<option value="5">Workshop</option>
									<option value="6">Work-in-Progress</option>
									<option value="7">Demo</option>
									<option value="8">Poster</option>


								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="icon icon_globe"></i>
									Indexing </span> <select class="form-control" name="indexing">
									<option value="0">None</option>
									<option value="1">ISI</option>
									<option value="2">SCOPUS</option>
									<option value="3">Other</option>


								</select>
							</div>
						</div>



						<div class="form-group">
							<label for="pub-hlink" class="control-label sr-only">Hlink</label>
							<input type="text" class="form-control" id="pub-hlink"
								name="hlink" placeholder="Hlink*" required>
						</div>


						<div class="form-group">
							<div class="col-sm-12">
								<button id="submit-button" type="submit" class="btn btn-primary">
									<i class="fa loading-icon"></i> <span>Submit Publication</span>
								</button>
							</div>
						</div>


						<input type="hidden" name="msg-submitted" id="msg-submitted"
							value="true">
					</form>
				</div>
				<?php



				?>




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
	var numberOfAuthors = 1;
	$("#f_add").click(function(e) {
	numberOfAuthors=numberOfAuthors+1;
	//alert(numberOfAuthors);
    var field = document.createElement('input');
	$("#number_of_authors").val(numberOfAuthors);
    $(field).attr('type', 'text').appendTo('form');;
    $(field).attr('class', 'form-control');
    $(field).attr('id', 'pub-author');
    $(field).attr('name', 'author'+numberOfAuthors);
    $(field).attr('placeholder', 'Author name');
    $("#authors-div").append(field);
    e.preventDefault();


//$('#add-publication-form').append('<input type="text" class="form-control" name="author"'+numberOfAuthors+' value="myvalue" placeholder="Author name"/>');



	});
	</script>




</body>

</html>
