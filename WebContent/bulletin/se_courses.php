<h3>University Required Courses</h3>
<div class="row">

	<div class="col-lg-5">
		<table class="table table-striped">
			<tr>
				<th>Course ID</th>
				<th>Course Name</th>
				<th>Credit Hours</th>
			</tr>
			<tr>
			<?php
			$MAJOR='se';
			?>
			<?php
			$sql = "SELECT * FROM course where requirement = 'university' and major_type='core' and major ='general' and (track!='business') order by code";
			//echo $sql;
			$result = $dbconn->query($sql);
			$total_credit_hours=0;
			while($row = $result->fetch_assoc()){
				$total_credit_hours=$total_credit_hours+$row['credit_hours'];
				$course_code=$row['code'];
				$course_name=$row['name'];
				echo'<tr><td id="'.$course_code.'" ondblclick=\'editCell("'.$course_code.'")\' oncontextmenu=\'saveCodeCell("'.$course_code.'")\' >'.$row['code'].'</td><td id="name'.$course_code.'" ondblclick=\'editCell("name'.$course_code.'")\' oncontextmenu=\'saveNameCell("'.$course_code.'")\' >'.$row['name'].'</td><td>'.$row['credit_hours'].'</td> </tr> ';
					
			}
			echo '<tr><th colspan="2">Total Credits</th><th>'.$total_credit_hours.'</th></tr>';
			?>
			</tr>
		</table>
		<div class="col-lg-2"></div>
	</div>
	<div class="col-lg-5">
		
	</div>

</div>

<h3>CCIS College Required Courses</h3>
<div class="row">

	<div class="col-lg-5">
	
		<table class="table table-striped">
			<tr>
				<th>Course ID</th>
				<th>Course Name</th>
				<th>Credit Hours</th>
			</tr>
			<tr>
			<?php
			$total_credit_hours=0;
			$sql = "SELECT * FROM course where requirement = 'college' and major_type='core' and (major ='".$MAJOR."' or major ='general') and (track!='business')  order by track, code";
			//echo $sql;
			$result = $dbconn->query($sql);

			while($row = $result->fetch_assoc()){
				$total_credit_hours=$total_credit_hours+$row['credit_hours'];
				$course_code=$row['code'];
				$course_name=$row['name'];
				echo'<tr><td id="'.$course_code.'" ondblclick=\'editCell("'.$course_code.'")\' oncontextmenu=\'saveCodeCell("'.$course_code.'")\' >'.$row['code'].'</td><td id="name'.$course_code.'" ondblclick=\'editCell("name'.$course_code.'")\' oncontextmenu=\'saveNameCell("'.$course_code.'")\' >'.$row['name'].'</td><td>'.$row['credit_hours'].'</td> </tr> ';
			}
			echo '<tr><th colspan="2">Total Credits</th><th>'.$total_credit_hours.'</th></tr>';
			?>
			</tr>
		</table>
		<div class="col-lg-2"></div>
	</div>
	<div class="col-lg-5">
		
	</div>

</div>
<h3>SE Program Requirements</h3>
<div class="row">

	<div class="col-lg-5">
	<h4>Core Courses</h4>
		<table class="table table-striped">
			<tr>
				<th>Course ID</th>
				<th>Course Name</th>
				<th>Credit Hours</th>
			</tr>
			<tr>
			<?php
			$sql = "SELECT * FROM course where requirement = 'program' and major_type='core' and (major ='".$MAJOR."' or major ='general') and (track!='business')  order by code";
			//echo $sql;
			$result = $dbconn->query($sql);
			$total_credit_hours=0;
			while($row = $result->fetch_assoc()){
				$total_credit_hours=$total_credit_hours+$row['credit_hours'];
				$course_code=$row['code'];
				$course_name=$row['name'];
				echo'<tr><td id="'.$course_code.'" ondblclick=\'editCell("'.$course_code.'")\' oncontextmenu=\'saveCodeCell("'.$course_code.'")\' >'.$row['code'].'</td><td id="name'.$course_code.'" ondblclick=\'editCell("name'.$course_code.'")\' oncontextmenu=\'saveNameCell("'.$course_code.'")\' >'.$row['name'].'</td><td>'.$row['credit_hours'].'</td> </tr> ';
					
			}
			echo '<tr><th colspan="2">Total Credits</th><th>'.$total_credit_hours.'</th></tr>';
			?>
			</tr>
		</table>
		<div class="col-lg-2"></div>
	</div>
	<div class="col-lg-5">
	<h4>Elective Courses</h4>
		<table class="table table-striped">
			<tr>
				<th>Course ID</th>
				<th>Course Name</th>
				<th>Credit Hours</th>
			</tr>
			<?php
			$sql = "SELECT * FROM course where requirement = 'program' and major_type='elective' and (major ='".$MAJOR."' or major ='general')  and (track!='business') order by code";
			//echo $sql;
			$result = $dbconn->query($sql);
			$total_credit_hours=0;
			while($row = $result->fetch_assoc()){
				$total_credit_hours=$total_credit_hours+$row['credit_hours'];
				$course_code=$row['code'];
				$course_name=$row['name'];
				echo'<tr><td id="'.$course_code.'" ondblclick=\'editCell("'.$course_code.'")\' oncontextmenu=\'saveCodeCell("'.$course_code.'")\' >'.$row['code'].'</td><td id="name'.$course_code.'" ondblclick=\'editCell("name'.$course_code.'")\' oncontextmenu=\'saveNameCell("'.$course_code.'")\' >'.$row['name'].'</td><td>'.$row['credit_hours'].'</td> </tr> ';
					

			}
			echo '<tr><th colspan="2">Total Credits</th><th>'.$total_credit_hours.'</th></tr>';
			?>
		</table>

	</div>

</div>
