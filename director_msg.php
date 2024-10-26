<?php require_once('couch/cms.php'); ?>
<cms:template title='Edit Director`s Message'>
    <cms:repeatable name='team' label='Team'>
        <cms:editable name="name" label="Name" type="text" />
        <cms:editable name="designation" label="Designation" type="text" />
        <cms:editable name="bio" label="Bio" type="richtext" />
        <cms:editable name="image" label="Image" type="image" />
    </cms:repeatable>
</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director`s Message</title>
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

    p {
        padding-top: 5px;
        padding-bottom: 5px;
    }
</style>

<body>
    <?php require_once 'partials/navbar.php' ?>
    <?php breadcrumbs('Director`s Message', 'Director`s Message') ?>
    <div class="container">
        <!-- <h1 class="tw-font-bold tw-text-2xl tw-text-center tw-my-8">Company Disclaimer</h1> -->
        <div class="tw-flex tw-flex-col tw-py-10">
            <cms:pages masterpage="director_msg.php">
                <cms:show_repeatable 'team'>
                    <div class="tw-flex tw-flex-col sm:tw-flex-row tw-gap-10">
                        <div class="image tw-flex tw-flex-col tw-justify-center tw-items-center ">
                            <div class="tw-w-[300px] tw-rounded-lg tw-overflow-hidden ">
                                <img class="tw-object-cover" src="<cms:show image /> " alt="">
                            </div>
                            <h3 class="tw-text-lg tw-font-semibold">
                                <cms:show name />
                            </h3>
                            <small class="tw-text-sm tw-text-primary">
                                <cms:show designation />
                            </small>
                        </div>
                        <div class="content">
                            <p>
                                <cms:show bio />
                            </p>
                        </div>
                    </div>
                </cms:show_repeatable>
            </cms:pages>

        </div>
        <p class="tw-text-black">

        </p>
    </div>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>
<?php COUCH::invoke(); ?>