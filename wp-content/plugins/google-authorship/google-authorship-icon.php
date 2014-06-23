<?php

/*
More Information: http://mervin.info/google-authorship
Author Name Information: Mervin Praison
Author Information: http://mervin.info


  Copyright 2012  Mervin Praison  

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function google_authorship_icon () {
	echo mpgp_authorship_icon_short();
}

function mpgp_authorship_icon () {
	echo mpgp_authorship_icon_short();
}

/* Start of The Function */


function mpgp_authorship_icon_short () { 




$mpgp_author_name = esc_attr( get_the_author_meta( 'preferredname', $user->ID ) );
$mpgp_author_display = esc_attr( get_the_author_meta( 'display_name', $user->ID ) );
$mpgp_author_url = esc_attr( get_the_author_meta( 'mpgpauthor', $user->ID ) );
if(is_author){
$authororme = 12;
}
else {
$authororme = 23;
}
if($mpgp_author_name==NULL) 
					{
						$authorizing = $mpgp_author_display;
					}
					else{
						
					$authorizing = $mpgp_author_name;
					
					}

				$mpgpreturn = "<a href='";
				$mpgpreturn .= $mpgp_author_url;
				$mpgpreturn .= "?prsrc=3' rel='";
				if(is_author){ $mpgpreturn .="author";}
				else {$mpgpreturn .= "me";}
				$mpgpreturn .= "' style='text-decoration:none;' title='Google Plus Profile for ";
				$mpgpreturn .= $authorizing; 
				$mpgpreturn .="'><img src='https://ssl.gstatic.com/images/icons/gplus-32.png' alt='' style='border:0;width:32px;height:32px;'/>";
				$mpgpreturn .= "</a>";

		return $mpgpreturn;
} 

add_shortcode( 'google_authorship_icon', 'mpgp_authorship_icon_short' );

/* End of The Function */
/* Widget for the normal Link */

wp_register_sidebar_widget(
    'mpgp_authorship_2',        // your unique widget id
    'Google Authorship Icon',          // widget name
    'mpgp_authorship_icon',  // callback function
    array(                  // options
        'description' => 'Displays Your Google Authorship Icon'
    )
);

/* End of Widget for the normal Link */




?>