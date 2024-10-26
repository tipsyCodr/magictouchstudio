<?php require_once('couch/cms.php');
$category = $_GET['category'] ?? '';

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php require_once 'partials/head.php'; ?>

</head>

<body>
	<?php require_once 'partials/navbar.php'; ?>

	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Our <?php echo ucwords($category); ?> Products</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Products</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	<style>
		.flex {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
		}

		.img-cont img {
			width: 100%;

		}

		.img-cont {
			height: 490px;
			overflow: hidden;
			width: 333px;
			background-color: white;
			margin: 10px;
			border-radius: 30px;
			box-shadow: 6px 4px 5px 2px #efefef;
		}

		.desc {
			padding: 10px;
		}

		.thumb img {
			height: 300px;
		}

		.img-cont:hover {
			transform: scale(1.02);
			z-index: 60;
		}

		.footer>div.footer-top>div>div>div:nth-child(2)>div>ul>li:nth-child(4)>a:nth-child(1)a {
			display: none;
		}
	</style>
	<!-- Start Products section -->

	<section class=" section">
		<div id="lightgallery">
			<div class="container flex flex-wrap tw-justify-center tw-gap-5">
				<cms:pages masterpage='index.php' folder='<?php echo strtolower($category) ?>' paginate='1' limit='30'>
					<div class="item rounded tw-p-2 tw-shadow  tw-min-w-[300px] tw-bg-white tw-bg-opacity-70 tw-transition tw-duration-300 hover:-tw-translate-y-2 hover:tw-bg-opacity-100"
						onclick="location.href='<cms:show k_page_link />	'">
						<div class="p-img tw-p-2 tw-relative">
							<img class="tw-object-contain tw-w-full hover:tw-bg-opacity-40 tw-object-center"
								style='height: 200px;' src="<cms:show gg_image />" height="200" alt="">
							<div
								class="tw-absolute tw-inset-0 tw-flex tw-gap-5 tw-items-center tw-justify-center tw-opacity-0 hover:tw-opacity-100 tw-transition tw-duration-300">
								<div class="">
									<a href="#" class="tw-bg-white tw-rounded-full tw-p-2 tw-shadow ">
										<i style="" class="tw-text-xl icofont-eye"></i>
									</a>
								</div>
								<div class="">
									<a href="#" class="tw-bg-white tw-rounded-full tw-p-2 tw-shadow">
										<i class="tw-text-xl icofont-shopping-cart"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="text tw-text-center">
							<p class="tw-font-normal tw-text-black tw-text-md tw-text-center">
								<cms:show k_page_title />
							</p>

						</div>
					</div>
				</cms:pages>
			</div>
		</div>
	</section>

	<!--/ End Gallery Us -->
	<?php require_once 'partials/footer.php'; ?>
	<?php require_once 'partials/scripts.php'; ?>
	<!-- lightgallery plugin -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
		integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Counter Up CDN JS -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<!-- Google Map API Key JS -->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
	<!-- Gmaps JS -->
	<script src="js/gmaps.min.js"></script>
	<!-- Map Active JS -->
	<script src="js/map-active.js"></script>

	<script type="text/javascript">
		lightGallery(document.getElementById('lightgallery'), {
			plugins: [lgZoom, lgThumbnail],
			licenseKey: 'your_license_key',
			speed: 500,
			// ... other settings
		});
	</script>
</body>

</html>
<?php COUCH::invoke(); ?>