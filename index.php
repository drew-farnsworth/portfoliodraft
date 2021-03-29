<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DREW FARNSWORTH</title>

  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="node_modules/baguettebox.js/dist/baguetteBox.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>

  <?php include ("include/nav.php") ?>

  <!-- END OF NAV -->

  <?php include ("include/banner.php") ?>

<!-- END OF BANNER -->

  <main class="padding">
  <?php include ("include/about.php") ?>

    <!-- END OF ABOUT -->

    <?php include ("include/portfolio.php") ?>

    <!-- END OF PORTFOLIO -->

    <?php include ("include/gallery.php") ?>

    <!-- END OF GALLERY -->

    <?php include ("include/soccer.php") ?>

    <!-- END OF SOCCER -->

    <?php include ("include/contact.php") ?>

    
  </main> <!-- END OF MAIN -->

  <?php include ("include/footer.php") ?>
  
  <!-- END OF FOOTER -->

  

  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  


  <script src="node_modules/scrollreveal/dist/scrollreveal.js"></script>
  <script src="js/scroll.js"></script>
  <script src="node_modules/owl.carousel/dist/owl.carousel.js"></script>
  <script src="node_modules/baguettebox.js/dist/baguetteBox.js"></script>
  <script src="js/form.js"></script>
  <script>
    $('document').ready(function(){
        $('.owl-carousel').owlCarousel({
            margin: 20,
            loop: true,
            autoplay: true,
            dotsEach: true,
            responsive:{
                0: { items: 1},
                600: { items: 2},
                1000: {items: 3}
            }
        });
    });
</script>
<script>
        $('document').ready(function(){
            baguetteBox.run('.gallery');
        });
    </script>

</body>

</html>