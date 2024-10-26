<?php
require_once('couch/cms.php'); ?>
<cms:template title='Video Testimonials' clonable='1'>
    <cms:editable name="description" label="Description" type="richtext" />
    <cms:repeatable name='videos' label='
    |Videos'>
        <cms:editable name='video_link' label='Video Link' type='text' />
    </cms:repeatable>
</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Testmonial</title>
    <?php require_once 'partials/head.php' ?>
</head>

<body>
    <?php require_once 'partials/navbar.php' ?>
    <?php breadcrumbs('Video Testimonials', 'Video Testimonials') ?>
    <cms:pages masterpage='video_testimonial.php' paginate='1' limit='30'>
        <div class="testimonial-item tw-shadow tw-p-4 tw-rounded tw-mb-4 tw-bg-white">
            <h3 class="tw-text-lg tw-font-bold tw-mt-2">
                <cms:show k_page_title />
            </h3>
            <p>
                <cms:show description />
            </p>
            <div class="tw-mt-2">
                <cms:show video_link />
                <cms:repeatable name='testimonials_videos'>
                    <script>
                        var url = "<cms:show video_link />";
                        var id = ""; 
                        convertToEmbedCode(url);

                    </script>
                </cms:repeatable>
            </div>
        </div>
    </cms:pages>
</body>

</html>
<?php COUCH::invoke(); ?>