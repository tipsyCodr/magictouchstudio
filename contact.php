<?php require_once('couch/cms.php'); ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php require_once 'partials/head.php' ?>

</head>

<body>
	<?php require_once 'partials/navbar.php' ?>

	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Contact Us</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact Us -->
	<section class="contact-us section">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-6">
						<div class="contact-us-left">
							<!--Start Google-map -->
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.687579934642!2d81.60625737926729!3d21.24423393007581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dde70df853c3%3A0xa6c26dca36388e0b!2sNational%20Corporate%20Park%2C%20Geeta%20Nagar%2C%20Choubey%20Colony%2C%20Ramkund%2C%20Raipur%2C%20Chhattisgarh%20492001!5e0!3m2!1sen!2sin!4v1728316046461!5m2!1sen!2sin"
								style="border:0;width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
							<!-- <div id="myMap"></div> -->
							<!--/End Google-map -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact-us-form">
							<h2>Contact With Us</h2>
							<p>If you have any questions please fell free to contact with us.</p>
							<!-- Form -->
							<cms:form class="form" method="post" action="#">
								<cms:if k_success>
									<h3>Form successfully submitted</h3>
									<cms:each k_success sep='\n'>
										<cms:send_mail from='itshemants566@gmail.com' to='vshlkumar566@gmail.com'
											subject='Feedback from your site'>
											The following is an email sent by a visitor to your site:
											<cms:show k_success />
										</cms:send_mail>
										<cms:show item /><br>
									</cms:each>
								</cms:if>

								<cms:if k_error>
									<h3>Failed to submit form</h3>
									<cms:each k_error>
										<cms:show item /><br>
									</cms:each>
								</cms:if>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<cms:input type="text" name="name" placeholder="Name" required />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<cms:input type="text" name="email" placeholder="Email" required />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<cms:input type="text" name="phone" placeholder="Phone" required />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<cms:input type="text" name="subject" placeholder="Subject" required />
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<cms:input type="textarea" name="message" placeholder="Your Message"
												required />
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<!-- <button class="btn" type="submit">Send</button> -->
											<cms:input type="submit" value="submit" class="btn" name="submit" />
										</div>
										<div class="checkbox">
											<!-- <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label> -->
										</div>
									</div>
								</div>
							</cms:form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
			<div class="contact-info">
				<div class="row">
					<!-- single-info -->
					<div class="col-lg-4 col-12">
						<div class="single-info">
							<i class="icofont icofont-ui-call"></i>
							<div class="content">
								<h3 style="padding:0px">+(91) 8827268754</h3>
								<h3 style="padding-top:5px padding-left:5px">0771-4053284</h3>
								<p style="padding:0px">info@bioalexis.com</p>
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12">
						<div class="single-info">
							<i class="icofont-google-map"></i>
							<div class="content">
								<h3> Raipur 492001</h3>
								<p style="padding:0;"> Office no 201, (Second floor), National Corporate Park,GE Road ,
									Raipur 492001</p>
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12">
						<div class="single-info">
							<i class="icofont icofont-wall-clock"></i>
							<div class="content">
								<h3 style="padding:0px">Mon - Sat: 10:30am - 7pm</h3>
								<p style="padding:0px">Sunday Closed</p>
							</div>
						</div>
					</div>
					<!--/End single-info -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Contact Us -->
	<?php require_once 'partials/footer.php'; ?>
	<?php require_once 'partials/scripts.php'; ?>
	<!-- Google Map API Key JS -->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
	<!-- Gmaps JS -->
	<script src="js/gmaps.min.js"></script>
	<!-- Map Active JS -->
	<script src="js/map-active.js"></script>
</body>

</html>
<?php COUCH::invoke(); ?>