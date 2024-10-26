<link rel="stylesheet" href="css/my-style.css" />

<section class="section">
    <div class="container">
        <div class="row">
            <cms:pages masterpage='products.php' paginate='1' limit='3'>
                <div class="col-md-6">

                    <a href="<cms:show gg_image/>" data-toggle="lightbox" data-gallery="product-gallery">
                        <img src="<cms:show gg_image/>" alt="<cms:show k_page_title />" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6">
                    <h2 class="tw-text-3xl tw-font-bold tw-mb-4">
                        <cms:show k_page_title />
                    </h2>
                    <p class="tw-mb-4">
                        <cms:show description />
                    </p>
                    <p class="tw-text-2xl tw-font-bold tw-text-black tw-my-2">MRP:
                        <cms:show price />.00
                    </p>
                    <p class="tw-text-xl tw-font-bold tw-text-black tw-my-2">Availability:<span
                            class="tw-text-green-500">In
                            Stock</span></p>
                    <small class="tw-mx-auto tw-text-center tw-w-full tw-mb-4">(Inclusive of all taxes)</small>
                    <style>
                        .scroll-container {
                            display: flex;
                            overflow-x: auto;
                            scroll-behavior: smooth;
                            /* Optional, for smooth scrolling */
                            gap: 16px;
                            /* Optional, space between cards */
                            padding: 10px;
                            /* Optional, add padding */
                        }

                        .card {
                            min-width: 200px;
                            max-width: 332px;
                            /* Ensure each card has a minimum width */
                            height: 210px;
                            /* Set height of each card */
                            background-color: #f0f0f0;
                            /* Card styling */
                            flex-shrink: 0;
                            /* Prevent cards from shrinking */
                            border-radius: 8px;
                            padding: 20px;
                            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        }
                    </style>

                    <div class=" tw-py-5">
                        <a href="https://wa.me/+918827268754?text=Hi!%20I'm%20interested%20in%20your%20product%20<cms:show k_page_title /> "
                            target="_blank" class="btn btn-success tw-p-5">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
        </div>
        <div class="tw-flex tw-flex-col tw-gap-5 tw-mt-8 tw-border">
            <h2 class="tw-font-bold tw-text-center tw-text-2xl tw-py-5 tw-border-b ">Product Videos</h2>
            <div class="scroll-container">
                <div class="tw-flex tw-gap-5 tw-overflow-x-scroll ">
                    <cms:show_repeatable 'videos'>
                        <div class="tw-flex tw-flex-col tw-gap-1 tw-justify-center tw-items-center">
                            <h3 class="tw-text-lg tw-font-semibold">
                                <cms:show video_title />
                            </h3>
                            <div class="tw-mb-4 card" style="width: 400px; height: 200px">
                                <!-- Display the Video Title -->
                                <!-- Display the Video using the ID in an iframe -->
                                <iframe width="300" height="200"
                                    src="https://www.youtube.com/embed/<cms:show video_id />"
                                    title="<cms:show video_title />" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>

                            </div>
                        </div>
                    </cms:show_repeatable>
                </div>
            </div>
            </cms:pages>

        </div>
    </div>
</section>