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
                backgroundColor: "rgba(50, 50, 50, 0.8)",
                borderBottomColor: "solid 2px #000"  
            }, 200, 'swing').css({boxShadow: "rgba(0, 0, 0, 0.8) 2px 2px 5px"});
            jQuery("#logo h2").hide();
            headerState = "solid";
        }
    } else {
        if ( "transparent" === headerState ) {
            return;
        } else {
            jQuery("#nav").animate({backgroundColor: "transparent"}, 200, 'swing');
            jQuery("#logo h2").show();
            headerState = "transparent";
        }
    }
});

jQuery("#logo").hide().fadeIn(1000);