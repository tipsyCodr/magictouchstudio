<?php require_once('couch/cms.php'); ?>
<cms:template title='Download Section'>
    <cms:repeatable name="files" label="Files">
        <cms:editable name="name" label="File Name" type="text" />
        <cms:editable name='file' label='Downloadable File' desc='Upload the file here' type='file' />
    </cms:repeatable>
</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Section</title>
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
    <?php breadcrumbs('Downloads', 'Downloads') ?>
    <div class="container">
        <h1 class="tw-font-bold tw-text-2xl tw-text-center tw-my-8">Download Section</h1>
        <ul class="tw-list-disc tw-pl-4">
            <cms:pages masterpage="downloads.php">
                <cms:show name />
                <cms:show_repeatable 'files'>
                    <li><a href="<cms:show file/>" target="_blank">
                            <cms:if name>
                                <cms:show name />
                                <cms:else />
                                <cms:show k_file_name />
                            </cms:if>
                        </a></li>
                </cms:show_repeatable>
            </cms:pages>
        </ul>

        <div class="tw-my-6 tw-flex tw-flex-col sm:tw-flex-row tw-flex-wrap tw-gap-2">

            <?php
            $files = glob('assets/*');
            foreach ($files as $file) {
                echo '<li class="tw-text-blue-500 tw-p-2 tw-text-nowrap tw-m-2 tw-rounded-xl tw-border tw-bg-gray-50 tw-underline"><a href="' . $file . '" target="_blank" class="tw-hover:tw-text-blue-700 tw-transition tw-duration-150">' . basename($file) . '</a></li>';
            }
            ?>
        </div>
    </div>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>

<?php COUCH::invoke(); ?>