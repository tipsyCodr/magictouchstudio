<?php require_once('couch/cms.php'); ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php require_once 'partials/head.php' ?>

</head>

<body class="tw-bg-black tw-text-white">
	<?php require_once 'partials/navbar.php' ?>
	<?php breadcrumbs('Contact Us', 'Contact') ?>

	<!-- Start Contact Us -->
	<section class="tw-py-20 tw-bg-gradient-to-b tw-from-black tw-via-zinc-950 tw-to-black">
		<div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
			<div class="tw-grid tw-grid-cols-1 lg:tw-grid-cols-2 tw-gap-12 tw-mb-20">
				<!-- Map -->
				<div class="tw-rounded-3xl tw-overflow-hidden tw-border tw-border-white/10 tw-h-[420px] lg:tw-h-full tw-shadow-2xl">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.687579934642!2d81.60625737926729!3d21.24423393007581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dde70df853c3%3A0xa6c26dca36388e0b!2sNational%20Corporate%20Park%2C%20Geeta%20Nagar%2C%20Choubey%20Colony%2C%20Ramkund%2C%20Raipur%2C%20Chhattisgarh%20492001!5e0!3m2!1sen!2sin!4v1728316046461!5m2!1sen!2sin"
						style="border:0;width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

				<!-- Form -->
				<div class="tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-rounded-3xl tw-p-8 sm:tw-p-10 tw-backdrop-blur-md tw-shadow-2xl">
					<span class="tw-text-pink-500 tw-text-xs tw-font-semibold tw-tracking-widest tw-uppercase">Say Hello</span>
					<h2 class="tw-text-2xl sm:tw-text-3xl tw-font-bold tw-text-white tw-mt-1 tw-mb-6">Send Us A Message</h2>

					<cms:form class="tw-space-y-4" method="post" action="#">
						<cms:if k_success>
							<div class="tw-p-4 tw-rounded-xl tw-bg-emerald-500/20 tw-border tw-border-emerald-500/30 tw-text-emerald-300 tw-text-sm">
								Form successfully submitted! We will be in touch soon.
							</div>
							<cms:each k_success sep='\n'>
								<cms:send_mail from='itshemants566@gmail.com' to='vshlkumar566@gmail.com'
									subject='Feedback from Magic Touch Studio'>
									The following is an email sent by a visitor to your site:
									<cms:show k_success />
								</cms:send_mail>
							</cms:each>
						</cms:if>

						<cms:if k_error>
							<div class="tw-p-4 tw-rounded-xl tw-bg-rose-500/20 tw-border tw-border-rose-500/30 tw-text-rose-300 tw-text-sm">
								Failed to submit form. Please check your entries.
							</div>
						</cms:if>

						<div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 tw-gap-4">
							<div>
								<label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-1.5">NAME</label>
								<cms:input class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors" type="text" name="name" placeholder="John Doe" required='1' />
							</div>
							<div>
								<label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-1.5">EMAIL</label>
								<cms:input class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors" type="text" name="email" placeholder="john@example.com" required='1' validator='email' />
							</div>
						</div>

						<div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 tw-gap-4">
							<div>
								<label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-1.5">PHONE</label>
								<cms:input class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors" type="text" name="phone" placeholder="+91 9876543210" required='1' />
							</div>
							<div>
								<label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-1.5">SUBJECT</label>
								<cms:input class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors" type="text" name="subject" placeholder="Shoot inquiry" required='1' />
							</div>
						</div>

						<div>
							<label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-1.5">MESSAGE</label>
							<cms:input class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors" type="textarea" name="message" rows="4" placeholder="How can we assist you?" required='1' />
						</div>

						<div class="tw-pt-2">
							<cms:input type="submit" value="Send Message" class="tw-w-full sm:tw-w-auto tw-px-8 tw-py-3.5 tw-rounded-full tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-text-white tw-font-semibold hover:tw-opacity-90 tw-transition-all tw-cursor-pointer tw-shadow-lg tw-shadow-pink-500/25" name="submit" />
						</div>
					</cms:form>
				</div>
			</div>

			<!-- Contact Cards -->
			<div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-3 tw-gap-8">
				<div class="tw-p-8 tw-rounded-2xl tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-backdrop-blur-sm hover:tw-border-pink-500/40 tw-transition-all">
					<div class="tw-w-12 tw-h-12 tw-rounded-xl tw-bg-pink-500/20 tw-text-pink-400 tw-flex tw-items-center tw-justify-center tw-mb-6 tw-text-xl">
						<i class="fa-solid fa-phone"></i>
					</div>
					<h3 class="tw-text-lg tw-font-bold tw-text-white tw-mb-2">Phone & Mobile</h3>
					<p class="tw-text-gray-400 tw-text-sm">+91 6260116170</p>
					<p class="tw-text-gray-400 tw-text-sm">0771-4053284</p>
				</div>

				<div class="tw-p-8 tw-rounded-2xl tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-backdrop-blur-sm hover:tw-border-pink-500/40 tw-transition-all">
					<div class="tw-w-12 tw-h-12 tw-rounded-xl tw-bg-purple-500/20 tw-text-purple-400 tw-flex tw-items-center tw-justify-center tw-mb-6 tw-text-xl">
						<i class="fa-solid fa-location-dot"></i>
					</div>
					<h3 class="tw-text-lg tw-font-bold tw-text-white tw-mb-2">Studio Location</h3>
					<p class="tw-text-gray-400 tw-text-sm">Kenz Tower, 2nd Floor, Above Ten 11 Restaurant, Junwani Road, Kohka, Bhilai (C.G.)</p>
				</div>

				<div class="tw-p-8 tw-rounded-2xl tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-backdrop-blur-sm hover:tw-border-pink-500/40 tw-transition-all">
					<div class="tw-w-12 tw-h-12 tw-rounded-xl tw-bg-indigo-500/20 tw-text-indigo-400 tw-flex tw-items-center tw-justify-center tw-mb-6 tw-text-xl">
						<i class="fa-solid fa-envelope"></i>
					</div>
					<h3 class="tw-text-lg tw-font-bold tw-text-white tw-mb-2">Email Address</h3>
					<p class="tw-text-gray-400 tw-text-sm">magictouch2219@gmail.com</p>
					<p class="tw-text-pink-400 tw-text-sm tw-mt-1">Inquiries answered within 24 hours</p>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Contact Us -->

	<?php require_once 'partials/footer.php'; ?>
	<?php require_once 'partials/scripts.php'; ?>
</body>

</html>
<?php COUCH::invoke(); ?>