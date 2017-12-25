<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top ">
			<!-- TOP BAR -->
			<div class="nav-topbar clearfix ">
				<div class="container">
					<div class="left">
						<ul class="list-inline social-icons social-icons-small social-icons-fullrounded">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<div class="right">
						<form class="navbar-form navbar-left search-form" method="post" role="search">
							<div class="input-group input-group-sm">
								<input type="text" class="form-control">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="http://edu.gaitech.hk">Gaitech EDU</a></li>
              <?php if (isset($_SESSION["username"])) {
										if ($_SESSION['role'] == 'admin') {
											echo '<li><a href="AdminDashboard.php" class="as-button"><span class="btn btn-primary">Dashboard <i class="fa fa-cog" aria-hidden="true"></i></span></a></li>';
										} else {
											echo '<li><a href="dashboard.php" class="as-button"><span class="btn btn-primary">Dashboard <i class="fa fa-cog" aria-hidden="true"></i></span></a></li>';
										}

										echo '<li><a href="logout.php" class="as-button"><span class="btn btn-primary">Logout</span></a></li>';
									} else {
    								echo'<li><a href="login.php" class="as-button"><span class="btn btn-primary">Login</span></a></li>';
								}?>

						</ul>
					</div>
				</div>
			</div>
			<!-- END TOP BAR -->
			<div class="container">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#main-nav-collapse">
					<span class="sr-only">Toggle Navigation</span> <i
						class="fa fa-bars"></i>
				</button>


				<div id="main-nav-collapse" class="collapse navbar-collapse">
					<ul class="nav navbar-nav main-navbar-nav">
						<li><a href="index.php" ><span style="font-style: bold;">HOME</span></a></li>

						<li><a href="about.php">ABOUT <i></i></a></li>

						<li class="dropdown "><a href="research.php" class="dropdown-toggle" data-toggle="dropdown">RESEARCH</a>
							</li>
						<li class="dropdown "><a href="people.php" class="dropdown-toggle"
							data-toggle="dropdown">PEOPLE</a>
						</li>

						<li class="dropdown "><a href="facilities.php" class="dropdown-toggle"
							data-toggle="dropdown">FACILITIES</a>
							</li>

						<li class="dropdown "><a href="publications.php" class="dropdown-toggle"
							data-toggle="dropdown">PUBLICATIONS</a>
						</li>

						<li class="dropdown "><a href="events.php" class="dropdown-toggle"
							data-toggle="dropdown">EVENTS</a></li>

						<li class="dropdown "><a href="collaboration.php" class="dropdown-toggle"
							data-toggle="dropdown">COLLABORATION </a></li>
							<li class="dropdown "><a href="http://wiki.coins-lab.org"
					class="dropdown-toggle" data-toggle="dropdown">WIKI </a></li>
					<!--
					PSU LOGO

					<li><a href="index.php" class="navbar-brand"> <img
					src="images/psu-logo-square.png" width = "50%" style ="display:block; float: left;"  alt="PSU Logo">
				</a></li> -->


					</ul>
				</div>
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>
		<!-- END NAVBAR -->
