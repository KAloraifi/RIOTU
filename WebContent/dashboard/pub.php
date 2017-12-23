<div class="container-fluid">
    <div class="row-fluid">
        <div class="widget-box">
          <div class="widget-title">
            </div>
          <div class="widget-content nopadding">
              
              
              
              <?php

include 'include/dbconfig2.php';

				$sql = "SELECT * FROM publication ";
				$result = $dbconn->query($sql);


				echo '<table class="table table-bordered data-table">';
				echo '<thead>
									<tr>
										<th>No.</th>
										<th>Title</th>
										<th>Date of Publication</th>
										<th>Publisher</th>
										<th>Book Title</th>
                                        <th>Action</th>

                                        
									</tr>
                                    
								</thead>';
				echo'<tbody>';
				$number_item=0;
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$number_item+=1;
                        $title=$row["title"];
                        $year=$row["year"];
                        $month=$row["month"];
                        $publisher=$row["publisher"];
                        $booktitle=$row["booktitle"];

						
						
                        echo '<tr>';
                        
						echo '
							<td>'.$number_item.'</td>
							<td>'.$title.'</td>
							<td>'.$year. '-' .$month.'</td>
							<td>'.$publisher.'</td>
							<td>'.$booktitle.'</td>
                            <td width="100px"> 
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