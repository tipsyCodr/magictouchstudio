<?php require_once('couch/cms.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php require_once 'partials/head.php' ?>

</head>
<style>
    .section h2,
    .section h3 {
        color: #0a3b3f !important;
    }

    .Feautess p {
        color: #000 !important;
    }

    .section {
        padding: 50px 0;
    }

    hr {
        border: unset;
    }
</style>

<body>
<?php require_once 'partials/navbar.php' ?>

<?php breadcrumbs('Our Services', 'Our Services') ?>
<!-- Start Contact Us -->

<section class=" ">


    <!-- Joining Product Section -->
    <section style="padding-top:20px;">
        <div class=" ">
            <div class="wrapper tw-flex tw-flex-col tw-items-center tw-justify-center" style="max-width: 1200px;">
                <div class="head">
                    <h2 class="sub-heading tw-font-bold tw-text-3xl text-center tw-py-5">Our Services</h2>
                </div>
                <div class="tw-flex tw-py-10 tw-gap-10 flex-col tw-mx-auto tw-justify-center tw-items-center md:tw-flex-row">
                    <div class="item tw-flex tw-flex-col tw-gap-20 sm:tw-flex-row tw-flex-wrap  tw-justify-center tw-items-center">
                        <cms:pages masterpage='index.php'>
                            <div class="item tw-flex-col sm:tw-flex-row tw-gap-32 flex tw-items-center">
                                <div class="description max-h-[300px]">
                                    <h2 class="tw-text-white tw-font-bold tw-text-2xl">
                                        <cms:show k_page_title />
                                    </h2>
                                    <cms:show description />
                                </div>
                                <div class="service-slider" style="width: 300px; height: 300px;">
                                    <cms:show_repeatable 'images'>
                                    <div class="single-slider">
                                        <img class=" tw-object-cover" style="width: 500px; height: 300px; object-fit: cover;" src="<cms:show gg_image />" alt="">
                                    </div>
                                    </cms:show_repeatable>
                                </div>
                            </div>
                        </cms:pages>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Joining Product Section ends -->

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
