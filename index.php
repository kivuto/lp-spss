<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta id="Viewport" name="viewport" width="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title>Why, this is just an awesome block style landing page template</title>
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
        /*Block 2*/   'Block2',
        /*Block 3*/   'Block3',
        /*Block 4*/   'Block4',
        /*Block 5*/   'Block5',
        /*Block 6*/   'Block6',
        /*Block 7*/   'Block7',
        /*Block 8*/   'Block8',
        /*Block 9*/   'Block9',
        /*Block 10*/   'Block10',
        /*Block 11*/   'Block11',
        /*Block 12*/   'Last block',
        );


        /*~~~~~~~~~ Google analytics events ~~~~~~~~~~*/

        // Google analytics command are sent in the format (event, category, action)
        // According to Katie and Angie, we send anaytics like so ('Landing Page 2014', 'Landing Page 2014 - Navigation', 'Landing Page 2014 - Navigation - Header click - Intro')
        // You can set the general name of the landing page here
        $gaEvent = "Landing Page 2014";

        $counter = 0;

        include 'config.php';
    ?>

  <!-- IE8 Styling fixes -->
    
  <!--[if IE 8]>
  <style>
      .mainContent { text-align: center; }
      .mainContent img { padding: 10px 0px; }
      .button { width: 45%; margin-left: 30px; padding-top: 6px !important;}
      p { padding: 10px; }
      .title { padding-left: 30% !important; text-align: left !important; }
      .small-3 { width: 100px !important; display: table-cell !important; }
      .small-4 { width: 400px !important; display: table-cell !important; padding: 15px 0px 0px 40px; }
      .large-offset-3 { padding: 0px 0px 0px 35%; }
  </style>
  <![endif]-->
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
                include 'content-simple-expand.php';
                $counter++;
          ?>

          <!-- INCLUDE First Band  --> 
         
          <?php  
                include 'content-overlay-video.php';
                $counter++;
          ?>


          <!-- INCLUDE Second Band  --> 
         
          <?php  
                include 'content-orbitslider-headline-1.php';
                $counter++;
          ?>


          <!-- INCLUDE Third Band  --> 
         
          <?php  
                include 'content-orbitslider-headline-2.php';
                $counter++;
          ?>


          <!-- INCLUDE Fourth Band  --> 
         
          <?php  
                include 'content-orbitslider-CTA.php';
                $counter++;
          ?>

         
          <!-- INCLUDE Fifth Band -->
         
          <?php  
                include 'content-headline-cta.php';
                $counter++;
          ?>

          <!-- INCLUDE Sixth Band  --> 
         
          <?php  
                include 'content-email-cta.php';
                $counter++;
          ?>


          <!-- INCLUDE Sixth Band  --> 
         
          <?php  
                include 'content-customers.php';
                $counter++;
          ?>

          <!-- INCLUDE rurturtyrtand  --> 
         
          <?php  
                include 'content-headline-circles.php';
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
                     include 'content-img-copy-grid.php';
                     $counter++;
                  }
              }
              else {
                  include 'content-img-copy-grid.php';
                  $counter++;
              }
          ?>

          <!-- INCLUDE Third Band -->
         
          <?php  
                include 'content-img-left.php';
                $counter++;
          ?>

          <!-- INCLUDE Fourth Band -->
         
          <?php  
                include 'content-img-right.php';
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
