$(document).ready(function(){
	newsletterSubmit();

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

	Close off-canvas on link click

	--------------------*/

	$(".off-canvas-list a").on("click.toggleCanvas", function(){
		$(".exit-off-canvas").click();
	});
});

function newsletterSubmit() {
		$("#mc-embedded-subscribe").click(function(e){
			e.preventDefault();
			if ( validateEmail($(this).closest("form").find("input[type='email']")) ) {
				asyncSubmit($(this).closest("form"));
				$(this).closest("#mc_embed_signup").fadeOut(300, function(){
					$(this).closest(".newsletter").find(".newsletter-thank-you").fadeIn(300);
				});
			} else {
				$(this).closest(".newsletter").find(".newsletter-validate").slideDown(300);
			}
		});
	}

// Asynchronously posts form data
function asyncSubmit(selector){
	var formTarget = $(selector).attr("action"); // we don't end up using this
	var urlPath = window.location.origin + '/wp-content/themes/onthehub/oth-includes/subscribe_omnisend.php';
	//var urlPath = 'js/subscribe_omnisend.php';

	var data = {
		'EMAIL' : selector.find("#mce-EMAIL").val(),
		'FNAME' : selector.find("#mce-FNAME").val(),
		'USERGROUP' : selector.find("#USERGROUP").val(),
		'SIGNUP' : selector.find("#mce-SIGNUP").val(),
		'USER' : '5feb81d24c7fa4787cb9b4e8',
		'LISTID' : '5feb81d24c7fa4787cb9b4e8',
		'SERVER' : '5feb81d24c7fa4787cb9b4e8',
	};

	$.ajax({
		type : 'POST',
		url : urlPath,
		data : data,


		// uncomment this if something is going wrong
		error: function(jqxhr, status, exception) {
			console.log('Exception: ', exception);
		},
		success: function(result) {
			console.log('That worked -- sent to ' + urlPath);
			console.log('Result: ', result);
			// great! data posted!
		}
	}).fail( function() {
		console.log("Something went wrong.");
	});
}
function validateEmail(selector){
	var email = $(selector).val();
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}