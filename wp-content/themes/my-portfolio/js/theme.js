jQuery(document).ready(function() {
    
    jQuery('.flexslider').flexslider();
    
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




