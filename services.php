<?php require_once('couch/cms.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php require_once 'partials/head.php' ?>

</head>
<style>
    .service-card {
        transition: all 0.3s ease;
    }
</style>

<body class="tw-bg-black tw-text-white">
    <?php require_once 'partials/navbar.php' ?>
    <?php breadcrumbs('Our Services', 'Services') ?>

    <section class="tw-py-20 tw-bg-gradient-to-b tw-from-black tw-via-zinc-950 tw-to-black">
        <div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
            <div class="tw-text-center tw-mb-16">
                <span class="tw-text-pink-500 tw-text-sm tw-font-semibold tw-tracking-widest tw-uppercase">Photography & Videography</span>
                <h2 class="tw-text-3xl md:tw-text-5xl tw-font-bold tw-mt-2 tw-bg-clip-text tw-text-transparent tw-bg-gradient-to-r tw-from-white tw-to-gray-400">What We Specialize In</h2>
                <div class="tw-w-20 tw-h-1 tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-mx-auto tw-mt-4 tw-rounded-full"></div>
            </div>

            <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-8">
                <cms:pages masterpage='index.php'>
                    <div class="service-card tw-group tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-rounded-3xl tw-overflow-hidden tw-backdrop-blur-md hover:tw-border-pink-500/50 hover:-tw-translate-y-2 hover:tw-shadow-2xl hover:tw-shadow-pink-500/10 tw-flex tw-flex-col">
                        <div class="tw-w-full tw-relative">
                            <div class="owl-carousel service-slider">
                                <cms:show_repeatable 'images'>
                                    <div class="single-slider">
                                        <img src="<cms:show gg_image />" alt="<cms:show k_page_title />">
                                    </div>
                                </cms:show_repeatable>
                            </div>
                            <div class="tw-absolute tw-inset-x-0 tw-bottom-0 tw-h-12 tw-bg-gradient-to-t tw-from-zinc-950 tw-to-transparent tw-pointer-events-none tw-z-10"></div>
                        </div>
                        <div class="tw-p-8 tw-flex tw-flex-col tw-flex-1 tw-justify-between tw-gap-4">
                            <div>
                                <h3 class="tw-text-2xl tw-font-bold tw-text-white group-hover:tw-text-pink-400 tw-transition-colors">
                                    <cms:show k_page_title />
                                </h3>
                                <div class="tw-text-gray-400 tw-text-sm tw-leading-relaxed tw-mt-2">
                                    <cms:show description />
                                </div>
                            </div>
                            <div class="tw-pt-4 tw-border-t tw-border-white/5 tw-flex tw-items-center tw-justify-between">
                                <a href="/contact.php" class="tw-inline-flex tw-items-center tw-gap-2 tw-text-xs tw-font-semibold tw-tracking-widest tw-uppercase tw-text-pink-400 hover:tw-text-pink-300">
                                    Book This Service <i class="fa fa-arrow-right tw-text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </cms:pages>
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
