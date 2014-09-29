jQuery(document).ready(function($) {
	$('.flexslider').flexslider();
});

jQuery("#logo").hide().fadeIn(1000);

blueimp.Gallery(
    document.getElementById('gallery').getElementsByTagName('a'),
    {
        container: '#blueimp-gallery-carousel',
        carousel: true,
        startSlideshow: false
    }
);

    
