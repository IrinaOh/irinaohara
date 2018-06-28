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
    <title>Gallery</title>
    <?php include('head-links.php'); ?>
  </head>
  <body>
    <?php include('header.php'); ?>
    <section class="gallery-container">
          <div class="gallery-block gallery-text-block">
            <h2>Recent Work</h2>
            <hr>
          </div>
          <!-- <div class="gallery-block">

          </div>
          <div class="gallery-block">

          </div> -->
          <div class="gallery-block">
            <img src="../images/gallery/sean.jpg" alt="a guy on the beach">
          </div>
          <div class="gallery-block">
            <img src="../images/gallery/marianne.jpg" alt="a girl smiling">
          </div>
          <div class="gallery-block">
            <img src="../images/gallery/ny.jpg" alt="street in new york">
          </div>
          <div class="gallery-block">
            <img src="../images/gallery/chris.jpg" alt="a guy with a bike">
          </div>
          <div class="gallery-block">
            <img src="../images/gallery/esteban.jpg" alt="athletic guy">
          </div>
          <!-- <div class="gallery-block gallery-text-block">
            <hr>
            <p>My style is bright and airy, I also keep my images minimally processed to keep the natural look. I love b&w images as well, it's a classy and timeless look. Some images look especially strong in b&w.</p>
          </div> -->
        </section>
    <?php include('footer.php'); ?>
  </body>
</html>
