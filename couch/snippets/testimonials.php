<section class="section">
    <div class="container">
        <div class="row">
            <!-- Testimonial Details -->
            <!-- Ensure you use k_page_id or k_page_name to get the specific page -->
            <cms:pages masterpage='testimonials.php' id=k_page_id limit='1'>
                <!-- Testimonial Image Section -->
                <div class="col-md-6">
                    <cms:show_repeatable 'testimonials_images' start="1">
                        <a href="<cms:show image />" data-toggle="lightbox" data-gallery="testimonial-gallery">
                            <img src="<cms:show image/>" alt="<cms:show k_page_title />" class="img-fluid">
                        </a>
                    </cms:show_repeatable>
                </div>

                <!-- Testimonial Details Section -->
                <div class="col-md-6">
                    <h2 class="tw-text-3xl tw-font-bold tw-mb-4">
                        <cms:show k_page_title />
                    </h2>
                    <p class="tw-mb-4">
                        <cms:show description />
                    </p>
                </div>
            </cms:pages>
        </div>

        <!-- Testimonial Videos Section -->
        <div class="tw-flex tw-flex-col tw-gap-5 tw-mt-8 tw-border">
            <h2 class="tw-font-bold tw-text-center tw-text-2xl tw-py-5 tw-border-b">Testimonial Videos</h2>

            <!-- Scrollable Video Section -->
            <div class="scroll-container">
                <cms:show_repeatable 'videos'>
                    <div class="tw-flex tw-flex-col tw-gap-4 tw-items-center">
                        <h3 class="tw-text-lg tw-font-semibold">
                            <cms:show video_title />
                        </h3>
                        <div class="card tw-relative" style="width: 400px; height: 200px;">
                            <!-- Embedded Video -->
                            <script>
                                url = '<cms:show video_link />';
                                // Assuming you have a function like this elsewhere in your JS to handle the URL conversion
                                convertToEmbedLink(url);
                            </script>
                        </div>
                    </div>
                </cms:show_repeatable>
            </div>
        </div>
    </div>
</section>

<!-- Optional CSS Styling -->
<style>
    .scroll-container {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        gap: 16px;
        padding: 10px;
    }

    .card {
        min-width: 400px;
        height: 200px;
        background-color: #f0f0f0;
        flex-shrink: 0;
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
