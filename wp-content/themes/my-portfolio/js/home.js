var windowPosition;
var headerChangePosition;
var headerState;

jQuery(document).scroll(function(){
    
    
    headerChangePosition = Math.floor(jQuery("#content").offset()['top']);
    windowPosition = jQuery(document).scrollTop();
    
    if (windowPosition >= headerChangePosition ) {
        if ( "solid" === headerState ) {
            return;
        } else {
            jQuery("#nav").animate({
                backgroundColor: "rgba(50, 50, 50, 0.8)"
            }, 200, 'swing', function(){
                jQuery("#nav").css({
                    boxShadow: "rgba(0, 0, 0, 0.8) 2px 2px 5px",
                    borderBottom: "solid 1px #000"
                });
            });
            jQuery(".home #logo h2").hide();
            headerState = "solid";
        }
    } else {
        if ( "transparent" === headerState ) {
            return;
        } else {
            jQuery("#nav").css({
                    boxShadow: "none",
                    borderBottom: "none"
                }).animate({
                    backgroundColor: "transparent"
                }, 200, 'swing');
                
            jQuery(".home #logo h2").show();
            headerState = "transparent";
        }
    }
});