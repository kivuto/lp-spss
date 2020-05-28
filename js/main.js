$(document).ready(function(){
	/*--------------------

	Simple expand code

	--------------------*/
                             
	$('.expander').simpleexpand();
    
    $('.expander').click(function() { 
        $("#Introduction .content").not($(this).parent().next()).hide();  // hide any other dropdown 
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
});