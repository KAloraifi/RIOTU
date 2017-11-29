<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/bulletin.js"></script>
<link rel="stylesheet" href="bulletin.css"></link>
</head>
<body>
	<div class="col-lg-3"><span class="small"><a href="add_course.html">Add New Course</a></span></div>
	<div class="col-lg-6">
		<h1>Bulletin</h1>
		<?php include 'dbconfig.php';?>



		<h2>COLLEGE OF COMPUTER & INFORMATION SCIENCES [CCIS]</h2>

		<p>The College of Computer & Information Sciences takes into account
			the needs of the local community, the interdisciplinary nature of its
			fields, and navigating the rapids of change and innovation in the
			science. In putting together the CCIS degree programs, the contents
			and structures of curricula and practices the United States, Canada,
			Germany and the UK are taken into account, as well as the
			recommendations of these leading international bodies:
		
		
		<ul>
			<li>Association of Computer Machinery (ACM)
			
			<li>Association of Information Systems (AIS)
			
			<li>Association of Information Technology Professionals (ATIP)
			
			<li>Computer Science Accreditation Commission (CSAC)
			
			<li>Institute of Electrical and Electronics Engineers (IEEE)
		
		</ul>
		<p>The CCIS opened its doors to students in 2001 offering Bachelors of
			Science (BS) degrees in Computer Science (CS) and Information Systems
			(IS). Noting the needs of the community and opportunities for CCIS
			graduates skilled in the areas of Digital Media Systems, Software
			Engineering, and Business Computing | E-Commerce, the CS Department
			crafted a BS-concentration in the first: CS-DMS, offered BS degree in
			Software Engineering: BSE, and the IS Department did the like with
			the latter: IS-BCE. Within the frameworks of all CCIS degree
			programs, students are given the freedom to fashion a good portion of
			their upper division courses to their individual likings.
		
		
		<h3>Vision</h3>
		<p>To be one of the most prominent schools in the region in the area
			of computing.
		
		
		<h3>Mission</h3>
		<p>The College of Computer and Information Sciences aims to offer
			internationally proven computing programs in an academic environment
			that promotes excellence and innovation in education, research, and
			service to the community.
		
		<h2>Computer Science Program</h2>
		
		<?php include 'cs_courses.php';?>
		
		<h2>Software Engineering Program</h2>
		
		<?php include 'se_courses.php';?>

		<h3>Courses Description</h3>

		<?php


		$sql = "SELECT * FROM course order by code";
		//echo $sql;
		$result = $dbconn->query($sql);

		while($row = $result->fetch_assoc()){

			echo'<h4><a href="edit_course.php?code='.$row['code'].'">'.$row['code'].'</a>: '.$row['name'].'</h4> ';
			echo'<h6>credits: '.$row['credit_hours'].' hours ('.$row['lecture_credits'].','.$row['tutorial_credits'].','.$row['lab_credits'].')</h6> ';

			echo'<p>'.$row['description'].' </p>';

		}

		?>
	</div>
	<div class="col-lg-3"></div>

</body>
</html>
