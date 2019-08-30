<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta id="Viewport" name="viewport" width="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="description" content="Download IBM SPSS statistical analysis and data mining software at up to 97% off, including Statistics 26, Amos 26, and versions 25, 24, and 23 are also available.">
    <title> IBM SPSS Software Discounts for Students &amp; Faculty | OnTheHub</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/viewport.js"></script>
    <script src="js/jquery.form.js"></script>        
    <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <?php 
        /*-=-=-=-=-=-=-=-=-=- CUSOMIZE YOUR ACCOUNTS/VARIABLES AS NEEDED =-=-=-=-=-=-=-=*/

      

        /* Block names: name them what you want them to show up in google analytics */ 
        $blocks = array(
        /*Block 1*/   'Introduction',         
        /*Block 2*/   'SPSS-Statistics',
        /*Block 3*/   'SPSS-PreviousVersions',
        /*Block 4*/   'SPSS-Amos',
        /*Block 6*/   //'SPSS-Data-Collection',
        );


        /*~~~~~~~~~ Google analytics events ~~~~~~~~~~*/

        // Google analytics command are sent in the format (event, category, action) -- old
        // According to Katie and Angie, we send anaytics like so ('Landing Page 2014', 'Landing Page 2014 - Navigation', 'Landing Page 2014 - Navigation - Header click - Intro')
        // You can set the general name of the landing page here
        $gaEvent = "SPSS LP";

        $counter = 0;

        include 'config.php';
    ?>
  </head>

  <body>
  <div class="off-canvas-wrap">

          <!-- INCLUDE Header -->
         
          <?php  
                include 'header.php';
          ?>
          
          <div class="inner-wrap">

          <!-- INCLUDE First Band  --> 
         
          <?php  
                include 'content-overlay-video.php';
                $counter++;
          ?>

          <div class="show-for-large-up down-arrow">
            <a onclick="tib('#SPSS-Statistics', '<?php echo $gaEvent; ?>', '<?php echo $gaEvent; ?> - Navigation', '<?php echo $gaEvent; ?> - Navigation - Down Arrow');"><img class="round-button" src="img/arrow.png" style="margin-top:-10px;" /></a>
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

          <!-- INCLUDE Third Band -->
         

          <!-- INCLUDE Fourth Band -->
         
          <?php  
                //include 'content-spss-data-collection.php';
                //$counter++;
          ?>

          <!-- INCLUDE THE FOOTER AND SUBFOOTER -->
           <?php  
                include 'footer/footer.php';
			  
			  	// include 'dtd-footer.php'; 
           ?> 

      </div>
  </div>


   <!-- INCLUDE TRACKING -->
   <?php  
        include 'tracking.php';
   ?>
    
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='USERGROUP';ftypes[1]='text';fnames[2]='SIGNUP';ftypes[2]='text';fnames[3]='FNAME';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <script src="js/waypoints.min.js"></script>
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
