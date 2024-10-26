<?php require_once('couch/cms.php'); ?>
<cms:template title='Gallery'>
    <cms:repeatable name='gallery_images' label='Gallery Images'>
        <cms:editable name='image' label='Image' type='image' show_preview='1' preview_height='200' />
        <cms:editable name='caption' label='Caption' type='text' />
        <cms:editable name="gg_thumb" assoc_field="image" label="Image Thumbnail"
            desc="Thumbnail of image above" width='200' height='200' enforce_max='1' type="thumbnail" />
    </cms:repeatable>
</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
    <?php breadcrumbs('Gallery', 'Gallery') ?>
    <div class="container tw-relative">
        <h1 class="tw-font-bold tw-text-2xl text-center tw-py-10 tw-mx-4 sub-heading"> Gallery</h1>
        <div class=" tw-columns-xs tw-my-10">
            <cms:pages masterpage='gallery.php'>
                <cms:show_repeatable 'gallery_images'>
                    <div class="tw-m-2 tw-shadow tw-bg-white tw-rounded-lg group tw-border-8 border-white hover:-tw-translate-y-6 shadow transition-all hover:tw-rotate-2 ">
                        <a class="tw-block " href="<cms:show image />" data-lightbox="gallery"
                            onclick="event.preventDefault();">
                            <img class="tw-w-full  tw-object-cover" src="<cms:show image />"
                                alt="<cms:show caption />" />
                            <div class="tw-bg-black tw-opacity-50 tw-absolute tw-inset-0 tw-hidden group-hover:tw-flex group-focus:tw-flex tw-justify-center tw-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="tw-h-6 tw-w-6 tw-text-white"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </cms:show_repeatable>
            </cms:pages>
        </div>
    </div>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>
<?php COUCH::invoke(); ?>