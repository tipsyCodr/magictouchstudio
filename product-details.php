<?php


$product = [];
if (isset($_GET['title'])) {
    $product['title'] = $_GET['title'];
}
if (isset($_GET['price'])) {
    $product['price'] = $_GET['price'];
}
if (isset($_GET['img'])) {
    $product['img'] = $_GET['img'];
}
if (isset($_GET['category'])) {
    $product['category'] = $_GET['category'];
}
if (isset($_GET['description'])) {
    $product['description'] = $_GET['description'];
}

if (isset($_GET['youtube'])) {
    $product['youtube'] = $_GET['youtube'];
}
// $product['title'] = "Alexis Vama";
// $product['price'] = "1600";
// $product['image'] = "plain/alexi8.png";
// $product['category'] = "Personal Care";

// $product['description'] = "Alexis Vama is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Vama is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Vama is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Vama is a great choice for women who are looking for a convenient and effective way to support their health and wellness.";


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Product Details</title>
    <?php require_once 'partials/head.php' ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
        integrity="sha512-G9vjR2q2A4XlSjsu1wRqV9wbGqSj3QeLZJy1+qGzO5oGxVrZBlnbX+TlQdMTlGvKMeiBQ5u6X2kXJjFM5Lg=="
        crossorigin="anonymous" />

</head>

<body>
    <div onclick="document.querySelector('.popup_backdrop').style.display='none'"
        class="popup_backdrop tw-z-[1000] tw-flex tw-justify-center tw-items-center tw-bg-black tw-fixed  tw-w-full tw-h-full tw-bg-opacity-50 tw-backdrop-blur-md "
        style="display: none;">
        <div class="popup tw-p-2  tw-bg-white tw-w-fit tw-h-fit">
            <div class="head flex flex-row tw-justify-between tw-items-center gap-5">
                <h2 class="tw-font-bold tw-text-black">News</h2>
                <button class="close"
                    onclick="document.querySelector('.popup_backdrop').style.display='none'">&times;</button>
            </div>
            <div id="notice" class="notice">

            </div>
        </div>
    </div>
    <?php require_once 'partials/navbar.php' ?>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="img/products/plain/<?php echo $product['img']; ?>" data-toggle="lightbox"
                        data-gallery="product-gallery">
                        <img src="img/products/plain/<?php echo $product['img']; ?>"
                            alt="<?php echo $product['title']; ?>" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6">
                    <h2 class="tw-text-3xl tw-font-bold tw-mb-4"><?php echo $product['title']; ?></h2>
                    <p class="tw-mb-4"><?php echo $product['description']; ?></p>
                    <p class="tw-text-2xl tw-font-bold tw-text-black tw-mb-4">MRP: <?php echo $product['price']; ?>.00
                    </p>
                    <p class="tw-text-xl tw-font-bold tw-text-black tw-mb-4">Availability:<span
                            class="tw-text-green-500">In
                            Stock</span></p>
                    <small class="tw-mx-auto tw-text-center tw-w-full tw-mb-4">(Inclusive of all taxes)</small>

                    <p class="tw-text-black tw-mb-4">Category: <?php echo $product['category']; ?></p>
                    <!-- <p class="tw-mb-4">Subcategory: <?php echo $product['subcategory']; ?></p> -->
                    <!-- <p class="tw-mb-4">Brand: <?php echo $product['brand']; ?></p> -->
                    <div class="tw-flex tw-flex-col tw-gap-5 tw-mt-8 tw-py-10">
                        <?php $embedLink = converToEmbed($product['youtube']) ?>
                        <div class="tw-flex tw-overflow-x-auto">
                            <div class="tw-flex tw-gap-3 tw-whitespace-nowrap">
                                <?php if (isset($product['youtube'])): ?>
                                    <iframe width="300px" height="200" src="<?php echo $embedLink; ?>"
                                        title="<?php echo $product['title']; ?>" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                <?php endif; ?>
                            </div>
                        </div>

                        <a href="https://wa.me/+918827268754?text=Hi!%20I'm%20interested%20in%20your%20product%20<?php echo $product['title']; ?> "
                            target="_blank" class="btn btn-success tw-p-5">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG8Kwtz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
        integrity="sha512-k2GbDyfUoCaBzzTMn6c90nKi6raoP8Qb3NUu3urc43vtQYVYuJhxWehuFmGqhTYe/Ia4QM3ZCnTIBwVbRMRi3A=="
        crossorigin="anonymous"></script>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })

        // function openVideo(url) {
        //     // var url = "https://www.youtube.com/watch?v=" + url.src.split("/")[3];
        //     // window.open(url, '_blank');
        //     var embed = `
        //     <iframe src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        //         </iframe>
        //     `;
        //     // $('#notice').append(embed);
        //     $('#notice').css('display', 'block');
        //     console.log(url);
        // }
    </script>
</body>

</html>