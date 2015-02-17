var windowPosition;
var headerChangePosition;
var headerState;

jQuery(document).ready(function() {
    
    jQuery('.flexslider').flexslider({
        controlNav: false,
        directionNav: false
    });
    
    //add html for lightbox
    var $overlay = jQuery('<div id="overlay"></div>');
    var $image = jQuery('<img>');
    $overlay.append($image);
    jQuery('article img').click(function(event){
        
        event.preventDefault();
        jQuery("body").append($overlay);
        $image.attr("src", jQuery(this).parent().attr("href"));
        $overlay.fadeIn("fast");
        $overlay.click(function(){
            $overlay.hide();
        });
        
    });
    
    

    
});

jQuery(window).load(function(){
    
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
    
});

jQuery(document).scroll(function(){
    
    
    headerChangePosition = Math.floor(jQuery("#content").offset()['top']);
    windowPosition = jQuery(document).scrollTop();
    
    if (windowPosition >= headerChangePosition ) {
        headerState = "solid";
        if ( "solid" === headerState ) {
            return;
        } else {
            jQuery("#nav").animate({backgroundColor: "rgba(50, 50, 50, 1)"}, 200, 'swing');
            jQuery("#logo h2").hide();
        }
    } else {
        headerState = "transparent";
        if ( "transparent" == headerState ) {
            return;
        } else {
            jQuery("#nav").animate({backgroundColor: "transparent"}, 200, 'swing');
            jQuery("#logo h2").show();
        }
    }
});

jQuery("#logo").hide().fadeIn(1000);





