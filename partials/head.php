<!-- Meta Tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Farming, Agriculture">
<meta name="description" content="">
<meta name='copyright' content=''>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title -->
<title>Magic Touch Photography | Where Every Shot Tells a Story</title>

<!-- Favicon -->
<link rel="icon" href="/img/favicon.png">
<?php require_once 'partials/php_functions.php'; ?>
<!-- Google Fonts -->
<link
	href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
	rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="<?= base_url('css/nice-select.css') ?>">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css') ?>">
<!-- icofont CSS -->
<link rel="stylesheet" href="<?= base_url('css/icofont.css') ?>">
<!-- CDN <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/icofont@1.0.1-alpha.1/icofont.min.css"> -->

<!-- fa icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
	integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Slicknav -->
<link rel="stylesheet" href="<?= base_url('css/slicknav.min.css') ?>">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="<?= base_url('css/owl-carousel.css') ?>">
<!-- Datepicker CSS -->
<link rel="stylesheet" href="<?= base_url('css/datepicker.css') ?>">
<!-- Animate CSS -->
<link rel="stylesheet" href="<?= base_url('css/animate.min.css') ?>">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>">

<!-- Medipro CSS -->
<link rel="stylesheet" href="<?= base_url('css/normalize.css') ?>">
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>">
<link rel="stylesheet" href="/src/output.css">

<style>
/* Fix service card image slider visibility and overwrite template ::before overlay */
.service-slider {
    width: 100% !important;
    height: 270px !important;
    position: relative !important;
    overflow: hidden !important;
    display: block !important;
}

.service-slider .owl-stage-outer,
.service-slider .owl-stage,
.service-slider .owl-item,
.service-slider .single-slider {
    height: 100% !important;
    position: relative !important;
}

.service-slider .single-slider::before {
    display: none !important;
    content: none !important;
}

.service-slider .single-slider img {
    width: 100% !important;
    height: 270px !important;
    object-fit: cover !important;
    display: block !important;
    position: relative !important;
    z-index: 1 !important;
}

.service-slider .owl-nav {
    position: absolute !important;
    bottom: 12px !important;
    right: 12px !important;
    display: flex !important;
    gap: 6px !important;
    z-index: 30 !important;
    margin: 0 !important;
    top: auto !important;
    width: auto !important;
}

.service-slider .owl-nav div {
    width: 32px !important;
    height: 32px !important;
    line-height: 32px !important;
    text-align: center !important;
    border-radius: 9999px !important;
    background: rgba(0, 0, 0, 0.75) !important;
    backdrop-filter: blur(4px) !important;
    color: #fff !important;
    font-size: 14px !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    cursor: pointer !important;
    transition: all 0.2s ease !important;
    position: static !important;
}

.service-slider .owl-nav div:hover {
    background: #ec4899 !important;
    border-color: #ec4899 !important;
}

/* Lightbox2 Modern Styling */
.lb-outerContainer {
    border-radius: 16px !important;
    background-color: #121214 !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.75), 0 0 0 1px rgba(255, 255, 255, 0.1) !important;
}
.lb-container { padding: 8px !important; }
.lb-image { border-radius: 12px !important; border: none !important; }
.lightboxOverlay {
    background-color: rgba(0, 0, 0, 0.88) !important;
    backdrop-filter: blur(8px) !important;
    -webkit-backdrop-filter: blur(8px) !important;
}
.lb-dataContainer { padding-top: 12px !important; }
.lb-data .lb-details {
    color: #cbd5e1 !important;
    font-family: inherit !important;
    font-size: 13px !important;
    font-weight: 500 !important;
}
.lb-data .lb-number { color: #94a3b8 !important; font-size: 12px !important; }
.lb-data .lb-close { filter: invert(1) !important; opacity: 0.8 !important; }
.brands-slider .owl-nav { display: none !important; }
.testimonial-card, .testimonial-card p, .testimonial-card span, .testimonial-card div {
    color: #ffffff !important;
}

/* Mobile Navbar Toggle Button & Menu Fix */
@media (max-width: 767px) {
    #mobile-menu-btn {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 44px !important;
        height: 44px !important;
        border-radius: 12px !important;
        background: rgba(255, 255, 255, 0.08) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        color: #ffffff !important;
        cursor: pointer !important;
        z-index: 100 !important;
    }
    #mobile-menu-btn i {
        font-size: 20px !important;
        color: #ffffff !important;
        display: block !important;
    }
    .desktop-nav-menu, .desktop-cta-btn {
        display: none !important;
    }
}
@media (min-width: 768px) {
    #mobile-menu-btn, #mobile-menu {
        display: none !important;
    }
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css"
	integrity="sha512-xtV3HfYNbQXS/1R1jP53KbFcU9WXiSA1RFKzl5hRlJgdOJm4OxHCWYpskm6lN0xp0XtKGpAfVShpbvlFH3MDAA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Lightbox CSS from node_modules -->
<link rel="stylesheet" href="<?= base_url('node_modules/lightbox2/dist/css/lightbox.min.css') ?>">

<!-- Lightbox JS from node_modules -->
<?php
function converToEmbed($url)
{
	// The original YouTube link
	$youtube_url = $url;
	// $youtube_url = "https://youtu.be/_VkkH1j3nTQ?si=Z3HFAantgCK8UKdg";

	// Initialize the video ID variable
	$video_id = '';

	// Check if the URL contains 'youtu.be' or 'youtube.com'
	if (strpos($youtube_url, 'youtu.be') !== false) {
		// Handle the shortened URL format
		$parsed_url = parse_url($youtube_url);
		// Extract the video ID from the path (removes the leading "/")
		$video_id = ltrim($parsed_url['path'], '/');
	} elseif (strpos($youtube_url, 'youtube.com') !== false) {
		// Handle the full URL format
		$parsed_url = parse_url($youtube_url);

		// Check if the query key exists
		if (isset($parsed_url['query'])) {
			// Parse the query string to get the video ID
			parse_str($parsed_url['query'], $query_params);

			// Check if 'v' key exists in the query parameters
			if (isset($query_params['v'])) {
				$video_id = $query_params['v'];
			}
		}
	}

	// Generate the embed URL only if we have a valid video ID
	$embed_url = !empty($video_id) ? "https://www.youtube.com/embed/" . $video_id : '';


	// echo "The embed URL is: " . $embed_url . "<br>";
	return $embed_url;
}
?>
<script>
	// javascript version of above function
	function convertToEmbedLink(url) {
		// Check if the URL is in youtu.be format
		if (url.includes("youtu.be/")) {
			id = url.split("youtu.be/")[1].split("?")[0]; // Get the video ID
		}
		// Check if the URL is in youtube.com format
		else if (url.includes("youtube.com/watch?v=")) {
			id = url.split("v=")[1].split("&")[0]; // Get the video ID
		}
		// Check if the URL is in a different format (optional)
		else {
			console.error("Invalid YouTube URL:", url);
		}

		// Only write the iframe if the ID is valid
		if (id) {
			document.write(
				'<iframe width="100%" height="200" src="https://www.youtube.com/embed/' +
				id +
				'" frameborder="0" allowfullscreen></iframe>'
			);
		}
	}
</script>