<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta id="Viewport" name="viewport" width="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="description" content="Download IBM SPSS statistical analysis and data mining software at up to 97% off, including Statistics 28, Amos 28, and versions 27, 26, and 25 are also available.">
    <title> IBM SPSS Software Discounts for Students &amp; Faculty | OnTheHub</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
  <script src=https://www.googleoptimize.com/optimize.js?id=OPT-TKZJGS6></script>
  <script src="https://kit.fontawesome.com/b0eeb9e565.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/viewport.js"></script>
    <?php
        /*-=-=-=-=-=-=-=-=-=- CUSOMIZE YOUR ACCOUNTS/VARIABLES AS NEEDED =-=-=-=-=-=-=-=*/



        /* Block names: name them what you want them to show up in google analytics */
        $blocks = array(
        /*Block 1*/   'Introduction',
        /*Block 2*/   'SPSS-Statistics',
        /*Block 3*/   'SPSS-PreviousVersions',
        /*Block 4*/   'SPSS-Amos',
        );


        /*~~~~~~~~~ Google analytics events ~~~~~~~~~~*/

        $gaEvent = "SPSS LP";

        $counter = 0;

        include 'config.php';
	  	include 'tracking.php';
    ?>
  </head>

  <body>
  <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHBF2F"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
  <div class="off-canvas-wrap">

          <!-- INCLUDE Header -->

          <div class="inner-wrap">

          <!-- INCLUDE First Band  -->

          <?php
                include 'content-overlay-video.php';
                $counter++;
          ?>

          <div class="show-for-large-up down-arrow">
            <a href="#SPSS-Statistics"><img class="round-button" src="img/arrow.png" style="margin-top:-10px;" /></a>
          </div>

          <!-- INCLUDE First Band  -->
          <?php
                include 'content-headline-cta.php';
                $counter++;
          ?>

          <!-- INCLUDE Headline Band  -->

          <?php
                include 'content-spss-prev-versions.php';
                $counter++;
          ?>


          <!-- INCLUDE Second Band -->

          <?php
                include 'content-spss-amos.php';
                $counter++;
          ?>

      </div>
  </div>


    <script src="js/waypoints.min.js"></script>
    <script src="js/simple-expand.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.offcanvas.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
