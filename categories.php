<?php
$category = $_GET['category'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php require_once 'partials/head.php' ?>

</head>

<body>
    <?php require_once 'partials/navbar.php' ?>

    <h1 class="tw-font-bold tw-text-3xl text-center tw-py-5"><?php echo $category ?> Products</h1>

    <div class=" tw-flex tw-gap-10 flex-col tw-mx-auto tw-justify-center tw-items-center md:tw-flex-row">
        <div class="item tw-flex tw-flex-col sm:tw-flex-row tw-flex-wrap tw-gap-3 tw-justify-center tw-items-center">
            <?php
            $products = array(
                array('name' => 'Alexis Trufit', 'price' => '1600', 'img' => 'alexis trufit.jpg', 'category' => 'Personal Care', 'description' => 'Alexis Trufit is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Trufit is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Trufit is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Trufit is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=mbAu5Iaa6rc&t=79s'),
                array('name' => 'Mr. Alexis ', 'price' => '933', 'img' => 'mr_alexis.jpg', 'category' => 'Personal Care', 'description' => 'Mr. Alexis is a dietary supplement in the form of a tablet that is designed for men. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Mr. Alexis is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Mr. Alexis is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Mr. Alexis is a great choice for men who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=Iuq5JgmDWdw&t=36s'),
                array('name' => 'Alexis Vama', 'price' => '1350', 'img' => 'alexi8.png', 'category' => 'Personal Care', 'description' => 'Alexis Vama is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Vama is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Vama is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Vama is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=AY797RWRWfY&t=37s'),
                array('name' => 'Chloro Alexis', 'price' => '2499', 'img' => 'chloro.png', 'category' => 'Personal Care', 'description' => 'Chloro Alexis is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Chloro Alexis is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Chloro Alexis is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Chloro Alexis is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/LoXbYBgj4MI?si=1Gcll1iRBX6FMWOQ'),
                array('name' => 'Alexis Juice', 'price' => '2500', 'img' => 'omega-rich.png', 'category' => 'Personal Care', 'description' => 'Alexis Juice is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Juice is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Juice is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Juice is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/QDgtI3S0zf8?si=mN3D3EIWHKZ0c-Pr'),
                array('name' => 'Alexis Dibo', 'price' => '3200', 'img' => 'dibo.png', 'category' => 'Personal Care', 'description' => 'Alexis Dibo is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Dibo is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Dibo is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Dibo is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/EZ_ZHHHOPzw?si=ZBeQLSVqqJvD5VR7'),
                array('name' => 'Ortho Cap', 'price' => '684', 'img' => 'ortho capsule.jpg', 'category' => 'Personal Care', 'description' => 'Ortho Cap is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Ortho Cap is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Ortho Cap is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Ortho Cap is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=qhiLRk5LCCs&t=7s'),
                array('name' => 'Ortho Oil', 'price' => '249', 'img' => 'oil.jpg', 'category' => 'Personal Care', 'description' => 'Ortho Oil is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Ortho Oil is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Ortho Oil is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Ortho Oil is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=qhiLRk5LCCs&t=7s'),
                array('name' => 'Diffender', 'price' => '749', 'img' => 'defender.png', 'category' => 'Personal Care', 'description' => 'Diffender is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Diffender is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Diffender is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Diffender is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/CND36CGCSBk?si=oE1F9qGmtn8kq2zK'),
                array('name' => 'Sliming Tea', 'price' => '699', 'img' => 'vema-tea.jpg', 'category' => 'Personal Care', 'description' => 'Sliming Tea is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Sliming Tea is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Sliming Tea is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Sliming Tea is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/6WWNv2r0U9U?si=J4HVphqgRzi3nabU'),
            );
            foreach ($products as $product) {
                ?>

                <div class="item rounded tw-p-2 tw-shadow  tw-min-w-[300px] tw-bg-white tw-bg-opacity-70 tw-transition tw-duration-300 hover:tw-bg-opacity-100"
                    onclick="location.href='product-details.php?title=<?php echo $product['name']; ?>&img=<?php echo $product['img']; ?>&description=<?php echo $product['description']; ?>&price=<?php echo $product['price']; ?>&category=<?php echo $product['category']; ?>&youtube=<?php echo $product['youtube']; ?>'">
                    <div class="p-img tw-p-2 tw-relative">
                        <img class="tw-object-contain tw-w-full hover:tw-bg-opacity-40 tw-object-center"
                            style='height: 200px;' src="img/products/plain/<?php echo $product['img']; ?>" height="200"
                            alt="">
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-gap-5 tw-items-center tw-justify-center tw-opacity-0 hover:tw-opacity-100 tw-transition tw-duration-300">
                            <div class="">
                                <a href="#" class="tw-bg-white tw-rounded-full tw-p-2 tw-shadow ">
                                    <i style="" class="tw-text-xl icofont-eye"></i>
                                </a>
                            </div>
                            <div class="">
                                <a href="#" class="tw-bg-white tw-rounded-full tw-p-2 tw-shadow">
                                    <i class="tw-text-xl icofont-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text tw-text-center">
                        <p class="tw-font-normal tw-text-black tw-text-md tw-text-center">
                            <?php echo $product['name']; ?>
                        </p>
                        <!-- <p class="tw-font-bold tw-text-green-600  tw-text-sm tw-text-center">
                            Rs. <?php echo $product['price']; ?>
                        </p> -->
                        <small class=" tw-mx-auto tw-text-center tw-w-full">Inclusive of all taxes</small>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>

    </div>
    <?php require_once 'partials/footer.php'; ?>
    <?php require_once 'partials/scripts.php'; ?>
</body>

</html>