<?php $url = $_SERVER['REQUEST_URI'];
$name = basename($url); ?>
<style>
	/* Mobile hamburger button — always visible on mobile, hidden on desktop */
	#mobile-nav-toggle-wrap {
		display: none;
	}
	#mobile-menu-btn {
		background: rgba(255,255,255,0.08);
		border: 1px solid rgba(255,255,255,0.25);
		border-radius: 10px;
		padding: 8px 10px;
		cursor: pointer;
		line-height: 0;
	}
	@media (max-width: 767px) {
		#mobile-nav-toggle-wrap {
			display: flex !important;
			align-items: center;
		}
	}

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
			<nav class="desktop-nav-menu tw-hidden md:tw-flex tw-items-center tw-space-x-8">
				<a href="/index.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'index.php' || $name == '') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">HOME</a>
				<a href="/about.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'about.php') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">ABOUT US</a>
				<a href="/services.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'services.php') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">SERVICES</a>
				<a href="/gallery.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'gallery.php') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">GALLERY</a>
				<a href="/contact.php" class="tw-text-sm tw-font-semibold tw-tracking-wider tw-transition-colors <?php echo ($name == 'contact.php') ? 'tw-text-pink-500' : 'tw-text-gray-200 hover:tw-text-white'; ?>">CONTACT US</a>
			</nav>
			<!-- Book / CTA Button -->
			<div class="desktop-cta-btn tw-hidden md:tw-flex tw-items-center">
				<a href="/contact.php" class="tw-inline-flex tw-items-center tw-justify-center tw-px-5 tw-py-2.5 tw-text-xs tw-font-semibold tw-tracking-widest tw-uppercase tw-text-white tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-rounded-full hover:tw-opacity-90 tw-transition-all tw-shadow-lg tw-shadow-pink-500/20">Book Session</a>
			</div>
			<!-- Mobile menu toggle button -->
			<div id="mobile-nav-toggle-wrap">
				<button id="mobile-menu-btn" type="button" aria-label="Toggle Navigation">
					<svg xmlns="http://www.w3.org/2000/svg" id="mobile-menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
				</button>
			</div>
		</div>
	</div>

	<!-- Mobile Dropdown Menu -->
	<div id="mobile-menu" style="display: none;" class="md:tw-hidden tw-bg-zinc-950/98 tw-backdrop-blur-2xl tw-border-b tw-border-white/10 tw-px-6 tw-py-6 tw-space-y-4">
		<a href="/index.php" class="tw-block tw-text-base tw-font-semibold tw-tracking-wider tw-py-2 tw-border-b tw-border-white/5 <?php echo ($name == 'index.php' || $name == '') ? 'tw-text-pink-500' : 'tw-text-gray-200'; ?>">HOME</a>
		<a href="/about.php" class="tw-block tw-text-base tw-font-semibold tw-tracking-wider tw-py-2 tw-border-b tw-border-white/5 <?php echo ($name == 'about.php') ? 'tw-text-pink-500' : 'tw-text-gray-200'; ?>">ABOUT US</a>
		<a href="/services.php" class="tw-block tw-text-base tw-font-semibold tw-tracking-wider tw-py-2 tw-border-b tw-border-white/5 <?php echo ($name == 'services.php') ? 'tw-text-pink-500' : 'tw-text-gray-200'; ?>">SERVICES</a>
		<a href="/gallery.php" class="tw-block tw-text-base tw-font-semibold tw-tracking-wider tw-py-2 tw-border-b tw-border-white/5 <?php echo ($name == 'gallery.php') ? 'tw-text-pink-500' : 'tw-text-gray-200'; ?>">GALLERY</a>
		<a href="/contact.php" class="tw-block tw-text-base tw-font-semibold tw-tracking-wider tw-py-2 tw-border-b tw-border-white/5 <?php echo ($name == 'contact.php') ? 'tw-text-pink-500' : 'tw-text-gray-200'; ?>">CONTACT US</a>
		<div class="tw-pt-2">
			<a href="/contact.php" class="tw-flex tw-items-center tw-justify-center tw-w-full tw-py-3 tw-text-xs tw-font-semibold tw-tracking-widest tw-uppercase tw-text-white tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-rounded-xl tw-shadow-lg tw-shadow-pink-500/25">Book Session</a>
		</div>
	</div>
</header>

<script>
var BARS_SVG = '<line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>';
var CLOSE_SVG = '<line x1="4" y1="4" x2="20" y2="20"/><line x1="20" y1="4" x2="4" y2="20"/>';

function initMobileMenu() {
	var wrap = document.getElementById('mobile-nav-toggle-wrap');
	var btn = document.getElementById('mobile-menu-btn');
	var menu = document.getElementById('mobile-menu');
	var icon = document.getElementById('mobile-menu-icon');

	// Force button visibility on mobile via inline style (beats any CSS/JS)
	if (wrap && window.innerWidth < 768) {
		wrap.style.setProperty('display', 'flex', 'important');
		wrap.style.alignItems = 'center';
	}

	if (btn && menu && !btn._menuBound) {
		btn._menuBound = true;
		btn.addEventListener('click', function(e) {
			e.stopPropagation();
			var isClosed = (menu.style.display === 'none' || menu.style.display === '');
			if (isClosed) {
				menu.style.display = 'block';
				if (icon) icon.innerHTML = CLOSE_SVG;
			} else {
				menu.style.display = 'none';
				if (icon) icon.innerHTML = BARS_SVG;
			}
		});
	}
}

// Run after DOM ready
document.addEventListener('DOMContentLoaded', initMobileMenu);

// Run after full load (catches plugins that run on window.load)
window.addEventListener('load', function() {
	initMobileMenu();
	// Keep enforcing for 3 seconds after load to beat any late JS
	var count = 0;
	var enforcer = setInterval(function() {
		var wrap = document.getElementById('mobile-nav-toggle-wrap');
		if (wrap && window.innerWidth < 768) {
			wrap.style.setProperty('display', 'flex', 'important');
		}
		count++;
		if (count >= 6) clearInterval(enforcer); // stop after 3s
	}, 500);

	// MutationObserver: if anything hides the wrapper, restore it immediately
	var wrap = document.getElementById('mobile-nav-toggle-wrap');
	if (wrap && window.MutationObserver) {
		var observer = new MutationObserver(function(mutations) {
			if (window.innerWidth < 768) {
				wrap.style.setProperty('display', 'flex', 'important');
			}
		});
		observer.observe(wrap, { attributes: true, attributeFilter: ['style'] });
	}
});
</script>

<?php require_once 'breadcrumbs.php'; ?>