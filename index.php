<?php require_once('couch/cms.php'); ?>
<cms:template title='Services' clonable='1' dynamic_folders='1' gallery='1'>

    <cms:repeatable name='images' label="Add Images" order='1'>
        <cms:editable name="gg_image" label="Image" desc="Upload your image here" type="image" show_preview='1' preview_height='200' />
        <cms:editable name="gg_thumb" assoc_field="gg_image" label="Image Thumbnail" desc="Thumbnail of image above" width='115' height='115' enforce_max='1' type="thumbnail" />
    </cms:repeatable>

    <cms:editable name="price" type="text" />
    <cms:editable name="description" label="Description" type="richtext" />

    <cms:repeatable name='videos' label="Add YouTube Videos" order='1'>
        <cms:editable name="video_id" label="Video ID" desc="Enter the id of the video" type="text" />
        <cms:editable name="video_title" label="Video Title" desc="Enter the title of the video" type="text" />
    </cms:repeatable>

</cms:template>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php require_once 'partials/head.php'; ?>
</head>

<style>
    .section {
        padding: 50px 0;
    }

    .scroll-container {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        gap: 16px;
        padding: 10px;
    }

    .card {
        min-width: 200px;
        max-width: 332px;
        height: 210px;
        background-color: #f0f0f0;
        flex-shrink: 0;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .p-img img:hover {
        opacity: 0.5;
    }
    .slicknav_menu .slicknav_nav a{
        color: #fff !important;
    }
</style>

<body>
<?php require_once 'partials/navbar.php'; ?>



    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <cms:pages masterpage='slider.php'>
                <cms:show_repeatable 'banner_images'>
                <div class="single-slider">
                    <img src="<cms:show image />" alt="">
                </div>
                </cms:show_repeatable>
            </cms:pages>
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Joining Product Section -->
    <section style="padding-top:20px;">
        <div class="section ">
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

    <!-- Featured Product Section -->
    <section class="section" style="background-image:url('img/bg-featured.jpg'); background-repeat: no-repeat; background-attachment: fixed;">
        <div class="tw-flex tw-flex-col sm:tw-flex-row tw-items-center tw-justify-center tw-gap-10">
            <div class="head">
                <h2 class="tw-font-bold tw-text-3xl text-center tw-py-5">Instagram Profile</h2>
            </div>
            <div>
                <iframe src="https://www.instagram.com/magictouch.mtp/embed/?cr=1&v=12&w=320" width="520" height="620" frameborder="0" scrolling="yes" allowtransparency="true"></iframe>
            </div>
        </div>
    </section>
    <!-- Featured Product Section ends -->

    <!-- Start Appointment -->
    <section class="appointment feedback">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="sub-heading">Capture Your Moments with Us!</h2>
                        <h3 class="sub-heading tw-text-lg">Contact for Inquiries.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <form class="form" action="form_handler.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="name" type="text" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="phone" type="text" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Date" id="datepicker" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Write Your Message Here..." required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-4 col-12">
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-12">
                                <p>(We will confirm by text message)</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment -->

    <?php require_once 'partials/footer.php'; ?>
    <?php require_once 'partials/scripts.php'; ?>

</body>

</html>
<?php COUCH::invoke(); ?>
