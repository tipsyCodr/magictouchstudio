<?php require_once('couch/cms.php'); ?>

<cms:template title='Change Banner Image'>
    <cms:repeatable name='banner_images' label='Banner Images'>
        <cms:editable name='image' label='Image' type='image' show_preview='1' preview_height='200' />
        <cms:editable name="gg_thumb" assoc_field="image" label="Image Thumbnail" desc="Thumbnail of image above"
            width='200' height='200' enforce_max='1' type="thumbnail" />
    </cms:repeatable>
</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Images</title>
    <?php require_once 'partials/head.php' ?>
</head>

<body>
    <?php require_once 'partials/navbar.php' ?>


    <cms:pages masterpage='slider.php'>
        <cms:show_repeatable 'banner_images'>
            <div class="tw-p-2 tw-my-10">
                <img src="<cms:show image />" alt="">
            </div>
        </cms:show_repeatable>

    </cms:pages>

    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>
<?php COUCH::invoke(); ?>