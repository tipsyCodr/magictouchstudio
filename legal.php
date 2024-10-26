<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Documents</title>
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
                        <h2>Legal Documents</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Legal Documents</li>
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
    </style>


    <h1 class="tw-font-bold tw-text-2xl tw-text-center tw-my-8">Our Legal Documents</h1>
    <style>
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
    <div class="container">

        <div class="grid-container">
            <div class="grid-item">
                <h4 class="tw-text-center tw-font-bold tw-mb-4">FSSAI</h4>
                <img src="img/documents/fssai.jpg" alt="fssai" />
            </div>
            <div class="grid-item">
                <h4 class="tw-text-center tw-font-bold tw-mb-4">GST Certificate</h4>
                <img src="img/documents/gst.jpg" alt="gst" />
            </div>
            <div class="grid-item">
                <h4 class="tw-text-center tw-font-bold tw-mb-4">Incorporation Certificate</h4>
                <img src="img/documents/incorporation.jpg" alt="incorporation" />
            </div>
            <div class="grid-item">
                <h4 class="tw-text-center tw-font-bold tw-mb-4">ISO Certificate</h4>
                <img src="img/documents/iso.jpg" alt="iso" />
            </div>
            <div class="grid-item">
                <h4 class="tw-text-center tw-font-bold tw-mb-4">Pancard</h4>
                <img src="img/documents/pancard.jpg" alt="pancard" />
            </div>
            <div class="grid-item">
                <h4 class="tw-text-center tw-font-bold tw-mb-4">Udyam Certificate</h4>
                <img src="img/documents/udyam.jpg" alt="udyam" />
            </div>
        </div>
    </div>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>