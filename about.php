<?php require_once('couch/cms.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php require_once 'partials/head.php' ?>

</head>
<style>
  .section h2,
  .section h3 {
    color: #0a3b3f !important;
  }

  .Feautess p {
    color: #000 !important;
  }

  .section {
    padding: 50px 0;
  }

  hr {
    border: unset;
  }
</style>

<body>
  <?php require_once 'partials/navbar.php' ?>

  <?php breadcrumbs('About Us', 'About Us') ?>
  <!-- Start Contact Us -->

  <div onclick="document.querySelector('.popup_backdrop').style.display='none'"
    class="popup_backdrop tw-z-[1000] tw-flex tw-justify-center tw-items-center tw-bg-black tw-fixed  tw-w-full tw-h-full tw-bg-opacity-50 tw-backdrop-blur-md "
    style="top:0; display: none">
    <div class="popup tw-p-2  tw-bg-white tw-w-fit tw-h-fit">
      <div class="head flex flex-row tw-justify-between tw-items-center gap-5">
        <h2 class="tw-font-bold tw-text-black">News</h2>
        <button class="close" onclick="document.querySelector('.popup_backdrop').style.display='none'">&times;</button>
      </div>
      <cms:pages masterpage='popup.php'>
        <div class="notice">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/GSTHsbgbEaU?si=94zXL-f5J7cuf3On"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </cms:pages>
    </div>

  </div>
  <section class="contact-us section">
    <div class="container">
      <!-- Start Feautes -->
      <section class=" section" style="padding:0; padding-top: 20px;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title tw-text-center">
                <h1 class="sub-heading  tw-font-bold tw-text-2xl ">Welcome to Magic Touch Photo Studio</h1>
                  <div class="tw-flex tw-flex-col sm:tw-flex-row tw-gap-10 tw-items-center tw-justify-center">
                  <div class="tw-max-w-[500px]">
                      <p class="sub-text tw-text-white  tw-text-xl" style="text-align: justify">At Magic touch photo Studio, we take up every assignment seriously
                          and work in delivering creative results. We specialize in Baby shoot,
                          Maternity shoot, portrait photography. candids, Pre Wedding,
                          Wedding, modelling portfolio and the list goes on endlessly. We make
                          your special events even more special with our creative and amazing
                          photography that speaks!
                      </p>
                      <p class="sub-text tw-text-white tw-text-xl" style="text-align: justify">We have a decade long experience in photography, cinematography,
                          , movie making assistance such as direction, special effects etc. It all
                          depends on what our customers want and we will be on our toe to do it!
                          We are a team of 20 professionally trained individuals to cater to various
                          needs of our customer. Please Do Check our Social Media Handles for
                          Latest Updates!
                      </p>
                      <p class="sub-text tw-text-white tw-text-xl" style="text-align: justify">We believe photography and videography is a way of feeling,
                          touching and loving people! What has been photographer or
                          videographer stays forever .As life moves on and things get prioritized,
                          the photographs/ videographs are the proof that speaks whenever we
                          want to cherish the special moments! That's why we proudly say we
                          transform moments to memories.
                      </p>
                  </div>
                    <div class=" ">
                        <img src="img/logo.png"  alt="">
                    </div>
                    </div>

              </div>
            </div>
          </div>


      </section>
      <!-- End Blog Area -->




      <div class="contact-info ">
        <div class="row">
          <!-- single-info -->
          <div class="col-lg-4 col-12">
            <div class="single-info">
              <i class="icofont icofont-ui-call icofont-1x"></i>
              <div class="content">
                <h3 style="padding:0px">+91 - 6260116170</h3>


                <p style="padding:0px"><i class="icofont-envelope icofont-1x"></i> magictouch2219@gmail.com </p>
              </div>
            </div>
          </div>
          <!--/End single-info -->
          <!-- single-info -->
          <div class="col-lg-4 col-12">
            <div class="single-info">
              <i class="icofont-google-map"></i>
              <div class="content">
                <h3>  Bhilai </h3>
                <p style="padding:0;"> Kenz Tower, 2nd Floor, Above Ten 11 Restaurant, Junwani Road, Kohka, Bhilai (C.G.)</p>
              </div>
            </div>
          </div>
          <!--/End single-info -->
          <!-- single-info -->
          <div class="col-lg-4 col-12">
            <div class="single-info">
              <i class="icofont icofont-wall-clock"></i>
              <div class="content">
                <h3 style="padding:0px">Mon - Sat: 8am - 5pm</h3>
                <p style="padding:0px">Sunday Closed</p>
              </div>
            </div>
          </div>
          <!--/End single-info -->
        </div>
      </div>
    </div>
  </section>


  <!--/ End Contact Us -->
  <?php require_once 'partials/footer.php'; ?>
  <?php require_once 'partials/scripts.php'; ?>

  <!-- Google Map API Key JS -->
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
  <!-- Gmaps JS -->
  <script src="js/gmaps.min.js"></script>
  <!-- Map Active JS -->
  <script src="js/map-active.js"></script>
</body>

</html>