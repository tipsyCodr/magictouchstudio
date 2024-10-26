<?php require_once('couch/cms.php'); ?>
<cms:template title='Awards'>

</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awards</title>
    <?php require_once 'partials/head.php' ?>
</head>
<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 500;
        line-height: 1.2;
    }

    h1 {
        font-size: 2.5rem;
    }

    h2 {
        font-size: 2rem;
    }

    h3 {
        font-size: 1.75rem;
    }

    h4 {
        font-size: 1.5rem;
    }

    h5 {
        font-size: 1.25rem;
    }

    h6 {
        font-size: 1rem;
    }
</style>

<body>
    <?php require_once 'partials/navbar.php' ?>
    <?php breadcrumbs('Awards', 'Awards') ?>

    <div class="container tw-relative">

        <cms:template title='Awards' clonable='1'>
            <!-- Repeatable region for awards images -->
            <cms:repeatable name='awards_images' label='Awards Images'>
                <cms:editable name='image' label='Image' type='image' show_preview='1' preview_height='200' />
                <cms:editable name='caption' label='Caption' type='text' />
                <cms:editable name="gg_thumb" assoc_field="image" label="Image Thumbnail"
                    desc="Thumbnail of image above" width='200' height='200' enforce_max='1' type="thumbnail" />
            </cms:repeatable>
        </cms:template>


        <h1 class="tw-font-bold tw-text-2xl text-center tw-py-10 tw-mx-4"> Awards</h1>


        <cms:template title='Awards Display' />
        <cms:pages masterpage='awards.php'>
            <div class="awards tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-5 tw-my-10">
                <!-- Loop through repeatable region to display each image -->
                <cms:show_repeatable 'awards_images'>
                    <div class="tw-m-10 tw-shadow tw-bg-white tw-rounded-lg hover:tw-scale-110 tw-transition-transform">
                        <p class="tw-p-2 tw-text-center">
                            <span class="tw-font-bold">Latest:</span>
                            <cms:show caption />
                        </p>
                        <a class="tw-block tw-overflow-hidden" href="<cms:show image />" data-lightbox="awards"
                            onclick="event.preventDefault();">
                            <img class="tw-w-full tw-h-[200px] tw-object-contain" src="<cms:show image />"
                                alt="<cms:show caption />" />
                        </a>
                    </div>

                </cms:show_repeatable>
            </div>
        </cms:pages>

    </div>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>
<?php COUCH::invoke(); ?>