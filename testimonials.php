<?php require_once('couch/cms.php'); ?>
<cms:template title='Testimonials' clonable='1'>
    <cms:folder name='testimonials' title='Written Testimonials' />
    <cms:folder name='product_testimonials' title='Product Testimonials' />
    <cms:folder name='videos_testimonials' title='Video Testimonials' />

    <cms:editable name="description" label="Description" type="richtext" />
    <cms:repeatable name='testimonials_images' label='Testimonial Images'>
        <cms:editable name="image" label="Image" type="image" />
    </cms:repeatable>
    <cms:repeatable name='videos' label='Testimonial Videos'>
        <cms:editable name='video_title' label='Video Title' type='text' />
        <cms:editable name='video_link' label='Video Link' type='text' />
    </cms:repeatable>
</cms:template>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <?php require_once 'partials/head.php' ?>
</head>
<style>
    .section {
        padding: 50px 0;
    }

    .scroll-container {
        display: flex;
        padding: 50px 0;
        gap: 40px;
        flex-wrap: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;

    }
</style>
<style>
    .card-sl {
        flex: 0 0 auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card-image img {
        max-height: 100%;
        max-width: 100%;
        border-radius: 8px 8px 0px 0;
    }

    .card-action {
        position: relative;
        float: right;
        margin-top: -25px;
        margin-right: 20px;
        z-index: 2;
        color: #E26D5C;
        background: #fff;
        border-radius: 100%;
        padding: 15px;
        font-size: 15px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
    }

    .card-action:hover {
        color: #fff;
        background: #E26D5C;
        -webkit-animation: pulse 1.5s infinite;
    }

    .card-heading {
        font-size: 18px;
        font-weight: bold;
        background: #fff;
        padding: 10px 15px;
    }

    .card-text {
        padding: 10px 15px;
        background: #fff;
        font-size: 14px;
        color: #636262;
    }

    .card-button {
        display: flex;
        justify-content: center;
        padding: 10px 0;
        width: 100%;
        background-color: #1F487E;
        color: #fff;
        border-radius: 0 0 8px 8px;
    }

    .card-button:hover {
        text-decoration: none;
        background-color: #1D3461;
        color: #fff;

    }


    @-webkit-keyframes pulse {
        0% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }

        70% {
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -webkit-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
        }

        100% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
        }
    }

    /* card design */
</style>

<body>
    <script>
        let url;
    </script>
    <?php require_once 'partials/navbar.php' ?>
    <?php breadcrumbs('Testimonials', 'Testimonials') ?>
    <cms:if k_is_page>

        <cms:embed 'testimonials.php' />
        <cms:else />
        <div class="section">

            <div class="">
                <div class="">
                    <h2 class="tw-font-bold tw-text-2xl tw-my-6 tw-text-center">Testimonials</h2>
                    <div class="container">

                        <div class="scroll-container">
                            <cms:pages masterpage='testimonials.php' folder="testimonials" paginate='1' limit='10'>
                                <div class="card-sl">
                                    <div class="card-image">
                                        <cms:show_repeatable 'testimonials_images' start="1" limit="1">
                                            <img class="tw-object-cover" src="<cms:show image />"
                                                style="width: 100%; height: 200px;">
                                        </cms:show_repeatable>

                                    </div>
                                    <a class="card-action" href="<cms:show k_page_link />"><i
                                            class="fa fa-chain"></i></a>
                                    <div class="card-heading">
                                        <a href="<cms:show k_page_link />" class="txt4">
                                            <cms:show k_page_title />
                                        </a>
                                    </div>
                                    <div class="card-text">
                                        <cms:show description />

                                    </div>
                                    <div class="card-text">

                                    </div>
                                    <a href="<cms:show k_page_link />"
                                        class="card-button tw-text-white visited:tw-text-white hover:tw-text-gray-100">
                                        View</a>
                                </div>

                            </cms:pages>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div>
            <h2 class="tw-font-bold tw-text-2xl tw-my-6 tw-text-center">Product Testimonials</h2>
            <div class="container">
                <div class="scroll-container">
                    <cms:pages masterpage='testimonials.php' folder="product_testimonials" paginate='1' limit='10'>
                        <div class="card-sl">
                            <div class="card-image">
                                <cms:show_repeatable 'testimonials_images' start="1" limit="1">
                                    <img class="tw-object-cover" src="<cms:show image />"
                                        style="width: 100%; height: 200px;">
                                </cms:show_repeatable>

                            </div>

                            <a class="card-action" href="<cms:show k_page_link />"><i class="fa fa-chain"></i></a>
                            <div class="card-heading">
                                <a href="<cms:show k_page_link />" class="txt4">
                                    <cms:show title />
                                </a>
                            </div>
                            <div class="card-text">
                                <cms:show description />

                            </div>
                            <div class="card-text">

                            </div>
                            <a href="<cms:show k_page_link />"
                                class="card-button tw-text-white visited:tw-text-white hover:tw-text-gray-100">
                                View</a>
                        </div>
                    </cms:pages>
                </div>
            </div>
        </div>
        <div>
            <h2 class="tw-font-bold tw-text-2xl tw-my-6 tw-text-center">Videos Testimonials</h2>
            <div class="container">
                <div class="scroll-container">
                    <cms:pages masterpage='testimonials.php' folder="videos_testimonials" paginate='1' limit='10'>
                        <div class="card-sl">
                            <div class="card-image">
                                <cms:show_repeatable 'videos' start="1" limit="1">
                                    <script>
                                        url = '<cms:show video_link />';
                                        // Assuming you have a function like this elsewhere in your JS to handle the URL conversion
                                        convertToEmbedLink(url);
                                    </script>
                                </cms:show_repeatable>

                            </div>

                            <div class="card-content">
                                <a class="card-action" href="<cms:show k_page_link />">
                                    <i class="fa fa-chain"></i>
                                </a>

                                <div class="card-heading">
                                    <a href="<cms:show k_page_link />" class="txt4">
                                        <cms:show title />
                                    </a>
                                </div>

                                <div class="card-text">
                                    <cms:show description />
                                </div>

                                <a href="<cms:show k_page_link />"
                                    class="card-button tw-text-white visited:tw-text-white hover:tw-text-gray-100">
                                    View
                                </a>
                            </div> <!-- End of card-content -->
                        </div> <!-- End of card-sl -->
                    </cms:pages>
                </div> <!-- End of scroll-container -->
            </div> <!-- End of container -->
        </div>



        </div>
    </cms:if>

    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>
<?php COUCH::invoke(); ?>