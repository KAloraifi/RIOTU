<select id="functionalty" onchange="functionlaty()" class="center-block">
                        <option>select</option>
                       
                        <option value="publications">publications</option>
                        <option value="news">news</option>
                        
                    </select><br>
                    <script>
                    function functionlaty(){
                          if (document.getElementById("functionalty").value=="publications"){
                             document.getElementById("publications").style.display = "block";
                           
                             document.getElementById("news").style.display = "none";

                         }
                         else{
                             document.getElementById("news").style.display = "block";
                               document.getElementById("publications").style.display = "none";
                          
                         }
                    }
                    
                    </script>
                    <div class="container" style="display:none" id="publications">
				<!-- publication add FORM -->
                    <div class="well well-form-wrapper col-sm-6 ">
					<p class="lead">Add a publication</p>

                                        <form class="form-horizontal label-left">

                                                <div class="form-group">

                                                    <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">Title*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="title"
									name="title">
							</div>
                                                        <p id="usedtitle" class="" style="display:none;"></p>
                                                        </div>


                                                        <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">impactfactor*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="impactfactor"
									name="impactfactor">
							</div>
						</div>


                                                    <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">year*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="year"
									name="year"><br>
                                                                
							</div>
                                                        </div>


                                                        <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">month*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="month"
									name="month">
							</div>
						</div>

                                                     <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">pages*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="pages"
									name="pages">
							</div>
						</div>

                                                     <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">publisher*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="publisher"
									name="publisher">
							</div>
						</div>
                                                    
                                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">issue*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="issue"
									name="issue">
							</div>
						</div>
                                                    
                                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">volume*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="volume"
									name="volume">
							</div>
						</div>
                                                    
                                                                                                    <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">category*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="category"
									name="category">
							</div>
                                                        <p id="wrongcategory" class="" style="display:none;"></p>
						</div>
                                                    
                                                                                                    <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">indexing*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="indexing"
									name="indexing">
							</div>
						</div>
                                                                                                        
                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">booktitle*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="booktitle"
									name="booktitle">
							</div>
						</div>
                                                    
                                                                                                        
                                                        <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">hlink*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="hlink"
									name="hlink">
							</div>
						</div>
                                                    
                                                 
                                                 <button type="button" class="btn btn-primary btn-lg center-block" onclick="addPublicationUserRequest()"><i class="fa fa-sign-in"></i> Add</button>
                                                 <br><p id="publicationadded" class=""> </p>




                                             </form>
					</div>
                                           
			</div>
                                 <!-- publication add FORM END -->
                                       <!-- Remove publication FORM -->
                                  <div class="col-sm-6 ">
                                      <div class="well well-form-wrapper">
					<p class="lead">Remove a publication</p>
                                        <form class="form-horizontal label-right">
                                             <div class="form-group">

                                               <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">publication Title*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="titleremove"
									name="titleremove"><br>
                                                                <p id="publicationremove"></p>
							</div>
                                                        </div>

                                             <button type="button" class="btn btn-primary btn-lg center-block" onclick="removePublicationUserRequest()"><i class="fa fa-sign-out"></i> Remove</button>


                                             </form>
					</div>
                                    </div>
                              
                                       <!-- END publication remove FORM -->
                                       
                                       <!--  publication update FORM -->
                                      
                                         <div class="well well-form-wrapper">
					<p class="lead">Update publication</p>
                                        <form class="form-horizontal label-left">
                                             <div class="form-group" >

                                               <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">Title*</label>
							<div class="col-sm-9">
                                                            <input type="text" class="form-control" id="titledisplay" onkeyup="displayPublicationUser()"
                                                                   name="titledisplay">  <button type="reset" class="btn btn-primary btn-lg center-block" >Display info</button><br>
                                                                <p id="displaypublication"></p>
                                                        </div>
                                                         </div>


                                        <form class="form-horizontal label-left">

                                                <div class="form-group" style="display:none;" id="publicationUpdateForm">
                                                    <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">Title*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="titleUp"
									name="titleUp">
							</div>
                                                        <p id="usedtitleUp" class="" style="display:none;"></p>
                                                        </div>


                                                        <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">impactfactor*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="impactfactorUp"
									name="impactfactorUp">
							</div>
						</div>


                                                    <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">year*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="yearUp"
									name="yearUp"><br>
                                                                
							</div>
                                                        </div>


                                                        <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">month*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="monthUp"
									name="monthUp">
							</div>
						</div>

                                                     <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">pages*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="pagesUp"
									name="pagesUp">
							</div>
						</div>

                                                     <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">publisher*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="publisherUp"
									name="publisherUp">
							</div>
						</div>
                                                    
                                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">issue*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="issueUp"
									name="issueUp">
							</div>
						</div>
                                                    
                                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">volume*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="volumeUp"
									name="volumeUp">
							</div>
						</div>
                                                    
                                                                                                    <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">category*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="categoryUp"
									name="categoryUp">
							</div>
                                                        <p id="wrongcategoryUp" class="" style="display:none;"></p>
                                                        <p class="note-check">  1:JOURNAL, 2:CONFERENCE, 3:BOOK, 4:BOOK CHAPTER, 5:WORKSHOP, 6:WORK IN PROGRESS. 7:DEMO, 8:POSTER</p>
						</div>
                                                    
                                                                                                    <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">indexing*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="indexingUp"
									name="indexingUp">
							</div>
						</div>
                                                                                                        
                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">booktitle*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="booktitleUp"
									name="booktitleUp">
							</div>
						</div>
                                                    
                                                                                                        
                                                        <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">hlink*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="hlinkUp"
									name="hlinkUp">
							</div>

                                                    </div>
                                                    
                                                                                          <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">Author*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="author"
                                                                        name="author" disabled>
							</div>

                                                    </div>
                                                    <button type="button" class="btn btn-primary btn-lg center-block" onclick="updatePublicationUserRequest()"><i class="fa fa-recycle"></i> Update</button>
                                              <br><p id="updatepublication" class=""></p>
						</div>
                                             
                                              </div>

                                            

                                             </form>
					</div>
                                       <!-- END publication update FORM -->           
		</div>
            </div>
                    
                    <div class="container" style="display:none" id="news">
				<!-- News add FORM -->
				<div class="well well-form-wrapper col-sm-6 ">
					<p class="lead">Add News</p>

                                        <form class="form-horizontal label-left">

                                                <div class="form-group">

                                                    <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">Title*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="titleNews"
									name="titleNews">
							</div>
                                                        <p id="newsused" class="" style="display:none;"></p>
                                                        </div>


                                                        <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">ShortDescription*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="shortDescriptionNews"
									name="shortDescriptionNews">
							</div>
						</div>


                                                    <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">LongDescription*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="longDescriptionNews"
									name="longDescriptionNews"><br>
                                                                
							</div>
                                                        </div>


                                                        <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">Date*</label>
							<div class="col-sm-9">
								<input type="date" class="form-control" id="datenews"
									name="datenews">
							</div>
						</div>

                                                     <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">Picture1*</label>
							<div class="col-sm-9">

                                                            <input  class="form-control" id="pictureNews1"
									name="picturenews1">
                                                           
                                                    </div>
						</div>

                                                     <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">picture2*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="pictureNews2"
									name="picturenews2">
							</div>
						</div>
                                                    
                                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">picture3*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="pictureNews3"
									name="picturenews3">
							</div>
						</div>
                                                    
                                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">picture4*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="pictureNews4"
									name="picturenews4">
							</div>
						</div>
                                                    
                                       
                                                 <button type="button" class="btn btn-primary btn-lg center-block" onclick="addNewsUser()"><i class="fa fa-sign-in"></i> Add</button>
                                                 <br><p id="newsAdd" class=""> </p>




                                             </form>
					</div>
                                    </div> 
                                          
			
                                 <!-- END News add FORM -->
                                       <!-- Remove News FORM -->
                                  <div class="col-sm-6 ">
                                      <div class="well well-form-wrapper">
					<p class="lead">Remove News</p>
                                        <form class="form-horizontal label-left">
                                             <div class="form-group">

                                               <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">News Title*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="titleNewsRemove"
									name="titleremove"><br>
                                                                <p id="newsRemove"></p>
							</div>
                                                        </div>

                                             <button type="button" class="btn btn-primary btn-lg center-block" onclick="removeNewsRequestUser()"><i class="fa fa-sign-out"></i> Remove</button>


                                             </form>
					</div>
                                    </div>
                               
                                       <!-- END News remove FORM -->
                                       
                                       <!--  News update FORM -->
                                      
                                         <div class="well well-form-wrapper">
					<p class="lead">Update News</p>
                                        <form class="form-horizontal label-left">
                                             <div class="form-group">

                                               <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">Title*</label>
							<div class="col-sm-9">
                                                            <input type="text" class="form-control" id="titledisplayNews" onkeyup="newsDisplayUser()"
                                                                   name="displayNews">  <button type="reset" class="btn btn-primary btn-lg center-block" onclick="newsDisplay()">Display info</button><br>
                                                                <p id="displayNews"></p>
                                                        </div>
                                                         </div>


                                        <form class="form-horizontal label-left">

                                                <div class="form-group" style="display:none;" id="NewsUpdate">
                                                    <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">Title*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="titleNewsUp"
									name="titleNewsUp">
							</div>
                                                        <p id="usedNewsUp" class="" style="display:none;"></p>
                                                        </div>


                                                          <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">ShortDescription*</label>
							<div class="col-sm-9">
								<input  class="form-control" id="shortDescriptionNewsUp"
									name="shortDescriptionNewsUp">
							</div>
						</div>


                                                    <div class="form-group">
							<label for="signin-username" class="col-sm-2 control-label">LongDescription*</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="longDescriptionNewsUp"
									name="longDescriptionNewsUp"><br>
                                                                
							</div>
                                                        </div>


                                                       <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">Date*</label>
							<div class="col-sm-9">
								<input type="date" class="form-control" id="datenewsUp"
									name="datenewsUp">
							</div>
						</div>

                                                                           <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">Picture1</label>
							<div class="col-sm-9">

                                                            <input  class="form-control" id="pictureNewsUp1"
									name="picturenewsUp1">
                                                           
                                                    </div>
						</div>

                                                     <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">picture2</label>
							<div class="col-sm-9">
								<input  class="form-control" id="pictureNewsUp2"
									name="picturenewsUp2">
							</div>
						</div>
                                                    
                                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">picture3</label>
							<div class="col-sm-9">
								<input  class="form-control" id="pictureNewsUp3"
									name="picturenewsUp3">
							</div>
						</div>
                                                    
                                                                         <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">picture4</label>
							<div class="col-sm-9">
								<input  class="form-control" id="pictureNewsUp4"
									name="picturenewsUp4">
							</div>
						</div>
                                                    
                                                                       <div class="form-group">
							<label for="signin-password" class="col-sm-2  control-label">Author</label>
							<div class="col-sm-9">
								<input  class="form-control" id="authornews"
                                                                        name="authornews" disabled>
							</div>
						</div>
                                                    
                                                   <button type="button" class="btn btn-primary btn-lg center-block" onclick="UpdateNewsRequestUser()"><i class="fa fa-recycle"></i> Update</button>
                                              <br><p id="updateNews" class=""></p>
                             
						</div>
                                              </div>

                                             

                                             </form>
					</div>
                                       </div>
                                       <!-- END News update FORM -->           
		</div>
          

