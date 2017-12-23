<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Publications</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<?php
include_once 'include/headers_links.php';
ob_start();
?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	<?php
	include 'include/dbconfig.php';
	session_start();
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




				<?php
				if (isset ( $_POST ['msg-submitted'] )) {
					// Fetching variables of the form which travels in URL
					$number_of_authors =$_POST ['number_of_authors'];
					//echo $number_of_authors."<br>";
					$authors=array();
					for ($i=1;$i<=$number_of_authors;$i++){
						$authors[$i]=$_POST['author'.$i];
						//echo $authors[$i]."<br>";
					}
					$title = $_POST ['title'];
					$impact_factor = $_POST['impactfactor'];
					$year = $_POST['year'];
					$month = $_POST['month'];
					$pages = $_POST['pages'];
					$publisher = $_POST['publisher'];
					$issue = $_POST['issue'];
					$volume = $_POST['volume'];
					$category = $_POST['category'];
					$indexing = $_POST['indexing'];
					$booktitle = $_POST['booktitle'];
					$hlink = $_POST['hlink'];

				}

				$sql_check_publication = "SELECT * FROM publication WHERE publication.title='".$title."'";
				$result = $dbconn->query($sql_check_publication);
				if ($result->num_rows > 0) {
					echo "The publication already exists in the database. It will not be added";

				}else{
					$sql_publication = "INSERT INTO publication (title, impactfactor, year, month, pages, publisher, issue, volume, category, indexing, booktitle, hlink)
				VALUES ('$title', '$impact_factor', '$year', '$month', '$pages', '$publisher', '$issue', '$volume', '$category', '$indexing', '$booktitle', '$hlink' )";

					if ($dbconn->query($sql_publication)){
						echo "<br>";
						echo "Your publication entered successfully!!";
						echo "<br>";
					}else {
						echo "<br>";
						echo "Error happened !!";
						echo "<br>";
					}

					//add authors to database
					$authors_ids = array();
					$k=1;
					for ($i=1;$i<=$number_of_authors;$i++){
						//check if authors already in database
						$author = explode(" ", $authors[$i]);
						$firstName = $author[0];
						$lastName = $author[1];
						$sql_author = "SELECT * FROM author WHERE author.firstname='".$firstName."' and author.lastname='".$lastName."'";
						
						$result_author = $dbconn->query($sql_author);
						if ($result_author->num_rows == 0) {
							echo $sql_author."<br>";
							echo "author not found and will added in database"."<br>";
							$insert_author_sql = "insert into author (firstname, lastname) values ('$firstName', '$lastName')";
							echo $insert_author_sql."<br>";
							$dbconn->query($insert_author_sql);
							$sql_author = "SELECT * FROM author WHERE author.firstname='".$firstName."' and author.lastname='".$lastName."'";
							$result_author = $dbconn->query($sql_author);
							$row_authorid = $result_author->fetch_assoc();
							$authors_ids[$k]=$row_authorid['aid'];
							echo $row_authorid['aid']."<br>";
							$k++;
						}else{
							echo "author is found"."<br>";
							$row_authorid = $result_author->fetch_assoc();
							$authors_ids[$k]=$row_authorid['aid'];
							echo $row_authorid['aid']."<br>";
							$k++;
						}
					}



					//add author publication relation to database
					$sql_check_publication = "SELECT * FROM publication WHERE publication.title='".$title."'";
					$result_publication = $dbconn->query($sql_check_publication);
					$row_publication = $result_publication->fetch_assoc();
					$publication_id=$row_publication['pid'];
					for ($j=1;$j<=$number_of_authors;$j++){
						echo "insert author publication relation"."<br>";
						$author_id=$authors_ids[$j];
						$sql_publication_author ="INSERT INTO author_publication(author_id,publication_id) VALUES ($author_id,$publication_id)";
						echo $sql_publication_author;
						$dbconn->query($sql_publication_author);
					}

					//echo "<h3>Weclome " . $row["firstname"]. " " . $row["lastname"]."</h3><br>";
				}












				echo "<br>";
				echo "Your publication info:";
				echo "<br>";
				if(isset($id)) echo "The ID: ", $id;
				echo "<br>";
				if(isset($title)) echo "The Title: ", $title;
				echo "<br>";
				if(isset($type)) echo "The Type: ", $type;
				echo "<br>";
				if(isset($year)) echo  "The year: ", $year;
				echo "<br>";
				if(isset($month)) echo "The month: ", $month;
				echo "<br>";
				if(isset($pages)) echo "The pages: ", $pages;
				echo "<br>";
				if(isset($publisher)) echo "The publisher: ", $publisher;
				echo "<br>";
				if(isset($issue)) echo "The issue: ", $issue;
				echo "<br>";
				if(isset($volume)) echo "The volume: ", $volume;
				echo "<br>";
				if(isset($category)) echo "The category: ", $category;
				echo "<br>";
				if(isset($indexing)) echo "The indexing: ", $indexing;
				echo "<br>";
				if(isset($booktitle)) echo "The booktitle: ", $booktitle;
				echo "<br>";
				if(isset($hlink)) echo "The booktitle: ", $hlink;
				echo "<br>";
				
				sleep(1);
			header("location: publications.php");	
				
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

</body>

</html>
