<?php $url = $_SERVER['REQUEST_URI'];
$name = basename($url); ?>
<style>
	/* Remove extra dropdown arrows */
	.slicknav_menu .slicknav_nav .dropdown-toggle::before {
		display: none;
	}

	.slicknav_menu .slicknav_nav .dropdown-toggle::after {
		content: "\f078";
		/* FontAwesome down arrow */
		font-family: FontAwesome;
		font-size: 12px;
		/* margin-left: 10px; */
		color: #000;
	}

	/* Align dropdown items properly */
	.slicknav_menu .slicknav_nav ul li {
		/* padding: 10px 15px; */
		/* border-bottom: 1px solid #ddd; */
	}

	.slicknav_menu .slicknav_nav ul li:last-child {
		border-bottom: none;
	}

	/* Adjust font size and spacing for better readability */
	.slicknav_menu .slicknav_nav a {
		font-size: 16px;
		color: #000;
	}

	/* Add custom padding and margins */
	.slicknav_menu .slicknav_nav ul li a {
		padding: 10px 20px;
		display: block;
		/* margin-left: 40px; */
		border: 1px solid #e4e4e4;
	}

	/* Custom border-radius for dropdown */
	.slicknav_menu .slicknav_nav ul li:first-child a {
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
	}

	.slicknav_menu .slicknav_nav ul li:last-child a {
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
	}

	/* Remove arrow for submenus */
	.dropdown-toggle::after {
		display: none;
	}

	/* Custom menu layout adjustments */
	.slicknav_nav li,
	.slicknav_nav ul {
		display: contents;
		margin-left: 20px;
	}

	/* Hide dropdown by default */
	.dropdown-menu {
		display: none;
	}

	.dropdown:hover .dropdown-menu li {
		display: block;
		width: 100%;
	}



	.header .nav li {
		margin: auto;
	}

	.header .topbar {
		padding: 5px 0;
	}

	/* Show dropdown on hover on mobile */
	@media (min-width: 767px) {
		.dropdown:hover .dropdown-menu li:hover {
			background-color: #0a3b3f;
			color: white;
		}

		.dropdown:hover .dropdown-menu {
			display: flex;
			justify-content: center;
			align-items: center;
			position: absolute;
			top: 80%;
			left: 0;
			width: 100%;
			flex-direction: column;
		}
	}
</style>

<?php
$url = $_SERVER['REQUEST_URI'];
$name = basename($url);
?>

<!-- Header Area -->
<nav class="header " style="z-index: 12;">
	<!-- Header Inner -->
	<div class="header-inner">
		<div class="container">
			<div class="inner">
				<div class="row">
					<!-- Logo Section -->
					<div class="col-lg-3 col-md-3 col-12">
						<div class="logo">
							<a href="/index.php"><img src="/img/logo.png" alt="Bioalexis Trading Pvt. Ltd."
									style="width:125px"></a>
						</div>
						<div class="mobile-nav"></div>
					</div>
					<!-- Main Menu Section -->
					<div class="col-lg-7 col-md-9 col-12">
						<div class="main-menu">
							<nav class="navigation">
								<ul class="nav menu ">
									<li class="<?php echo ($name == "index.php") ? "active" : ""; ?>">
										<a href="/index.php"> HOME</a>
									</li>
									<!--									<li class="dropdown ">-->
									<!--										<a href="#" class="dropdown-toggle">About</a>-->
									<!--										<ul class="dropdown-menu">-->
									<!--											<li><a href="/about.php">About</a></li>-->
									<!--											<li><a href="/achievers.php">Achievers</a></li>-->
									<!--											<li><a href="/awards.php">Awards</a></li>-->
									<!--											<li><a href="/director_msg.php">Director's Message</a></li>-->
									<!--											<li><a href="/testimonials.php">Testimonials</a></li>-->
									<!--										</ul>-->
									<!--									</li>-->

									<li class=" <?php echo ($name == "about.php") ? "active" : ""; ?>">
										<a class="tw-uppercase" href="/about.php"> ABOUT US </a>
									</li>

									<li class="<?php echo ($name == "products.php") ? 'active' : ''; ?>">
										<a href="/services.php">SERVICES</a>
									</li>
									<li class="<?php echo ($name == "gallery.php") ? 'active' : ''; ?>">
										<a href="/gallery.php">GALLERY</a>
									</li>

									<li class="<?php echo ($name == 'contact.php') ? 'active' : ''; ?>">
										<a href="/contact.php">CONTACT US</a>
									</li>
									<!--									<li class="d-lg-none --><?php //echo ($name == 'login.php') ? 'active' : ''; ?><!--">-->
									<!--										<a href="http://login.bioalexis.com/">Login/Register</a>-->
									<!--									</li>-->
								</ul>
							</nav>
						</div>
					</div>

					<!-- Login/Register Button -->
					<!--					<div class="col-lg-2 col-12">-->
					<!--						<div class="get-quote">-->
					<!--							<a href="http://login.bioalexis.com/" class="btn">Login/Register</a>-->
					<!--						</div>-->
					<!--					</div>-->
				</div>
			</div>
		</div>
	</div>
</nav>
<!-- End Header Area -->

<?php require_once 'breadcrumbs.php'; ?>