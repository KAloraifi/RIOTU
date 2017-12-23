
        <!-- /navbar -->
        <div class="wrapper">
            <?php
            include 'include/dbconfig2.php';
            
            ?>
            <div class="container">
                <div class="row">
                    <div class="span1">
                    </div>
                    
                    <!--/.span3-->
                    <div class="span10">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="pubDashboard.php" class="btn-box big span4"><i class="fa fa-book" aria-hidden="true"></i><b>
                                        
                                          <?php  
                                    $sql = "SELECT COUNT(title) FROM publication";
                                    $result = $conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    echo $row['COUNT(title)'];
                                    
                                    ?>
                                        </b>
                                        <p class="text-muted">
                                            Publications</p>
                                    </a>
                                    
                                    
                                    
                                    <a href="userDashboard.php" class="btn-box big span4"><i class="fa fa-users" aria-hidden="true"></i><b>
                                    
                                    <?php  
                                    $sql = "SELECT COUNT(username) FROM users";
                                    $result = $conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    echo $row['COUNT(username)'];
                                    
                                    ?>
                                    </b>
                                        <p class="text-muted">
                                            New Users</p>
                                    </a>
                                    
                                    
                                    
                                    
                                    <a href="projDashboard.php" class="btn-box big span4"><i class="fa fa-money" aria-hidden="true"></i><b>
                                        
                                         <?php  
                                    $sql = "SELECT SUM(totalBudget) FROM projects";
                                    $result = $conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    echo $row['SUM(totalBudget)'] . " SAR";
                                    
                                    ?>
                                        
                                        </b>
                                        <p class="text-muted">
                                            Projects Budget</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="userDashboard.php" class="btn-box small span4"><i class="fa fa-users" aria-hidden="true"></i><b>Users</b>
                                                </a><a href="pubDashboard.php" class="btn-box small span4"><i class="fa fa-book" aria-hidden="true"></i><b>Publications</b>
                                                </a><a href="dashboard/conf.php" class="btn-box small span4"><i class="fa fa-commenting" aria-hidden="true"></i><b>Conferences</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="projDashboard.php" class="btn-box small span4"><i class="fa fa-tasks" aria-hidden="true"></i><b>Projects</b>
                                                </a><a href="newsDashboard.php" class="btn-box small span4"><i class="fa fa-newspaper-o" aria-hidden="true"></i><b>News</b>
                                                </a><a href="index.php" class="btn-box small span4"><i class="fa fa-home" aria-hidden="true"></i><b>Main Page</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Finished Projects</strong> <span class="pull-right small muted">
                                                
                                                
                                                
                                         <?php  
                                    $sql = "SELECT COUNT(name) FROM projects";
                                    $result = $conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    //echo $row['COUNT(name)'];
                                                
                                    $dateNow=date("Y-m-d");
                                    $sql1 = "SELECT COUNT(name) FROM projects WHERE endDate <=' $dateNow '";
                                    $result1 = $conn->query($sql1);
                                    $row1=$result1->fetch_assoc();
                                    //echo $row1['COUNT(name)'];
                                                
                                                $finishedProjects = ($row1['COUNT(name)']/$row['COUNT(name)'])*100 . "%";
                                                echo $finishedProjects;
                                    ?>
                                                
                                                
                                                </span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: <?php echo $finishedProjects ?>;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Passed Conferences</strong> <span class="pull-right small muted">
                                                
                                                
                                                 <?php  
                                    $sql = "SELECT COUNT(name) FROM conferences";
                                    $result = $conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    //echo $row['COUNT(name)'];
                                                
                                    $dateNow=date("Y-m-d");
                                    $sql1 = "SELECT COUNT(name) FROM conferences WHERE endDate <=' $dateNow '";
                                    $result1 = $conn->query($sql1);
                                    $row1=$result1->fetch_assoc();
                                    //echo $row1['COUNT(name)'];
                                                
                                                $finishedConfs = ($row1['COUNT(name)']/$row['COUNT(name)'])*100 . "%";
                                                echo $finishedConfs;
                                    ?>
                                                
                                                
                                                
                                                
                                                </span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width:<?php   echo $finishedConfs; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Today's new uers</strong> <span class="pull-right small muted">
                                                
                                                
                                                <?php  
                                    $sql = "SELECT COUNT(username) FROM users";
                                    $result = $conn->query($sql);
                                    $row=$result->fetch_assoc();
                                                
                                    $dateNow=date("Y-m-d");
                                    $sql1 = "SELECT COUNT(username) FROM users WHERE joinDate <=' $dateNow '";
                                    $result1 = $conn->query($sql1);
                                    $row1=$result1->fetch_assoc();
                                    //echo $row1['COUNT(username)'];
                                                
                                                if ($row['COUNT(username)'] != 0){
                                                $newUsers =(int) (($row1['COUNT(username)']/$row['COUNT(username)'])*100) . "%";
                                                echo $newUsers;
                                                } else $newUsers = 0;
                                    ?>
                                                
                                                
                                                </span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width:<?php   echo $newUsers; ?>" >
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                            
                        <!--/.content-->
                    </div>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        
