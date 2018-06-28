<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121238823-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-121238823-2');
    </script>
    <meta charset="utf-8">
    <title>Investment</title>
    <?php include('head-links.php'); ?>
  </head>
  <body>
    <?php include('header.php'); ?>
    <section class="gallery-container">
      <div class="investment-block gallery-text-block">
        <div class="background-div gallery-text-block">
          <div class="header-text-box">
            <h2>Packages & Prices</h2>
            <hr>
          </div>
        </div>
      </div>
      <div class="investment-block">
        <div class="investment-img-holder">
            <img src="../images/chris-bw.jpg" alt="portrait">
        </div>
        <div class="investment-category">
          <h2>PORTRAITS</h2>
          <hr>
          <p>1 hour</p>
          <p>2 locations</p>
          <p>2 outfits</p>
          <hr>
          <p>$300</p>
        </div>
      </div>
      <div class="investment-block">
        <div class="investment-img-holder">
          <img src="../images/fam.jpg" alt="family">
        </div>
        <div class="investment-category">
          <h2>FAMILIES</h2>
          <hr>
          <p>1 hour</p>
          <p>1 location</p>
          <p>1 outfit</p>
          <hr>
          <p>$350</p>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </body>
</html>
