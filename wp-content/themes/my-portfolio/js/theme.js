jQuery(document).ready(function($) {
	$('.flexslider').flexslider();
});

jQuery("#logo").hide().fadeIn(1000);

/* ==========================================================================
   Lightbox
   ========================================================================== */
var $overlay = jQuery('<div id="overlay"></div>');
var $image = jQuery('<div class="container"><div class="col-md-10 col-md-offset-1"><img></div></div>');
//open lightbox when image is clicked
jQuery(".project-images a").click(function(event) {
    event.preventDefault();
    $overlay.append($image);
    jQuery("body").append($overlay);
    jQuery("#overlay img").attr("src", jQuery(this).attr("href"));
    $overlay.fadeIn("fast");
});

$overlay.click(function() {
    $overlay.hide();
});

    
