<!-- Start portfolio -->
<section class="portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Products!</h2>
                    <!-- <img src="img/section-img.png" alt="#"> -->
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <style>

                </style>
                <div class="owl-carousel portfolio-slider">
                    <cms:pages masterpage="index.php" include_subfolders='0'>
                        <!-- <a href="<cms:show gg_image />"> -->
                        <div class="single-pf card shadow-sm h-100" style="border-radius: 10px; ">
                            <a href="products.php#<cms:show k_page_name/>">
                                <img style="width:100%;height:200px;object-fit:contain;" src="<cms:show gg_image />"
                                    title="<cms:show k_page_title />" />
                            </a>
                            <div class="card-body">
                                <h2 class=" card-title clamp-text">
                                    <cms:show k_page_title />
                                </h2>
                                <p class="card-text">
                                    <span style="font-weight:bolder;font-size:1.1rem;">
                                        ₹
                                        <cms:show price />
                                    </span>
                                    <br />
                                    <!-- <cms:show usage_application /> -->
                                </p>
                            </div>
                        </div>
                    </cms:pages>
                </div>
            </div>
        </div>
    </div>
</section>