jQuery(document).ready(function() {
    
    jQuery('.flexslider').flexslider();
    
    //add html for lightbox
    var $overlay = jQuery('<div id="overlay"></div>');
    var $image = jQuery('<img>');
    $overlay.append($image);
    jQuery('a img').click(function(event){
        
        event.preventDefault();
        jQuery("body").append($overlay);
        $image.attr("src", jQuery(this).attr("src"));
        $overlay.fadeIn("fast");
        $overlay.click(function(){
            $overlay.hide();
        });
        
    });
    
});

jQuery(document).scroll(function(){
    
    
    var headerChangePosition = Math.floor(jQuery("#content").offset()['top']) - 600;
    var windowPosition = jQuery(document).scrollTop();
    
    if (windowPosition >= headerChangePosition ) {
        jQuery("header").css({backgroundColor: "rgba(0, 0, 0, 0.8)"});
    } else {
        jQuery("header").css({backgroundColor: "transparent"});
    }
});

jQuery("#logo").hide().fadeIn(1000);

blueimp.Gallery(
    document.getElementById('gallery').getElementsByTagName('a'),
    {
        container: '#blueimp-gallery-carousel',
        carousel: true,
        hidePageScrollbars: false,
        toggleControlsOnReturn: false,
        toggleSlideshowOnSpace: false,
        enableKeyboardNavigation: true,
        closeOnEscape: false,
        closeOnSlideClick: false,
        closeOnSwipeUpOrDown: false,
        disableScroll: false,
        startSlideshow: true
    }
);




