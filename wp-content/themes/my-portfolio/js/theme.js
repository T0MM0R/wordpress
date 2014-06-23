jQuery(document).ready(function($) {
	$('.flexslider').flexslider();
});

jQuery("#logo").hide().fadeIn(1000);

/* ==========================================================================
   Lightbox
   ========================================================================== */
var $overlay = jQuery('<div id="overlay"></div>');
var $image = jQuery('<img>');
//open lightbox when image is clicked
jQuery("#gallery a").click(function(event) {
    event.preventDefault();
    $overlay.append($image);
    jQuery("body").append($overlay);
    $image.attr("src", jQuery(this).attr("href"));
    $overlay.fadeIn("fast");
});

$overlay.click(function() {
    $overlay.hide();
});

    
