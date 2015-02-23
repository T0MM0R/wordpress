jQuery(window).load(function(){
    
    if (document.getElementById('gallery')) {
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
    }
    
});