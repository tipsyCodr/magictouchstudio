<?php require_once('couch/cms.php'); ?>

<cms:template title='Products Testimonials' clonable='1'>
    <cms:editable name="title" label="Title" type="text" />
    <cms:editable name="description" label="Description" type="richtext" />
    <cms:repeatable name='testimonials_images' label='Testimonial Images'>
        <cms:editable name="image" label="Image" type="image" />
    </cms:repeatable>
    <cms:repeatable name='testimonials_videos' label='Testimonial Videos'>
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
< <body>
    <?php require_once 'partials/navbar.php' ?>
    <?php breadcrumbs('Testimonials', 'Testimonials') ?>

    <div class="container tw-relative">
        <div>
            <h2>Testimonials</h2>
        </div>
        <div>
            <h2>Product Testimonials</h2>
        </div>
        <div>
            <h2>Videos Testimonials</h2>
        </div>

    </div>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
    </body>

</html>
<?php COUCH::invoke(); ?>