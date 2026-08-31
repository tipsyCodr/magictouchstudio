<?php require_once('couch/cms.php'); ?>
<cms:template title='Services' clonable='1' dynamic_folders='1' gallery='1'>

    <cms:repeatable name='images' label="Add Images" order='1'>
        <cms:editable name="gg_image" label="Image" desc="Upload your image here" type="image" show_preview='1'
            preview_height='200' />
        <cms:editable name="gg_thumb" assoc_field="gg_image" label="Image Thumbnail" desc="Thumbnail of image above"
            width='115' height='115' enforce_max='1' type="thumbnail" />
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
</style>

<body class="tw-bg-black tw-text-white tw-overflow-x-hidden">
    <?php require_once 'partials/navbar.php'; ?>

    <!-- Hero Video Area -->
    <section class="tw-relative tw-w-full tw-min-h-screen tw-flex tw-items-center tw-justify-center tw-overflow-hidden">
        <video class="tw-absolute tw-top-0 tw-left-0 tw-w-full tw-h-full tw-object-cover tw-z-0" autoplay muted loop playsinline>
            <source src="assets/videos/hero.mp4" type="video/mp4">
        </video>
        <!-- Overlay -->
        <div class="tw-absolute tw-inset-0 tw-bg-gradient-to-b tw-from-black/60 tw-via-black/30 tw-to-black tw-z-10"></div>

        <!-- Content -->
        <div class="tw-relative tw-z-20 tw-text-center tw-px-4 tw-max-w-4xl tw-mx-auto tw-flex tw-flex-col tw-items-center tw-gap-4 tw-pt-20">
            <div class="tw-w-28 tw-h-28 md:tw-w-36 md:tw-h-36 tw-rounded-full tw-p-1 tw-bg-gradient-to-tr tw-from-pink-500 tw-to-purple-600 tw-shadow-2xl tw-shadow-pink-500/30 tw-flex tw-items-center tw-justify-center">
                <img src="img/logo.png" class="tw-w-full tw-h-full tw-object-cover tw-rounded-full" alt="Magic Touch Studio">
            </div>
            <h1 class="tw-text-4xl md:tw-text-6xl tw-font-extrabold tw-tracking-tight tw-bg-clip-text tw-text-transparent tw-bg-gradient-to-r tw-from-pink-400 tw-via-purple-400 tw-to-indigo-400">
                Magic Touch Studio
            </h1>
            <p class="tw-text-base md:tw-text-xl tw-text-gray-200 tw-font-light tw-tracking-wide">
                Where Every Shot Tells A Story
            </p>
            <div class="tw-flex tw-gap-4 tw-mt-4">
                <a href="/gallery.php" class="tw-px-6 tw-py-3 tw-rounded-full tw-bg-white/10 tw-hover:bg-white/20 tw-backdrop-blur-sm tw-text-white tw-font-semibold tw-border tw-border-white/20 tw-transition-all hover:tw-scale-105">
                    View Portfolio
                </a>
                <a href="/contact.php" class="tw-px-6 tw-py-3 tw-rounded-full tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-text-white tw-font-semibold tw-shadow-lg tw-shadow-pink-500/30 tw-transition-all hover:tw-scale-105">
                    Book Now
                </a>
            </div>
        </div>
    </section>


    <!--     
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
    </section> -->
    <!--/ End Slider Area -->

    <!-- Services Section -->
    <section class="tw-py-20 tw-bg-gradient-to-b tw-from-black tw-via-zinc-950 tw-to-black">
        <div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
            <div class="tw-text-center tw-mb-16">
                <span class="tw-text-pink-500 tw-text-sm tw-font-semibold tw-tracking-widest tw-uppercase">What We Offer</span>
                <h2 class="tw-text-3xl md:tw-text-5xl tw-font-bold tw-mt-2 tw-bg-clip-text tw-text-transparent tw-bg-gradient-to-r tw-from-white tw-to-gray-400">Our Premium Services</h2>
                <div class="tw-w-20 tw-h-1 tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-mx-auto tw-mt-4 tw-rounded-full"></div>
            </div>

            <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-8">
                <cms:pages masterpage='index.php'>
                    <div class="tw-group tw-relative tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-rounded-3xl tw-overflow-hidden tw-backdrop-blur-sm hover:tw-border-pink-500/50 tw-transition-all tw-duration-300 hover:-tw-translate-y-2 hover:tw-shadow-xl hover:tw-shadow-pink-500/10 tw-flex tw-flex-col">
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
                        <div class="tw-p-6 tw-flex tw-flex-col tw-flex-1 tw-justify-between tw-gap-4">
                            <div>
                                <h3 class="tw-text-xl tw-font-bold tw-text-white group-hover:tw-text-pink-400 tw-transition-colors">
                                    <cms:show k_page_title />
                                </h3>
                                <div class="tw-text-gray-400 tw-text-sm tw-mt-2 tw-line-clamp-3">
                                    <cms:show description />
                                </div>
                            </div>
                            <div class="tw-pt-3 tw-border-t tw-border-white/5 tw-flex tw-items-center tw-justify-between">
                                <a href="/services.php" class="tw-text-xs tw-font-semibold tw-text-pink-400 hover:tw-text-pink-300 tw-flex tw-items-center tw-gap-1">
                                    Explore More <i class="fa fa-arrow-right tw-text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </cms:pages>
            </div>
        </div>
    </section>
    <!-- Services section ends -->
    <style>
        .pic-item:hover .icon {
            display: flex;
        }
    </style>
    <!-- Photography showcase  -->
    <section class="tw-py-20 tw-bg-black">
        <div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
            <div class="tw-text-center tw-mb-14">
                <span class="tw-text-pink-500 tw-text-sm tw-font-semibold tw-tracking-widest tw-uppercase">Portfolio</span>
                <h2 class="tw-text-3xl md:tw-text-5xl tw-font-bold tw-mt-2 tw-bg-clip-text tw-text-transparent tw-bg-gradient-to-r tw-from-white tw-to-gray-400">Photography Showcase</h2>
                <div class="tw-w-20 tw-h-1 tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-mx-auto tw-mt-4 tw-rounded-full"></div>
            </div>
            <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-6">
                <cms:pages masterpage='gallery.php'>
                    <cms:show_repeatable 'gallery_images'>
                        <div class="tw-group tw-relative tw-h-72 tw-rounded-2xl tw-overflow-hidden tw-border tw-border-white/10 tw-bg-zinc-900/40 tw-backdrop-blur-sm">
                            <a class="tw-block tw-w-full tw-h-full" href="<cms:show image />" data-lightbox="gallery">
                                <img class="tw-w-full tw-h-full tw-object-cover tw-transition-transform tw-duration-700 group-hover:tw-scale-110"
                                    src="<cms:show image />" alt="<cms:show caption />" />
                                <div class="tw-absolute tw-inset-0 tw-bg-gradient-to-t tw-from-black/80 tw-via-black/20 tw-to-transparent tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-300 tw-flex tw-items-center tw-justify-center">
                                    <div class="tw-w-12 tw-h-12 tw-rounded-full tw-bg-white/20 tw-backdrop-blur-md tw-flex tw-items-center tw-justify-center tw-text-white tw-transform tw-scale-75 group-hover:tw-scale-100 tw-transition-transform tw-duration-300">
                                        <i class="fa-solid fa-magnifying-glass-plus tw-text-lg"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </cms:show_repeatable>
                </cms:pages>
            </div>
        </div>
    </section>
    <!-- Photography showcase Ends  -->

    <!-- Testimonials Section -->
    <section class="tw-py-20 tw-bg-gradient-to-b tw-from-black tw-via-zinc-950 tw-to-black">
        <div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
            <div class="tw-text-center tw-mb-14">
                <span class="tw-text-pink-500 tw-text-sm tw-font-semibold tw-tracking-widest tw-uppercase">Client Reviews</span>
                <h2 class="tw-text-3xl md:tw-text-5xl tw-font-bold tw-mt-2 tw-bg-clip-text tw-text-transparent tw-bg-gradient-to-r tw-from-white tw-to-gray-400">What People Say</h2>
                <div class="tw-w-20 tw-h-1 tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-mx-auto tw-mt-4 tw-rounded-full"></div>
            </div>
            <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-8">
                <cms:pages masterpage='testimonials.php' folder="testimonials" paginate='1' limit='6'>
                    <div class="tw-group tw-p-8 tw-rounded-2xl tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-backdrop-blur-sm hover:tw-border-pink-500/40 hover:-tw-translate-y-2 tw-transition-all tw-duration-300 tw-flex tw-flex-col tw-justify-between">
                        <div class="tw-text-gray-300 tw-text-sm tw-leading-relaxed tw-italic tw-mb-6">
                            "<cms:show description />"
                        </div>
                        <div class="tw-flex tw-items-center tw-gap-4 tw-pt-4 tw-border-t tw-border-white/10">
                            <cms:show_repeatable 'testimonials_images' start="1" limit="1">
                                <img class="tw-w-12 tw-h-12 tw-rounded-full tw-object-cover tw-ring-2 tw-ring-pink-500/50" src="<cms:show image />" alt="<cms:show k_page_title />">
                            </cms:show_repeatable>
                            <div>
                                <h4 class="tw-text-base tw-font-bold tw-text-white">
                                    <cms:show k_page_title />
                                </h4>
                                <div class="tw-flex tw-text-yellow-400 tw-text-xs tw-gap-1 tw-mt-1">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </cms:pages>
            </div>
        </div>
    </section>
    <!-- Testimonials ends -->

    <!-- Brands Section -->
    <section class="tw-py-16 tw-bg-zinc-950 tw-border-y tw-border-white/5">
        <div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
            <div class="tw-text-center tw-mb-10">
                <span class="tw-text-pink-500 tw-text-xs tw-font-semibold tw-tracking-widest tw-uppercase">Collaborations</span>
                <h3 class="tw-text-2xl md:tw-text-3xl tw-font-bold tw-text-white tw-mt-1">Brands We Have Worked With</h3>
            </div>
            <div class="brands-slider">
                <div class="hero-slider tw-py-4">
                    <?php
                    $files = glob("img/logos/*");
                    foreach ($files as $file) {
                        ?>
                        <div class="tw-h-20 tw-px-4 tw-flex tw-items-center tw-justify-center tw-grayscale hover:tw-grayscale-0 tw-opacity-60 hover:tw-opacity-100 tw-transition-all">
                            <img src="<?php echo $file; ?>" alt="" class="tw-max-h-16 tw-w-auto tw-object-contain">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram Section -->
    <section class="tw-py-20 tw-bg-black">
        <div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
            <div class="tw-flex tw-flex-col lg:tw-flex-row tw-items-center tw-justify-between tw-gap-12">
                <div class="tw-flex-1 tw-text-center lg:tw-text-left">
                    <span class="tw-text-pink-500 tw-text-sm tw-font-semibold tw-tracking-widest tw-uppercase">Follow Us</span>
                    <h2 class="tw-text-3xl md:tw-text-5xl tw-font-bold tw-mt-2 tw-bg-clip-text tw-text-transparent tw-bg-gradient-to-r tw-from-white tw-to-gray-400">Explore Our Instagram Feed</h2>
                    <p class="tw-mt-4 tw-text-gray-400 tw-text-base tw-leading-relaxed tw-max-w-lg">
                        Stay connected with our latest shoots, behind-the-scenes moments, and exclusive creative projects.
                    </p>
                    <a href="https://www.instagram.com/magictouchstudiobhilai/" target="_blank" class="tw-inline-flex tw-items-center tw-gap-3 tw-mt-8 tw-px-6 tw-py-3 tw-rounded-full tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-text-white tw-font-semibold hover:tw-opacity-90 tw-transition-all tw-shadow-lg tw-shadow-pink-500/25">
                        <i class="fa-brands fa-instagram tw-text-lg"></i> Follow @magictouchstudiobhilai
                    </a>
                </div>
                <div class="tw-flex-shrink-0 tw-rounded-2xl tw-overflow-hidden tw-border tw-border-white/10 tw-shadow-2xl tw-shadow-pink-500/10">
                    <iframe src="https://www.instagram.com/magictouchstudiobhilai/embed/?cr=1&v=12&w=320" width="360" height="500"
                        frameborder="0" scrolling="no" allowtransparency="true"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Inquiries / Booking Section -->
    <section class="tw-py-20 tw-bg-gradient-to-b tw-from-black tw-to-zinc-950">
        <div class="tw-max-w-4xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
            <div class="tw-text-center tw-mb-12">
                <span class="tw-text-pink-500 tw-text-sm tw-font-semibold tw-tracking-widest tw-uppercase">Get In Touch</span>
                <h2 class="tw-text-3xl md:tw-text-4xl tw-font-bold tw-mt-2 tw-text-white">Capture Your Moments With Us</h2>
                <p class="tw-text-gray-400 tw-mt-2 tw-text-sm">Leave a message for bookings, queries or pricing.</p>
                <div class="tw-w-20 tw-h-1 tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-mx-auto tw-mt-4 tw-rounded-full"></div>
            </div>

            <div class="tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-rounded-3xl tw-p-8 sm:tw-p-12 tw-backdrop-blur-md tw-shadow-2xl">
                <form class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 tw-gap-6" action="form_handler.php" method="post">
                    <div>
                        <label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-2">FULL NAME</label>
                        <input name="name" type="text" placeholder="John Doe" required
                            class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors">
                    </div>
                    <div>
                        <label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-2">EMAIL ADDRESS</label>
                        <input name="email" type="email" placeholder="john@example.com" required
                            class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors">
                    </div>
                    <div>
                        <label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-2">PHONE NUMBER</label>
                        <input name="phone" type="text" placeholder="+91 9876543210" required
                            class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors">
                    </div>
                    <div>
                        <label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-2">EVENT DATE</label>
                        <input name="date" type="date" required
                            class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors">
                    </div>
                    <div class="sm:tw-col-span-2">
                        <label class="tw-block tw-text-xs tw-font-semibold tw-text-gray-400 tw-mb-2">MESSAGE</label>
                        <textarea name="message" rows="4" placeholder="Tell us about your event..." required
                            class="tw-w-full tw-px-4 tw-py-3 tw-rounded-xl tw-bg-black/50 tw-border tw-border-white/10 tw-text-white placeholder:tw-text-gray-600 focus:tw-border-pink-500 focus:tw-outline-none tw-transition-colors"></textarea>
                    </div>
                    <div class="sm:tw-col-span-2 tw-flex tw-flex-col sm:tw-flex-row tw-items-center tw-justify-between tw-gap-4 tw-pt-4">
                        <p class="tw-text-xs tw-text-gray-500">We will confirm your booking via phone/WhatsApp.</p>
                        <button type="submit"
                            class="tw-w-full sm:tw-w-auto tw-px-8 tw-py-3.5 tw-rounded-full tw-bg-gradient-to-r tw-from-pink-500 tw-to-purple-600 tw-text-white tw-font-semibold hover:tw-opacity-90 tw-transition-all tw-shadow-lg tw-shadow-pink-500/25">
                            Submit Inquiry
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php require_once 'partials/footer.php'; ?>
    <?php require_once 'partials/scripts.php'; ?>

</body>

</html>
<?php COUCH::invoke(); ?>