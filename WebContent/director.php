
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
function showPreview(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            $("#targetLayer").html('<img src="'+e.target.result+'" width="200px" height="200px" class="upload-preview" />');
			$("#targetLayer").css('opacity','0.7');
			$(".icon-choose-image").css('opacity','0.5');
        }
		fileReader.readAsDataURL(objFileInput.files[0]);
    }
}

$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			beforeSend: function(){$("#body-overlay").show();},
			contentType: false,
    	    processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
			$("#targetLayer").css('opacity','1');
			setInterval(function() {$("#body-overlay").hide(); },500);
			},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});</script>
<div class="container">
        <!-- ADD FORMS FOR CONFERENCE AND PROJECT -->
        <div class="container">
          <div class="well well-form-wrapper col-sm-6">
  					<span class="lead">Add a </span>
            <select id="addCP" name="type" onchange="createAddForm()">
              <option>Choose what to add</option>
              <option value="conference">Conference</option>
              <option value="project">Project</option>
            </select>

            <!-- ADD FORM FOR CONFERENCE -->
  					<form class="form-horizontal label-left" id="conferenceAddForm"
  					<?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

  						<div class="form-group">
  							<label for="add-name" class="col-sm-3 control-label">Name*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control cinput" name="name">
                  <p id="used" class="" style="display:none;"></p>
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-location" class="col-sm-3 control-label">Location*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control cinput" name="location">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-start-date" class="col-sm-3 control-label">Start Date*</label>
  							<div class="col-sm-9">
  								<input type="date" class="form-control cinput" name="start-date">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-end-date" class="col-sm-3 control-label">End Date*</label>
  							<div class="col-sm-9">
  								<input type="date" class="form-control cinput" name="end-date">
  							</div>
  						</div>
             
              <div class="form-group">
  							<label for="add-description" class="col-sm-3 control-label">Description*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control cinput" name="description">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-publisher" class="col-sm-3 control-label">Publisher*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control cinput" name="publisher">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-rank" class="col-sm-3 control-label">Rank*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control cinput" name="rank">
  							</div>
  						</div>
                                                        <div id="body-overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>

						<button type="button" class="btn btn-primary btn-lg center-block" onclick="addCPRequest()"><i class="fa fa-plus"></i> ADD</button>
              <p id="addedc" class="">
     
  					</form>
            
             <div class="bgColor">
<form id="uploadForm" action="upload.php.php" method="post">
<div id="targetOuter">
	<div id="targetLayer"></div>
	<img src="photo.png"  class="icon-choose-image" />
	<div class="icon-choose-image" >
	<input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
	</div>
</div>
<div>
<input type="submit" value="Upload Photo" class="btnSubmit" />
</form>
</div>
</div>
        

            <!-- ADD FORM FOR PROJECT -->
            <form class="form-horizontal label-left" id="projectAddForm"
  					<?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

  						<div class="form-group">
  							<label for="add-name" class="col-sm-3 control-label">Name*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control pinput" name="name">
                  <p id="used2" class="" style="display:none;"></p>
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-funding-agency" class="col-sm-3 control-label">Funding Agency*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control pinput" name="funding-agency">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-start-date" class="col-sm-3 control-label">Start Date*</label>
  							<div class="col-sm-9">
  								<input type="date" class="form-control pinput" name="start-date">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-end-date" class="col-sm-3 control-label">End Date*</label>
  							<div class="col-sm-9">
  								<input type="date" class="form-control pinput" name="end-date">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-picture" class="col-sm-3 control-label">Picture Link*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control pinput" name="picture">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-description" class="col-sm-3 control-label">Description*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control pinput" name="description">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-pi" class="col-sm-3 control-label">Principle Investigator*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control pinput" name="pi">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-co-i" class="col-sm-3 control-label">Co-investigator*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control pinput" name="co-i">
  							</div>
  						</div>
              <div class="form-group">
  							<label for="add-total-budget" class="col-sm-3 control-label">Total Budget*</label>
  							<div class="col-sm-9">
  								<input type="number" class="form-control pinput" name="total-budget">
  							</div>
  						</div>

  						<button type="button" class="btn btn-primary btn-lg center-block" onclick="addCPRequest()"><i class="fa fa-plus"></i> ADD</button>
              <p id="addedc2" class="">
  					</form>
  				</div>
        </div>


        <!-- REMOVE FORMS FOR CONFERENCE AND PROJECT -->
        <div class="container">
          <div class="well well-form-wrapper col-sm-12">
  					<span class="lead">Remove a </span>
            <select id="removeCP" name="type" onchange="createRemoveForm()">
              <option>Choose what to remove</option>
              <option value="conference">Conference</option>
              <option value="project">Project</option>
            </select>

            <!-- REMOVE FORM FOR CONFERENCE -->
  					<form class="form-horizontal label-left" id="conferenceRemoveForm"
  					<?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

  						<div class="form-group">
  							<label for="remove-name" class="col-sm-3 control-label">Name*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control" id="cname"
  									name="name">
                  <p id="used3" class="" style="display:none;"></p>
  							</div>
  						</div>

  						<button type="button" class="btn btn-primary btn-lg center-block" onclick="removeCPRequest()"><i class="fa fa-times"></i> REMOVE</button>
              <p id="removed" class="">
  					</form>

            <!-- REMOVE FORM FOR PROJECT -->
            <form class="form-horizontal label-left" id="projectRemoveForm"
  					<?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

  						<div class="form-group">
  							<label for="remove-name" class="col-sm-3 control-label">Name*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control" id="pname"
  									name="name">
                  <p id="used4" class="" style="display:none;"></p>
  							</div>
  						</div>

  						<button type="button" class="btn btn-primary btn-lg center-block" onclick="removeCPRequest()"><i class="fa fa-times"></i> REMOVE</button>
              <p id="removed2" class="">
  					</form>
  				</div>
        </div>


        <!-- UPDATE FORMS FOR CONFERENCE AND PROJECT -->
        <div class="container">
          <div class="well well-form-wrapper col-sm-12">
            <span class="lead">Update a </span>
            <select id="updateCP" name="type" onchange="createUpdateForm()">
              <option>Choose what to update</option>
              <option value="conference">Conference</option>
              <option value="project">Project</option>
            </select>
            <!-- ENTER TARGET CONFERENCE/PROJECT TO BE UPDATED -->
  					<form class="form-horizontal label-left"
  					<?php echo $_SERVER["PHP_SELF"];?> method="get">

  						<div class="form-group">
  							<label for="update-name" class="col-sm-3 control-label">Name*</label>
  							<div class="col-sm-9">
  								<input type="text" class="form-control" id="updatename"
  									name="name">
                  <p id="used5" class="" style="display:none;"></p>
  							</div>
  						</div>

  						<button type="button" class="btn btn-primary btn-lg center-block" onclick="displayCPRequest()"><i class="fa fa-eye"></i> DISPLAY INFO</button>
              <p id="show" class="">
  					</form>
            <!-- UPDATE FORM FOR CONFERENCE -->
            <form class="form-horizontal label-left" id="conferenceUpdateForm"
            <?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

              <div class="form-group">
                <label for="update-name" class="col-sm-3 control-label">Name*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatec-name"
                    name="name">
                  <p id="used6" class="" style="display:none;"></p>
                </div>
              </div>
              <div class="form-group">
                <label for="update-location" class="col-sm-3 control-label">Location*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatec-location"
                    name="location">
                </div>
              </div>
              <div class="form-group">
                <label for="update-start-date" class="col-sm-3 control-label">Start Date*</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="updatec-start-date"
                    name="start-date">
                </div>
              </div>
              <div class="form-group">
                <label for="update-end-date" class="col-sm-3 control-label">End Date*</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="updatec-end-date"
                    name="end-date">
                </div>
              </div>
              <div class="form-group">
                <label for="update-picture" class="col-sm-3 control-label">Picture Link*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatec-picture"
                    name="picture">
                </div>
              </div>
              <div class="form-group">
                <label for="update-description" class="col-sm-3 control-label">Description*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatec-description"
                    name="description">
                </div>
              </div>
              <div class="form-group">
                <label for="update-publisher" class="col-sm-3 control-label">Publisher*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatec-publisher"
                    name="publisher">
                </div>
              </div>
              <div class="form-group">
                <label for="update-rank" class="col-sm-3 control-label">Rank*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatec-rank"
                    name="rank">
                </div>
              </div>

              <button type="button" class="btn btn-primary btn-lg center-block" onclick="updateCPRequest()"><i class="fa fa-sign-in"></i> UPDATE</button>
              <p id="updated" class="">
            </form>

            <!-- UPDATE FORM FOR PROJECT -->
            <form class="form-horizontal label-left" id="projectUpdateForm"
            <?php echo $_SERVER["PHP_SELF"];?> method="get" style="display: none;">

              <div class="form-group">
                <label for="update-name" class="col-sm-3 control-label">Name*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatep-name"
                    name="name">
                  <p id="used7" class="" style="display:none;"></p>
                </div>
              </div>
              <div class="form-group">
                <label for="update-funding-agency" class="col-sm-3 control-label">Funding Agency*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatep-funding-agency"
                    name="funding-agency">
                </div>
              </div>
              <div class="form-group">
                <label for="update-start-date" class="col-sm-3 control-label">Start Date*</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="updatep-start-date"
                    name="start-date">
                </div>
              </div>
              <div class="form-group">
                <label for="update-end-date" class="col-sm-3 control-label">End Date*</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="updatep-end-date"
                    name="end-date">
                </div>
              </div>
              <div class="form-group">
                <label for="update-picture" class="col-sm-3 control-label">Picture Link*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatep-picture"
                    name="picture">
                </div>
              </div>
              <div class="form-group">
                <label for="update-description" class="col-sm-3 control-label">Description*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatep-description"
                    name="description">
                </div>
              </div>
              <div class="form-group">
                <label for="update-pi" class="col-sm-3 control-label">Principle Investigator*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatep-pi"
                    name="pi">
                </div>
              </div>
              <div class="form-group">
                <label for="update-co-i" class="col-sm-3 control-label">Co-investigator*</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="updatep-co-i"
                    name="co-i">
                </div>
              </div>
              <div class="form-group">
                <label for="update-total-budget" class="col-sm-3 control-label">Total Budget*</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="updatep-total-budget"
                    name="total-budget">
                </div>
              </div>

              <button type="button" class="btn btn-primary btn-lg center-block" onclick="updateCPRequest()"><i class="fa fa-sign-in"></i> UPDATE</button>
              <p id="updated2" class="">
            </form>
          </div>
        </div>
        
			</div>
