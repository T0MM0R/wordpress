jQuery(document).ready(function() {
    
    jQuery('.flexslider').flexslider();
    
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

jQuery("#logo").hide().fadeIn(1000);





