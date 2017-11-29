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


if (!isset($_GET['code'])){
	echo "No course ID in GET Request is Found";
}else{

	$code = $_GET['code'];


	$sql = "SELECT * FROM course where code = '".$code."'";
	//echo $sql;



	$result = $dbconn->query($sql);




	if ($result->num_rows == 0) {
		echo "No course found with ID = ".$code;
	}else if ($result->num_rows > 1) {
		echo "Too many duplicate courses found ID = ".$code;
	}else if ($result->num_rows == 1){

		$row = $result->fetch_assoc();

		$code=$row['code'];
		$name=$row['name'];
		$description = $row['description'];
		$major = $row['major'];
		$track = $row['track'];
		$major_type = $row['major_type'];
		$track_type = $row['track_type'];
		$requirement = $row['requirement'];
		$credit_hours = $row['credit_hours'];
		$lecture_credits = $row['lecture_credits'];
		$tutorial_credits = $row['tutorial_credits'];
		$lab_credits = $row['lab_credits'];
			


	}

	?>
	<div class="row">
		<form action="update_course_data.php" method="post">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<h1>Add a new course</h1>
				<label>Course Code</label><input type="text" class="form-control"
					id="code" name="code" value='<?php echo $code; ?>' readonly /><br>
				<label>Course Name</label><input type="text" class="form-control"
					id="name" name="name" value='<?php echo $name; ?>' /><br> <label>Course
					Description</label>
				<textarea class="form-control" rows="10" id="description"
					name="description"><?php echo $description; ?></textarea>
				<label for="sel1">Major</label> <select class="form-control"
					id="major" name="major">
					<option value="cs" <?php if($major == 'cs') echo "selected"; ?>>CS</option>
					<option value="se" <?php if($major == 'se') echo "selected"; ?>>SE</option>
					<option value="general"
					<?php if($major == 'general') echo "selected"; ?>>General (for all
						majors)</option>
				</select> <label for="sel1">Track</label> <select
					class="form-control" id="track" name="track">
					<option value="cs-main"
					<?php if($track == 'cs-main') echo "selected"; ?>>CS Main Track</option>
					<option value="dms" <?php if($track == 'dms') echo "selected"; ?>>Digital
						Media Track</option>
					<option value="security"
					<?php if($track == 'security') echo "selected"; ?>>Security Track</option>
					<option value="se-main"
					<?php if($track == 'se-main') echo "selected"; ?>>SE Main Track</option>
					<option value="business"
					<?php if($track == 'business') echo "selected"; ?>>Business Courses</option>
					<option value="general"
					<?php if($track == 'general') echo "selected"; ?>>General Courses
						(for Science, Languages, ...)</option>

				</select> <label for="sel1">Major Course Type</label> <select
					class="form-control" id="major_type" name="major_type">
					<option value="core"
					<?php if($major_type == 'core') echo "selected"; ?>>Core</option>
					<option value="elective"
					<?php if($major_type == 'elective') echo "selected"; ?>>Elective</option>
				</select> <label for="sel1">Track Course Type</label> <select
					class="form-control" id="track_type" name="track_type">
					<option value="core"
					<?php if($track_type == 'core') echo "selected"; ?>>Core</option>
					<option value="elective"
					<?php if($track_type == 'elective') echo "selected"; ?>>Elective</option>
				</select> <label>Total Credit Hours</label><input type="number"
					class="form-control" min="1" max="20"
					value='<?php echo $credit_hours; ?>' id="credit_hours"
					name="credit_hours" /><br>
				<div class="row">
					<div class="col-lg-4">
						<label>Lecture Hours</label><input type="number"
							class="form-control" min="0" max="20"
							value='<?php echo $lecture_credits; ?>' id="lecture_credits"
							name="lecture_credits" /><br>
					</div>
					<div class="col-lg-4">
						<label>Tutorial Hours</label><input type="number"
							class="form-control" min="0" max="20"
							value='<?php echo $tutorial_credits; ?>' id="tutorial_credits"
							name="tutorial_credits" /><br>
					</div>
					<div class="col-lg-4">
						<label>Lab Hours</label><input type="number" class="form-control"
							min="0" max="20" value='<?php echo $lab_credits; ?>'
							id="lab_credits" name="lab_credits" /><br>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-12">
						<label for="sel1">Requirement</label> <select class="form-control"
							id="requirement" name="requirement">
							<option value="university"
							<?php if($requirement == 'university') echo "selected"; ?>>University</option>
							<option value="college"
							<?php if($requirement == 'college') echo "selected"; ?>>College</option>
							<option value="program"
							<?php if($requirement == 'program') echo "selected"; ?>>Program</option>
						</select>
					</div>
					<div class="col-lg-12">
						<br> <input type="submit" value="Update Course"
							class="btn btn-info">
					</div>
				</div>
			</div>
			<div class="col-lg-3"></div>
	
	</div>

	</form>
	<?php
} //end if isset(GET(code))
?>

</body>
</html>
