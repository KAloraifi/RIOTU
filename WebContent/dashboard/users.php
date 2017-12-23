<div class="container-fluid" id="usersMng">
    <div class="row-fluid">
        <div class="widget-box">
          <div class="widget-title">
            </div>
          <div class="widget-content nopadding">
              
              
              
              <?php

include 'include/dbconfig2.php';
              

				$sql = "SELECT * FROM users ";
				$result = $conn->query($sql);


				echo '<table class="table table-bordered data-table">';
				echo '<thead>
									<tr>
										<th>No.</th>
										<th>Username</th>
										<th>Name</th>
										<th>Role</th>
										<th>Birth Date</th>
										<th>Join Date</th>
										<th>Contact Information</th>
                                        <th> Action </th>
									</tr>
                                    
								</thead>';
				echo'<tbody id="InvoiceTableBody">';
                    
                    
				$number_item=0;
                    
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$number_item+=1;
                        $username=$row["username"];
						$firstName=$row["firstname"] ;
						$lastName=$row["lastname"] ;
                        $role=$row["role"];
						$birthDate=$row["birthDate"];
						$joinDate=$row["joinDate"];
						$contact=$row["contact"];
						
						if ($role=='admin')
						echo '<tr class="success">';
                        
						else if ($role=='member')
						echo '<tr class="info">';
                        
						else if ($role=='student')
						echo '<tr class="danger">';
                        
						else echo '<tr>';
                        
						echo '
							<td>'.$number_item.'</td>
							<td>'.$username.'</td>
							<td>'.$firstName.  " "  .$lastName.'</td>
							<td>'.$role.'</td>
							<td>'.$birthDate.'</td>
							<td>'.$joinDate.'</td>
							<td>'.$contact.'</td>
                            <td> 
                                <a href="#" class="btn btn-primary btn-mini">Edit</a>
                                <a href="#" class="btn btn-danger btn-mini">Delete</a>
                            </td>
						   </tr>';

					}
				}
				echo'</tbody>';
				echo '</table>';
				echo '</div>';
				?>
              
              
        </div>
       
    </div>
  </div>
</div>

