<!-- START GOOGLE ANALYTICS.JS -->
    <script> 
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); 

    
      ga('create', '<?php echo $universal_analytics; ?>', '<?php echo $universal_analytics_name; ?>');
      ga('require', 'displayfeatures');
      ga('send', 'pageview'); 
    </script>
    <!-- END GOOGLE ANALYTICS.JS -->

    <!-- START GOOGLE UMBRELLA ANALYTICS -->
    <script type="text/javascript">
        var _gaq = _gaq || []; 
        var pluginUrl = 
        '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
         _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
        _gaq.push(['_setAccount', '<?php echo $classic_analytics_a; ?>']); 
        _gaq.push(['_trackPageview']); 
        
        /* TRACK OTH UMBRELLA START */ 
        _gaq.push(['b._setAccount', '<?php echo $classic_analytics_b; ?>']); 
        _gaq.push(['b._setDomainName', '<?php echo $universal_analytics_name; ?>']); 
        _gaq.push(['b._trackPageview']); 
        /* TRACK OTH UMBRELLA END */ 
        
        (function() { var ga = document.createElement('script'); 
        ga.type = 'text/javascript'; 
        ga.async = true; 
        
        // Use this until we have changed our privacy Policy
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        // Replace the line above with this once the provacy policy is in place for
        // ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js'; 
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();
    </script>
    <!-- END GOOGLE UMBRELLA ANALYTICS -->

  
    
    <!-- AddThis Smart Layers BEGIN -->
    <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52ec0f2020a9f502"></script>
    <script type="text/javascript">
     addthis.layers({
       'theme' : 'transparent',
       'share' : {
         'position' : 'left',
         'numPreferredServices' : 5
       }, 
       'follow' : {
         'services' : [
           {'service': 'facebook', 'id': 'onthehub.network'},
           {'service': 'twitter', 'id': 'OnTheHub'},
           {'service': 'google_follow', 'id': '115290003144094460033'},
           {'service': 'pinterest', 'id': 'onthehub'}
         ]
       }   
     });
    </script>
    <!-- AddThis Smart Layers END -->


    <!-- BUTTON TRACKING -->
    <script type="text/javascript">
    //tib = Track In Bound
    function tib(link, category, action, label) {  
        try { 
        // NEW Analytics command
        ga('send', 'event', category, action, label);
        // OLD Analytics command for OTH Umbrella
        _gaq.push(['_trackEvent', category, action, label]);
        $('html, body').animate({scrollTop:$(link).position().top - 50 }, 'slow');
        } catch(err){}
      }
      // <a onclick="tib('.minitab17', 'Minitab LP v2', 'Minitab LP v2 - Onpage', 'Minitab LP v2 - Onpage - Menu1 - Minitab');">link</a>
   
      //tob = Track Out Bound   
      function tob(link, category, action, label) {  
        try { 
        // NEW Analytics command
        ga('send', 'event', category, action, label);
        // OLD Analytics command for OTH Umbrella
        _gaq.push(['_trackEvent', category, action, label]);
        } catch(err){}
         
        setTimeout(function() {
        document.location.href = link.href;
        }, 100);
      }
      //<a href="link.htm" onClick="tob(this, 'Minitab LP v2', 'Minitab LP v2 - Clickthrough', 'Minitab LP v2 - Clickthrough - Minitab Rent Button'); return false;">link</a>   
    </script>
    <!-- END BUTTON TRACKING --> 

    <!-- Transferring PHP variable to javascript -->
    <script>
        var gaEvent = "<?php echo $gaEvent; ?>";
    </script>

    <!-- SIMPLY CAST TRACKING PIXEL -->
    <img src='http://simplycast.us/mUr6' style="visibility: hidden;height: 1px;width: 1px;float: left;">