jQuery(document).ready(function($) {
    var login = '<div id="login"><form name="loginform" id="loginform" action="http://amorphotograph.com/wp-login.php" method="post" _lpchecked="1"><p><label for="user_login">Username<br><input type="text" name="log" id="user_login" class="input" value="" size="20" autocomplete="off" style="cursor: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDiEFu6xIcAAAAXhJREFUOMvNk8FLVFEUxn/ffRdmIAla1CbBFDGCpoiQWYlBLty7UHAvEq2HYLhveDMws2/TIly6E9SdIEj+AVYgRaTgXhe2C968x2nhTOjow8pNZ/ede/ide893Lvx3UavVhkMIk30dQqiGECpF9e68CCG8LpfL3yStAAIk6Z2kT3Ect68C+AGdSroFVEII82aWSXoGYGYHVwE0qOM43pU0BXw3s1zSI2AnSZKXhYB6vT7inLvd7XZ/eu8fOOe2JEW9zjkwZ2bHkoayLDtpt9ufLzzBe/8GWC6VSpc7nIE2pLPLeu/fA0uDQ3T/6pp6039uZnfN7Ieke1EUrQOu3/VawPloNBrbwIyZ7TvnLvg/+mKOJ3xk88NR4R4sADM92fp9MDRMdXaRxenHVMbuFy8SMAFkZval2Wyu9ZN3Hk4zWx0nAtKsWwxotVrNNE2f5nn+CrB+/nRvlSR5y2EK0TWbSKfT+fo3Lribfr4bA/yfl56y2kkuZX8BjXVyqMs8oFcAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;"></label></p><p><label for="user_pass">Password<br><input type="password" name="pwd" id="user_pass" class="input" value="" size="20" autocomplete="off" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDiEFu6xIcAAAAXhJREFUOMvNk8FLVFEUxn/ffRdmIAla1CbBFDGCpoiQWYlBLty7UHAvEq2HYLhveDMws2/TIly6E9SdIEj+AVYgRaTgXhe2C968x2nhTOjow8pNZ/ede/ide893Lvx3UavVhkMIk30dQqiGECpF9e68CCG8LpfL3yStAAIk6Z2kT3Ect68C+AGdSroFVEII82aWSXoGYGYHVwE0qOM43pU0BXw3s1zSI2AnSZKXhYB6vT7inLvd7XZ/eu8fOOe2JEW9zjkwZ2bHkoayLDtpt9ufLzzBe/8GWC6VSpc7nIE2pLPLeu/fA0uDQ3T/6pp6039uZnfN7Ieke1EUrQOu3/VawPloNBrbwIyZ7TvnLvg/+mKOJ3xk88NR4R4sADM92fp9MDRMdXaRxenHVMbuFy8SMAFkZval2Wyu9ZN3Hk4zWx0nAtKsWwxotVrNNE2f5nn+CrB+/nRvlSR5y2EK0TWbSKfT+fo3Lribfr4bA/yfl56y2kkuZX8BjXVyqMs8oFcAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;"></label></p><p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p><p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In"><input type="hidden" name="interim-login" value="1"><input type="hidden" name="testcookie" value="1"></p></form></div>';
	$('.flexslider').flexslider();
        $("#menu-item-71").click(function(){$("body").append(login); console.log('test');});  
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




