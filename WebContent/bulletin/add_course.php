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
</head>
<body>

<?php
include 'dbconfig.php';

$code = $_POST['code'];
$name = $_POST['name'];
$description = $_POST['description'];
$major = $_POST['major'];
$track = $_POST['track'];
$major_type = $_POST['major_type'];
$track_type = $_POST['track_type'];
$requirement = $_POST['requirement'];
$credit_hours = $_POST['credit_hours'];
$lecture_credits = $_POST['lecture_credits'];
$tutorial_credits = $_POST['tutorial_credits'];
$lab_credits = $_POST['lab_credits'];

$sql_course = "INSERT INTO course (code, name, description, major, track, major_type, track_type, requirement, credit_hours,lecture_credits,tutorial_credits,lab_credits)
				VALUES ('$code', '$name', '$description', '$major', '$track', '$major_type', '$track_type', '$requirement', $credit_hours, $lecture_credits, $tutorial_credits, $lab_credits)";

echo $sql_course;

if ($dbconn->query($sql_course)){
	echo "<br>";
	echo "Your course entered successfully!!";
	echo "<br>";
}else {
	echo "<br>";
	echo "Error happened !!";
	echo "<br>";
}

?>
<p>
<a href="index.php">index</a>

</body>
</html>
