<!-- NAVBAR -->
<nav
	class="navbar navbar-default navbar-fixed-top navbar-no-background navbar-light-font ignore-paddingtop">
	<!-- TOP BAR -->
	<!--
			<div class="nav-topbar clearfix">
				<div class="container">
					<div class="left">
						<ul class="list-inline social-icons social-icons-small social-icons-fullrounded">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
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
							<li><a href="#">SUPPORT</a></li>
							<li><a href="#">HELP</a></li>
							<li><a href="#">SIGN IN</a></li>
							<li><a href="#" class="as-button"><span class="btn btn-primary">SIGN UP</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			-->
	<!-- END TOP BAR -->
	<div class="container">
		<button type="button" class="navbar-toggle collapsed"
			data-toggle="collapse" data-target="#main-nav-collapse">
			<span class="sr-only">Toggle Navigation</span> <i class="fa fa-bars"></i>
		</button>
		<a href="index.php" class="navbar-brand"> <img
			src="images/riotu-logo-w.png" alt="Bravana Logo">
		</a>
		<!--
		<div style="position: fixed; bottom: 200; left: 0; ">
<a href="index.php" class="navbar-brand"> <img
			src="images/riotu-logo-w.png" alt="Bravana Logo">
		</a>
		</div>
		-->
		<ul class="nav navbar-nav secondary-navbar-nav">

		</ul>
		<div id="main-nav-collapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav main-navbar-nav">
				<li><a href="about.php">ABOUT <i></i>
				</a></li>
				<li class="dropdown "><a href="research.php" class="dropdown-toggle"
					data-toggle="dropdown">RESEARCH</a></li>
				<li class="dropdown "><a href="people.php" class="dropdown-toggle"
					data-toggle="dropdown">PEOPLE</a></li>

				<li class="dropdown "><a href="facilities.php"
					class="dropdown-toggle" data-toggle="dropdown">FACILITIES</a></li>

				<li class="dropdown "><a href="publications.php"
					class="dropdown-toggle" data-toggle="dropdown">PUBLICATIONS</a></li>

				<li class="dropdown "><a href="events.php" class="dropdown-toggle"
					data-toggle="dropdown">EVENTS</a></li>

				<li class="dropdown "><a href="collaboration.php"
					class="dropdown-toggle" data-toggle="dropdown">COLLABORATION </a></li>
				<li class="dropdown "><a href="http://wiki.coins-lab.org"
					class="dropdown-toggle" data-toggle="dropdown">WIKI </a></li>

                 <?php if (isset($_SESSION["username"])) {
										echo '<li><a href="logout.php" class="dropdown-toggle" data-toggle="dropdown">Logout</a></li>';
									} else {
    								echo'<li><a href="login.php" class="dropdown-toggle" data-toggle="dropdown">Login</a></li>';
								}?>




			</ul>
		</div>


		<!-- END MAIN NAVIGATION -->
	</div>
</nav>
