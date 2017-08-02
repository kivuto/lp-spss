$(document).ready(function(){
	/*--------------------

	Simple expand code

	--------------------*/
                             
	$('.expander').simpleexpand();
    
    $('.expander').click(function() { 
        $(".content").not($(this).parent().next()).hide();  // hide any other dropdown 
        $(".expander").not($(this)).addClass("collapsed").removeClass("expanded");                  // that is already open
        
        if (($("#Introduction").hasClass("expand-height") && $(this).attr("id") == "country-exp") || ($(this).hasClass("academic-status") && $("#Introduction").hasClass("expand-height"))) { 
            $("#Introduction").removeClass("expand-height"); }
        else if ($(this).attr("id") == "country-exp") { 
            $("#Introduction").addClass("expand-height"); }
        
        if ($(this).find("i").hasClass("fa-rotate-90")) {       // rotate the font-awesome icons
            $(this).find("i").removeClass("fa-rotate-90"); }
        else { $(this).find("i").addClass("fa-rotate-90"); }
        
        if ($("i").not($(this).find("i")).hasClass("fa-rotate-90")) {
            $("i").not($(this).find("i")).removeClass("fa-rotate-90"); }
    });
	
	
	
	$(".hover-circle").hover(function(){
		$(".hover-circle").not(this).removeClass("hover");
		$(this).toggleClass("hover");
	});
	$(".hover-grp").mouseleave(function(){
		$(".hover-circle.default").addClass("hover");
	});


	/*--------------------

	FancyBox Init

	--------------------*/
	
	$(".vimeo").fancybox({
	  type: 'iframe',
	  fitToView : true,
	  autoSize: true,
	  helpers: {
            media: {}
        }
	});

	/*--------------------

	Close off-canvas on link click

	--------------------*/

	$(".off-canvas-list a").on("click.toggleCanvas", function(){
		$(".exit-off-canvas").click();
	});

	/*--------------------

	Validate the form submission

	--------------------*/

	$("form").submit(function(e){
		
		// If cross-domain AJAX may be performed without an error, do so
		var email = $('#EmailElement_0_input').val();
	    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    var valid = re.test(email);
	    if(valid==true){
			
			if($.support.cors){
				e.preventDefault();
				asyncSubmit("form");
				console.log('Should have been animated innerHTML');
				$('.email input.button').css("opacity", "0");
	    		$('.row.email').css("opacity", "0");
	    		$('.row.thank-you').css("opacity", "1.0").css("transform","translateY("+ -155 +"px)");
				$('form').css('visibility','hidden');
				// Track the successful clickthrough
				tib('', 'Student Advantage LP', 'Student Advantage LP - Clickthrough', 'Student Advantage LP - Clickthrough - Email - Submit');
				document.getElementById('twitter-pixel').innerHTML = '<script src="//platform.twitter.com/oct.js" type="text/javascript"></script><script type="text/javascript">twttr.conversion.trackPid("l4f2m");</script><noscript><img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l4f2m&p_id=Twitter" /><img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l4f2m&p_id=Twitter" /></noscript>';
				    console.log('Should have added innerHTML');
			}else{
				return true;
			}
			// End if Cors
		
		
		}else{
			$('#EmailElement_0_input').animate({
	    		opacity : '.5',
	    	},200).animate({
	    		opacity : '1',
	    	},200);
	    	return false;
		}
	});
	// end on click

	function asyncSubmit(selector){
		var formTarget = $(selector).attr("action");

		$.post(formTarget, $(selector).serialize());
	}


	// end async


	/*--------------------

	Scroll event handlers Add-this follow buttons snap to top

	--------------------*/

	/* Scroll event handler */
    $(window).bind('scroll',function(e){
    	var scrolled = $(document).scrollTop();
		if (scrolled >= 69)
		{	
			$('.at4-follow').css('position', 'fixed');
			$('.at4-follow-inner').css('top', 0);
			$('.at-follow-open-control').css('top', 0);
			$('.at-follow-open-control').css('position', 'fixed');
		} else {
			$('.at4-follow').css('position', 'absolute');
			$('.at4-follow-inner').css('top', 69);
			$('.at-follow-open-control').css('top', 69);
			$('.at-follow-open-control').css('position', 'absolute');
		}
		stickyNav();  
    });

    /*--------------------

	Sticky header bar

	--------------------*/
	// Adding the class 'firstRow' to the first main content block
	$('.mainContent').eq(0).addClass('firstRow').end();

	var stickyNavTop = $('.subHeader').offset().top;  
	
	var stickyNav = function(){  
		var scrollTop = $(window).scrollTop();  

		// Statement to set value for stickynav when not rendered in mobile
		if (stickyNavTop == 0 && scrollTop == 0) { 
			stickyNavTop = 70;
		}

		if (scrollTop >= stickyNavTop) { 
			$('.firstRow').addClass('stick-padding');  
		    $('.subHeader').addClass('snapNav'); 
		} 
		else {  
		    $('.subHeader').removeClass('snapNav');
		    $('.firstRow').removeClass('stick-padding'); 
		}  
	};  
	  
	stickyNav();  
	  
	$(window).scroll(function() {  
	    stickyNav();  
	});  


	/*--------------------

	jQuery Waypoint analytics

	--------------------*/

	// Determining the second last and last blocks
	var lastblock = $(".mainContent").eq(-1).attr('data-block');
	var secondlblock = $(".mainContent").eq(-2).attr('data-block');
	
	// Create Array for unique 
	var i = new Array;
	$('[data-block]').each(function(){ un = $(this).attr('data-block'); i[un]  = 0; });
			
	// Track blocks that come into the view port
	$('[data-block]').waypoint(function(direction) 
	{
		if(direction === 'down') 
		{
			un = $(this).attr('data-block');
			if(i[un] === 0){ 
				scrollAnalytics('Unique', $(this).attr('data-block'), direction); } // UNIQUE VIEWS
			i[un] += 1;
			
			scrollAnalytics('Total', $(this).attr('data-block'), direction); // TOTAL VIEWS
		}
	},{
		offset: function() { return -$(this).height(); }  // Only fires the waypoint at the BOTTOM of the content section 
    })
    .waypoint(function(direction) 
    {
		if(direction === 'up')
		{
			scrollAnalytics('Total', $(this).attr('data-block'), direction); // TOTAL VIEWS.
		}
		// THIS IS A SPECIAL CASE TO TRACK THE SECOND TO LAST BLOCK, AS THE BOTTOM CANNOT HIT TOP OF VIEWPORT
		if(direction === 'down' && $(this).attr('data-block') === secondlblock) 
		{
			un = $(this).attr('data-block');
			if(i[un] === 0){  scrollAnalytics('Unique', $(this).attr('data-block'), direction); } // UNIQUE VIEWS
			i[un]  += 1;
			
			scrollAnalytics('Total', $(this).attr('data-block'), direction); // TOTAL VIEWS
		}

	})
	///////// THIS IS A SPECIAL CASE TO TRACK THE LAST BLOCK, AS THE TOP CANNOT HIT TOP OF VIEWPORT///////
	.waypoint(function(direction) 
	{
		if(direction === 'down' && $(this).attr('data-block') === lastblock) 
		{
			un = $(this).attr('data-block');
			if(i[un] === 0){ scrollAnalytics('Unique', $(this).attr('data-block'), direction);}  // UNIQUE VIEWS
			i[un]  += 1;
			
			scrollAnalytics('Total', $(this).attr('data-block'), direction);  // TOTAL VIEWS
		}
	},{
		offset: 340 // Fires the waypoint 200px above of the content section 
	});
	
	// End
	function scrollAnalytics (type, content, direction) {
		/* NEW Analytics command */
		ga('send', 'event', gaEvent, gaEvent + ' - Content seen (' + type + ')', gaEvent + ' - Content seen - ' + content);
		console.log( gaEvent + ', ' + gaEvent + ' - Content seen (' + type + ') , ' + gaEvent + ' - Content seen - ' + content);
		/* OLD Analytics command for OTH Umbrella */
		_gaq.push(['_trackEvent', gaEvent, gaEvent + ' - Content seen (' + type + ')', gaEvent + ' - Content seen - ' + content]);
	}

});