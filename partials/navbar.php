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
<header class="tw-fixed tw-top-0 tw-left-0 tw-w-full tw-z-50 tw-bg-black/60 tw-backdrop-blur-md tw-border-b tw-border-white/10 tw-transition-all tw-duration-300">
	<div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
		<div class="tw-flex tw-items-center tw-justify-between tw-h-20">
			<!-- Logo -->
			<div class="tw-flex-shrink-0">
				<a href="/index.php" class="tw-flex tw-items-center">
					<img src="/img/logo.png" alt="Magic Touch Studio" class="tw-h-12 tw-w-auto tw-object-contain">
				</a>
			</div>
			<!-- Desktop Menu -->
			<nav class="tw-hidden md:tw-flex tw-items-center tw-space-x-8">
				<a href="/index.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'index.php' || $name == '') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">HOME</a>
				<a href="/about.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'about.php') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">ABOUT US</a>
				<a href="/services.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'services.php') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">SERVICES</a>
				<a href="/gallery.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'gallery.php') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">GALLERY</a>
				<a href="/contact.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'contact.php') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">CONTACT US</a>
			</nav>
			<!-- Book / CTA Button -->
			<div class="tw-hidden md:tw-flex tw-items-center">
				<a href="/contact.php" class="tw-inline-flex tw-items-center tw-justify-center tw-px-5 tw-py-2.5 tw-text-xs tw-font-semibold tw-tracking-widest tw-uppercase tw-text-white tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-rounded-full hover:tw-opacity-90 tw-transition-all tw-shadow-lg tw-shadow-pink-500/20">Book Session</a>
			</div>
			<!-- Mobile hamburger placeholder -->
			<div class="md:tw-hidden mobile-nav"></div>
		</div>
	</div>
</header>

<?php require_once 'breadcrumbs.php'; ?>