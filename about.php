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

<body class="tw-bg-black tw-text-white">
  <?php require_once 'partials/navbar.php' ?>
  <?php breadcrumbs('About Us', 'About') ?>

  <section class="tw-py-20 tw-bg-gradient-to-b tw-from-black tw-via-zinc-950 tw-to-black">
    <div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
      <div class="tw-grid tw-grid-cols-1 lg:tw-grid-cols-2 tw-gap-16 tw-items-center tw-mb-24">
        <div>
          <span class="tw-text-pink-500 tw-text-sm tw-font-semibold tw-tracking-widest tw-uppercase">Our Story</span>
          <h2 class="tw-text-3xl md:tw-text-5xl tw-font-bold tw-mt-2 tw-mb-6 tw-bg-clip-text tw-text-transparent tw-bg-gradient-to-r tw-from-white tw-to-gray-400">
            Welcome to Magic Touch Photo Studio
          </h2>
          <div class="tw-space-y-4 tw-text-gray-300 tw-leading-relaxed tw-text-base">
            <p>
              At Magic Touch Photo Studio, we take every assignment seriously and work with immense passion to deliver breathtaking, creative results. We specialize in baby shoots, maternity shoots, portrait photography, candid moments, pre-weddings, weddings, and fashion modelling portfolios.
            </p>
            <p>
              With over a decade of hands-on experience in high-end photography, cinematography, and creative direction, our dedicated crew of 20 professionally trained visual artists brings any vision to life.
            </p>
            <p class="tw-text-pink-400 tw-font-medium">
              "We believe photography is a way of feeling, touching, and loving. What has been caught on camera stays forever."
            </p>
          </div>
        </div>
        <div class="tw-flex tw-justify-center">
          <div class="tw-relative tw-w-72 tw-h-72 md:tw-w-96 md:tw-h-96 tw-rounded-3xl tw-bg-gradient-to-tr tw-from-pink-500/20 tw-via-purple-500/10 tw-to-transparent tw-p-8 tw-border tw-border-white/10 tw-flex tw-items-center tw-justify-center tw-backdrop-blur-md">
            <img src="img/logo.png" alt="Magic Touch Studio" class="tw-max-w-full tw-max-h-full tw-object-contain">
          </div>
        </div>
      </div>

      <!-- Info Cards -->
      <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-3 tw-gap-8">
        <div class="tw-p-8 tw-rounded-2xl tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-backdrop-blur-sm hover:tw-border-pink-500/40 tw-transition-all">
          <div class="tw-w-12 tw-h-12 tw-rounded-xl tw-bg-pink-500/20 tw-text-pink-400 tw-flex tw-items-center tw-justify-center tw-mb-6 tw-text-xl">
            <i class="fa-solid fa-phone"></i>
          </div>
          <h3 class="tw-text-lg tw-font-bold tw-text-white tw-mb-2">Phone & Email</h3>
          <p class="tw-text-gray-400 tw-text-sm">+91 6260116170</p>
          <p class="tw-text-gray-400 tw-text-sm">magictouch2219@gmail.com</p>
        </div>

        <div class="tw-p-8 tw-rounded-2xl tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-backdrop-blur-sm hover:tw-border-pink-500/40 tw-transition-all">
          <div class="tw-w-12 tw-h-12 tw-rounded-xl tw-bg-purple-500/20 tw-text-purple-400 tw-flex tw-items-center tw-justify-center tw-mb-6 tw-text-xl">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <h3 class="tw-text-lg tw-font-bold tw-text-white tw-mb-2">Studio Location</h3>
          <p class="tw-text-gray-400 tw-text-sm">Kenz Tower, 2nd Floor, Above Ten 11 Restaurant, Junwani Road, Kohka, Bhilai (C.G.)</p>
        </div>

        <div class="tw-p-8 tw-rounded-2xl tw-bg-zinc-900/60 tw-border tw-border-white/10 tw-backdrop-blur-sm hover:tw-border-pink-500/40 tw-transition-all">
          <div class="tw-w-12 tw-h-12 tw-rounded-xl tw-bg-indigo-500/20 tw-text-indigo-400 tw-flex tw-items-center tw-justify-center tw-mb-6 tw-text-xl">
            <i class="fa-solid fa-clock"></i>
          </div>
          <h3 class="tw-text-lg tw-font-bold tw-text-white tw-mb-2">Working Hours</h3>
          <p class="tw-text-gray-400 tw-text-sm">Mon - Sat: 8:00 AM - 8:00 PM</p>
          <p class="tw-text-pink-400 tw-text-sm">Sunday: By Appointment</p>
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