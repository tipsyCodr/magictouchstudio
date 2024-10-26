<?php require_once('couch/cms.php'); ?>
<cms:template title='Blog' clonable="1" commentable='1'>
	<!-- <cms:editable name="blog_title" type="text" /> -->
	<cms:editable name="blog_image" crop="1" width="670" height="448" type="image" />
	<cms:editable name="blog_content" type="richtext" />
</cms:template>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/my-style.css" />

	<?php require_once 'partials/head.php' ?>
</head>

<body>
	<?php require_once 'partials/navbar.php' ?>

	<cms:if k_is_page>
		<!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
										<img src="<cms:show blog_image />" alt="#">

									</div>
									<!-- News Title -->
									<h1 class="news-title"> <a href="<cms:show k_page_link/>">
											<cms:show k_page_title />
										</a></h1>
									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											<span class="author"><a href="#"><img src="img/author1.jpg"
														alt="#">Admin</a></span>
										</div>
										<div class="meta-right">
											<span class="date"><i class="fa fa-clock-o"></i>
												<cms:date k_page_date format='jS M, y' />
											</span>
											<span class="comments"><a href="#"><i class="fa fa-comments"></i>
													<cms:show k_comment_count /> Comments
												</a></span>
											<!-- <span class="views"><i class="fa fa-eye"></i>33K Views</span> -->
										</div>
									</div>
									<!-- News Text -->
									<div class="news-text">
										<cms:show blog_content />
									</div>
									<div class="blog-bottom">
										<!-- Social Share -->
										<ul class="social-share">
											<li class="facebook"><a href="#"><i
														class="fa fa-facebook"></i><span>Facebook</span></a></li>
											<li class="twitter"><a href="#"><i
														class="fa fa-twitter"></i><span>Twitter</span></a></li>
											<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
											</li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
										<!-- Next Prev -->
										<ul class="prev-next">
											<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a>
											</li>
											<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a>
											</li>
										</ul>
										<!--/ End Next Prev -->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="blog-comments">
									<h2>No Comments Yet</h2>
									<div class="comments-body">
										<!-- Single Comments -->
										<!-- <div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="img/author1.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Afsana Mimi</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		 -->
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<!-- <div class="single-comments left">
											<div class="main">
												<div class="head">
													<img src="img/author2.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Naimur Rahman</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		 -->
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<!-- <div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="img/author3.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Suriya Molharta</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		 -->
										<!--/ End Single Comments -->
									</div>
								</div>
							</div>


						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								<cms:pages>
									<div class="single-post">
										<div class="image">
											<img src="<cms:show blog_image />" alt="#">
										</div>
										<div class="content">
											<h5><a href="<cms:show k_page_link />">
													<cms:show k_page_title />
												</a></h5>
											<ul class="comment">
												<li><i class="fa fa-calendar" aria-hidden="true"></i>
													<cms:date k_page_date format='jS M, y' />
												</li>
												<li><i class="fa fa-commenting-o" aria-hidden="true"></i>
													<cms:show k_comment_count />
												</li>
											</ul>
										</div>
									</div>
								</cms:pages>
								<!-- End Single Post -->
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->


		<script src="js/main.js"></script>
		<cms:else />
		<cms:embed 'blogs.php' />

	</cms:if>
	<?php require_once 'partials/scripts.php'; ?>
	<?php require_once 'partials/footer.php'; ?>
</body>

</html>
<?php COUCH::invoke(); ?>