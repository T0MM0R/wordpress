

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





