<div class="container-fluid">
    <div class="row-fluid">
        <div class="widget-box">
          <div class="widget-title">
            </div>
          <div class="widget-content nopadding">
              
              
              
              <?php

include 'include/dbconfig2.php';

				$sql = "SELECT * FROM news ";
				$result = $dbconn->query($sql);


				echo '<table class="table table-bordered data-table">';
				echo '<thead>
									<tr>
										<th>No.</th>
										<th>Title</th>
										<th>Short Description</th>
										<th>Long Description</th>
										<th>Date</th>
										<th>Pictures</th>
                                        <th> Action </th>

                                        
									</tr>
                                    
								</thead>';
				echo'<tbody id="InvoiceTableBody">';
				$number_item=0;
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$number_item+=1;
                        $title=$row["title"];
                        $shortDescription=$row["shortDescription"];
                        $longDescription=$row["longDescription"];
                        $date=$row["date"];
                        $picture1=$row["picture1"];
                        $picture2=$row["picture2"];
                        $picture3=$row["picture3"];
                        $picture4=$row["picture4"];
						
						
                        //put a condition to check if the news date is less than 2 days (NEW) is soon or middle or far away
   
                        $date1=date_create(date("Y-m-d"));
                        $date2=date_create($date);
                        $diff=date_diff($date1,$date2);                        
                        
                        $daysRemaining = $diff->format('%a');
                        
						if ($daysRemaining >= -2)
						echo '<tr class="success">';
                        
                        
						else echo '<tr>';
                        
						echo '
							<td>'.$number_item.'</td>
							<td>'.$title.'</td>
							<td>'.$shortDescription.'</td>
							<td>'.$longDescription.'</td>
							<td>'.$date.'</td>
							<td>'.$picture1.' '.$picture2.' '.$picture3.' '.$picture4.'</td>
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