<?php
include 'dbconfig.php';

$code = $_POST['code'];
if(isset($_POST['oldcode']))
$oldcode = $_POST['oldcode'];
else $oldcode=$code;



//$sql_course = "INSERT INTO course (code, name, description, major, track, major_type, track_type, requirement, credit_hours,lecture_credits,tutorial_credits,lab_credits)
//				VALUES ('$code', '$name', '$description', '$major', '$track', '$major_type', '$track_type', '$requirement', $credit_hours, $lecture_credits, $tutorial_credits, $lab_credits)";

if (isset($_POST['code'])){

	if ($oldcode!=$code){
		$sql_course = "UPDATE course SET code='".$code."' WHERE code='".$oldcode."'";
		$sql_pr1 = "UPDATE prerequisite SET course_code='".$code."' WHERE course_code='".$oldcode."'";
		$sql_pr2 = "UPDATE prerequisite SET prerequisite_code='".$code."' WHERE prerequisite_code='".$oldcode."'";
		echo $sql_course;

		if ($dbconn->query($sql_course)){
			echo "<br>";
			echo "Your course is updated successfully!!";
			echo "<br>";
		}else {
			echo "<br>";
			echo "Error happened !!";
			echo "<br>";
		}

		if ($dbconn->query($sql_pr1)){
			echo "<br>";
			echo "Your PR1 is updated successfully!!";
			echo "<br>";
		}else {
			echo "<br>";
			echo "Error happened !!";
			echo "<br>";
		}

		if ($dbconn->query($sql_pr2)){
			echo "<br>";
			echo "Your PR2 is updated successfully!!";
			echo "<br>";
		}else {
			echo "<br>";
			echo "Error happened !!";
			echo "<br>";
		}

	}

	if (isset($_POST['name'])){
		$name = $_POST['name'];

		$sql_course = "UPDATE course SET name='".$name."' WHERE code='".$code."'";

		echo $sql_course;
		
	if ($dbconn->query($sql_course)){
			echo "<br>";
			echo "Your course name is updated successfully!!";
			echo "<br>";
		}else {
			echo "<br>";
			echo "Error happened !!";
			echo "<br>";
		}
	}

	if (isset($_POST['credit_hours'])){
		$credit_hours = $_POST['credit_hours'];
		$sql_course = "UPDATE course SET credit_hours='".$credit_hours."' WHERE code='".$code."'";
		echo $sql_course;
		
	if ($dbconn->query($sql_course)){
			echo "<br>";
			echo "Your course credit is updated successfully!!";
			echo "<br>";
		}else {
			echo "<br>";
			echo "Error happened !!";
			echo "<br>";
		}
	}

}





?>

