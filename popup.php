<?php require_once('couch/cms.php'); ?>

<cms:template title='Change Popup Image'>
    <cms:editable name='image' label='Image' type='image' show_preview='1' preview_height='200' />
    <cms:editable name="gg_thumb" assoc_field="image" label="Image Thumbnail" desc="Thumbnail of image above"
        width='200' height='200' enforce_max='1' type="thumbnail" />
</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Banner</title>
    <?php require_once 'partials/head.php' ?>
</head>

<body>
    <?php require_once 'partials/navbar.php' ?>
    <cms:pages masterpage='popup.php'>
        <h1 class="tw-font-bold tw-text-2xl">
            <cms:show title />
        </h1>
        <img src="<cms:show image />" alt="<cms:show title />">

    </cms:pages>

    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>
<?php COUCH::invoke(); ?>