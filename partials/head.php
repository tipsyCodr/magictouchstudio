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
<?php
function base_url($path = '')
{
	return "http://magictouchphotography.test/" . ltrim($path, '/');
}
?>
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