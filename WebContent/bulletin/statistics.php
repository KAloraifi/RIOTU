<?php
include 'dbconfig.php';

$total_number_of_courses=0;
$total_number_of_university_courses=0;
$total_number_of_cs_courses=0;
$total_number_of_se_courses=0;
$total_number_of_cs_core_courses=0;
$total_number_of_se_core_courses=0;
$total_number_of_cs_selective_courses=0;
$total_number_of_se_selective_courses=0;

$total_number_of_dms_core_courses=0;
$total_number_of_dms_selective_courses=0;
$total_number_of_security_core_courses=0;
$total_number_of_security_selective_courses=0;

$total_number_of_business_courses=0;
$total_number_of_general_courses=0;

$total_credit_hours_of_cs_courses=0;
$total_credit_hours_of_se_courses=0;

$total_credit_hours_of_cs_core_courses=0;
$total_credit_hours_of_se_core_courses=0;

$total_credit_hours_of_university_courses=0;


$sql = "SELECT * FROM course order by code";
//echo $sql;

$result = $dbconn->query($sql);

while($row = $result->fetch_assoc()){
	$total_number_of_courses=$total_number_of_courses+1;

	if ($row['requirement']=='university') {
		$total_number_of_university_courses=$total_number_of_university_courses+1;
		$total_credit_hours_of_university_courses=$total_credit_hours_of_university_courses+$row['credit_hours'];

	}//check the following if statement
	if ((($row['major']=='cs') || ($row['major']=='general') &&($row['track']!='business'))){
		$total_number_of_cs_courses=$total_number_of_cs_courses+1;
		$total_credit_hours_of_cs_courses=$total_credit_hours_of_cs_courses+$row['credit_hours'];
		if ($row['major_type']=='core')
		echo "<p>".$row['code'];
		$total_credit_hours_of_cs_core_courses=$total_credit_hours_of_cs_core_courses+$row['credit_hours'];
		
	}
	if (($row['major']=='se') || ($row['major']=='general')) {
		$total_number_of_se_courses=$total_number_of_cs_courses+1;
		$total_credit_hours_of_se_courses=$total_credit_hours_of_se_courses+$row['credit_hours'];
	}

}


echo "<p>Total number of courses: ". $total_number_of_courses."</p>";
	echo "<p>Total number of University courses: ". $total_number_of_university_courses."</p>";
	echo "<p>Total number of CS courses: ". $total_number_of_cs_courses."</p>";
	echo "<p>Total number of SE courses: ". $total_number_of_se_courses."</p>";
	echo "<p>Total credit hours of University courses: ". $total_credit_hours_of_university_courses."</p>";
	echo "<p>Total credit hours of CS courses: ". $total_credit_hours_of_cs_courses."</p>";
	echo "<p>Total credit hours of SE courses: ". $total_credit_hours_of_se_courses."</p>";
	echo "<p>Total credit hours of CS core courses: ". $total_credit_hours_of_cs_core_courses."</p>";

?>