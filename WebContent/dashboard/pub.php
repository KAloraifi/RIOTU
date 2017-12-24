<div class="container-fluid">
    <div class="row-fluid">
        <div class="widget-box">
          <div class="widget-title">
            </div>
          <div class="widget-content nopadding">
              
 


              
              <?php

include 'include/dbconfig2.php';

				$sql = "SELECT * FROM publication ";
				$result = $conn->query($sql);


				echo '<table class="table table-bordered data-table table-responsive ">';
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
				echo'<tbody id="InvoiceTableBody">';
				$number_item=0;
				if ($result->num_rows > 0) {
                                    $count=1;
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$number_item+=1;
                        $title=$row["title"];
                        $year=$row["year"];
                        $month=$row["month"];
                        $publisher=$row["publisher"];
                        $booktitle=$row["booktitle"];

						
						
                        echo '<tr id="row'.$count.'">';
                        
						echo '
							<td>'.$number_item.'</td>
							<td id="title'.$count.'">'.$title.'</td>
							<td>'.$year. '-' .$month.'</td>
							<td>'.$publisher.'</td>
							<td>'.$booktitle.'</td>
                            <td width="100px" id="colume'.$count.'"> 
                                <a href="#" class="btn btn-primary btn-mini" onclick="displayPublication('.$count.')">Edit</a>
                                <a href="#" class="btn btn-danger btn-mini" onclick="removePublicationRequest('.$count.')">Delete</a>
                           <a href="#" class="btn btn-danger btn-mini" id="r'.$count.'"  onclick=""  style="display:none;">Save</a>
                                <a href="#" class="btn btn-primary btn-mini" id="u'.$count.'" onclick="updatePublicationRequest('.$count.')" style="display:none;">Save</a>
                            </td> 
						   </tr>';

					$count++;}
				}
				echo'</tbody>';
				echo '</table>';
				echo '</div>';
				?>
              
              
        </div>
       
    </div>
  </div>
</div>