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



$sql_course = "UPDATE course SET name='".$name."', description='".$description."', major='".$major."', track='".$track."', major_type='".$major_type."', track_type='".$track_type."', requirement='".$requirement."', credit_hours=".$credit_hours.", lecture_credits=".$lecture_credits.", tutorial_credits=".$tutorial_credits.", lab_credits=".$lab_credits." WHERE code='".$code."'";

//echo $sql_course;



if ($dbconn->query($sql_course)){
	echo "<br>";
	//echo "Your course updated successfully!!";
	//echo "<br>";
	echo '<script language="javascript">';
	echo 'alert("Your course updated successfully")';
	echo '</script>';
}else {
	//echo "<br>";
	//echo "Error happened !!";
	//echo "<br>";
	echo '<script language="javascript">';
	echo 'alert("Error happened !!")';
	echo '</script>';
}

echo 'wait until redirecting to main page';
header( "Refresh:0; url=index.php", true, 303);
//header('Location: index.php');
?>

