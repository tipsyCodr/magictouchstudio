<?php require_once('couch/cms.php'); ?>
<cms:template title='Achievers' clonable="1" commentable='1'>
    <!-- <cms:editable name="achievers_title" type="text" /> -->
    <cms:editable name="achievers_image" type="image" />
    <cms:editable name="achievers_content" type="richtext" />

    <cms:folder name="tour" title="Tour Achievers" />
    <cms:folder name="car" title="Car Achievers" />
</cms:template>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/my-style.css" />

    <!-- Title -->
    <title>Bioalexis - All Achievers</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <?php require_once 'partials/head.php'; ?>

</head>

<body>

    <?php require_once 'partials/navbar.php'; ?>
    <!-- End Header Area -->

    <cms:if k_is_page>
        <!-- Single News -->
        <section class="news-single section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-main">
                                    <!-- News Head -->
                                    <div class="news-head">
                                        <img class="tw-object-contain" src="<cms:show achievers_image />" alt="#">

                                    </div>
                                    <!-- News Title -->
                                    <h1 class="news-title"> <a href="<cms:show k_page_link/>">
                                            <cms:show k_page_title />
                                        </a></h1>
                                    <!-- Meta -->
                                    <div class="meta tw-flex tw-justify-between tw-items-center">
                                        <div class="">
                                            <div class="author tw-flex tw-items-center">
                                                <a href="contact.php">
                                                    <img class='tw-object-cover' src="img/logo.png" alt="#">
                                                </a>
                                                <a class=" tw-font-bold" href="contact.php">Bioalexis Trading Pvt.
                                                    Ltd.</a>
                                            </div>
                                        </div>
                                        <div class="">
                                            <span class="date"><i class="fa fa-clock-o"></i>
                                                <cms:date k_page_date format='jS M, y' />
                                            </span>

                                        </div>
                                    </div>
                                    <!-- News Text -->
                                    <div class="news-text">
                                        <cms:show achievers_content />
                                    </div>
                                    <div class="achievers-bottom">
                                        <!-- Social Share -->
                                        <!-- Next Prev -->
                                        <ul class="tw-flex tw-justify-between ">
                                            <li class="prev"><a
                                                    class="tw-inline-block text-black border rounded px-3 py-2 tw-border-primary hover:tw-bg-primary tw-transition-all hover:tw-text-white"
                                                    href="<cms:show k_page_link prev='1'/>">Next </a>
                                            </li>
                                            <li class="next"><a
                                                    class="tw-inline-block text-black border rounded px-2 py-2 tw-border-primary hover:tw-bg-primary tw-transition-all hover:tw-text-white"
                                                    href="<cms:show k_page_link next='1'/>">Previous</a>
                                            </li>
                                        </ul>
                                        <!--/ End Next Prev -->
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="main-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget recent-post">
                                <h3 class="title">Recent post</h3>
                                <!-- Single Post -->
                                <cms:pages>
                                    <div class="single-post">
                                        <div class="image">
                                            <img src="<cms:show achievers_image />" alt="#">
                                        </div>
                                        <div class="content">
                                            <h5><a href="<cms:show k_page_link />">
                                                    <cms:show k_page_title />
                                                </a></h5>
                                            <ul class="comment">
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <cms:date k_page_date format='jS M, y' />
                                                </li>
                                                <li><i class="fa fa-commenting-o" aria-hidden="true"></i>
                                                    <cms:show k_comment_count />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </cms:pages>
                                <!-- End Single Post -->
                            </div>
                            <!--/ End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Single News -->

        <cms:else />
        <cms:embed 'achievers.php' />

    </cms:if>

    <?php require_once 'partials/scripts.php'; ?>
    <?php require_once 'partials/footer.php'; ?>
</body>

</html>
<?php COUCH::invoke(); ?>