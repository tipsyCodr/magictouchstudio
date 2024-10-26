<?php
function breadcrumbs($title, $link)
{
    ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay" style="background-image: url('img/networking.jpg');">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2><?php echo $title; ?></h2>
                        <ul class="bread-list">
                            <li><a href="Home">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active"><?php echo $link ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <style>
        .breadcrumbs p {
            padding: 20px 10px;
        }
    </style>
    <?php
}
?>