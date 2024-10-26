<?php require_once('couch/cms.php'); ?>
<cms:template title='Bussiness Opportunities'></cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Opportunities</title>
    <?php require_once 'partials/head.php' ?>
</head>

<body>
    <?php require_once 'partials/navbar.php' ?>


    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Business Opportunities</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Business Opportunities</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <style>
        .breadcrumbs {
            background-image: url('img/networking.jpg');
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-column-gap: 10px;
            grid-row-gap: 10px;
        }

        .grid-item {
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #999;
        }

        .grid-item img {
            width: 100%;
        }
    </style>
    <section>
        <h1 class="text-center tw-text-4xl tw-font-semibold tw-pt-8">ENROLLMENT</h1>
        <div class="container section">
            <div class="tw-flex tw-flex-col  tw-justify-center tw-items-center sm:tw-gap-5">
                <img class="tw-max-w-[500px] tw-w-full tw-py-10" src="img/networking.png" alt="">
                <div class=" tw-text-center">
                    <h2 class="tw-py-4 tw-font-bold tw-text-3xl">Joining The Business </h2>
                    <div class="tw-flex tw-flex-col sm:tw-flex-row tw-justify-center tw-items-center tw-gap-5">
                        <div class="tw-shadow tw-bg-gray-100 tw-rounded-lg tw-p-5 tw-flex tw-flex-col tw-items-center tw-max-w-md hover:-tw-translate-y-2 tw-transition-all tw-duration-1000"
                            style="width:300px;height:350px;">
                            <img src="img/icons/zero.jpg" width="300" height="300" alt="">
                            <div class="tw-text-lg tw-text-nowrap tw-ml-5 tw-font-bold">
                                No CHARGE FOR ENROLLMENT
                            </div>
                        </div>
                        <div class="tw-shadow tw-bg-gray-100 tw-rounded-lg tw-p-5 tw-flex tw-flex-col tw-items-center tw-max-w-md hover:-tw-translate-y-2 tw-transition-all tw-duration-1000"
                            style="width:300px;height:350px;">
                            <img src="img/icons/no-fee.avif" width="300" height="300" alt="">
                            <div class="tw-text-lg tw-text-nowrap tw-ml-5 tw-font-bold">
                                NO REGISTRATION FEES
                            </div>
                        </div>
                        <div class="tw-shadow tw-bg-gray-100 tw-rounded-lg tw-p-5 tw-flex tw-flex-col tw-items-center tw-max-w-md hover:-tw-translate-y-2 tw-transition-all tw-duration-1000"
                            style="width:300px;height:350px;">
                            <div class=""><img src="img/icons/nocompulsion.avif" width="300" height="300" alt=""></div>
                            <div class="tw-text-lg  tw-ml-5 tw-font-bold">
                                NO COMPULSION OF ANY TYPE OF PURCHASE.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <!-- <h1 class="tw-font-bold tw-text-2xl tw-text-center tw-my-8">Company Disclaimer</h1> -->
            <p class="tw-text-black">
                <cms:editable name='business_plan' label='Edit Bussiness Plan' type='richtext'>
                </cms:editable>
            </p>
        </div>
        <div style=" position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden;">
            <iframe src="https://www.youtube.com/embed/ceqY61gx41g?si=yx5Z61wvhiY2QZRK" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
        </div>

        <?php //require_once 'partials/bussiness-details.php'; ?>
    </section>

    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>
<?php COUCH::invoke(); ?>

</html>