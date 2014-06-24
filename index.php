<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta id="Viewport" name="viewport" width="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title>IBM SPSS software discounts for students and faculty | OnTheHub</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5"/>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/viewport.js"></script>
    <script src="js/jquery.form.js"></script>        
    <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <?php 
        /*-=-=-=-=-=-=-=-=-=- Se - CUSOMIZE YOUR ACCOUNTS/VARIABLES AS NEEDED =-=-=-=-=-=-=-=*/

        /* ADROLL */
        $adroll_segment_name = "landing-page-name-here"; 
        

        /* Block names: name them what you want them to show up in google analytics */ 
        $blocks = array(
        /*Block 1*/   'Block1', 
        /*Block 2*/   'SPSS-Statistics',
        /*Block 3*/   'SPSS-Amos',
        /*Block 4*/   'SPSS-Modeler',
        /*Block 5*/   'SPSS-Data-Collection',
        );


        /*~~~~~~~~~ Google analytics events ~~~~~~~~~~*/

        // Google analytics command are sent in the format (event, category, action)
        // According to Katie and Angie, we send anaytics like so ('Landing Page 2014', 'Landing Page 2014 - Navigation', 'Landing Page 2014 - Navigation - Header click - Intro')
        // You can set the general name of the landing page here
        $gaEvent = "SPSS LP";

        $counter = 0;

        include 'config.php';
    ?>
  </head>

  <body>
  <div class="off-canvas-wrap">
      <div class="inner-wrap">

          <!-- INCLUDE Header -->
         
          <?php  
                include 'header.php';
          ?>
         
          <!-- INCLUDE First Band  --> 
         
          <?php  
                include 'content-overlay-video.php';
                $counter++;
          ?>
          <div class="show-for-large-up down-arrow">
            <a class="round-button" onclick="tib('#SPSS-Statistics', '<?php echo $gaEvent; ?>', '<?php echo $gaEvent; ?> - Navigation', '<?php echo $gaEvent; ?> - Navigation - Down Arrow');">&#x25BC;</a>
          </div>  

          <!-- INCLUDE First Band  --> 
                   
          <?php  
                include 'content-headline-cta.php';
                $counter++;
          ?>
         
         
          <!-- INCLUDE Second Band -->
         
          <?php  
              
              if(isset($_SERVER['HTTP_REFERER'])) {
                  $server = $_SERVER['HTTP_REFERER'];
                  $last_page = GetHostByName($server);
                  if(strpos($last_page,"minitab.com"))
                  {
                    
                  } else {
                     include 'content-spss-amos.php';
                     $counter++;
                  }
              }
              else {
                  include 'content-spss-amos.php';
                  $counter++;
              }
          ?>

          <!-- INCLUDE Third Band -->
         
          <?php  
                include 'content-spss-modeler.php';
                $counter++;
          ?>

          <!-- INCLUDE Fourth Band -->
         
          <?php  
                include 'content-spss-data-collection.php';
                $counter++;
          ?>

          <!-- INCLUDE THE FOOTER AND SUBFOOTER -->
           <?php  
                include 'footer/footer.php';
           ?> 

      </div>
  </div>


   <!-- INCLUDE TRACKING -->
   <?php  
        include 'tracking.php';
   ?>
    

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
