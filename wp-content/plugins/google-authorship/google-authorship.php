<?php

/*
Plugin Name: Google Authorship
Plugin URI: http://mervin.info/google-authorship
Description: New Google Authorship Badge or Google Authorship Icon or Authorship Link. Special version. Recommended by Google. Shortcode and Widget Available
Version: 2.0
Author: Mervin Praison
Author URI: http://mervin.info
License: GPL2


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


if ( function_exists('add_action') ) {
    //WordPress definitions
    if ( !defined('WP_CONTENT_URL') )
        define('WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
    if ( !defined('WP_CONTENT_DIR') )
        define('WP_CONTENT_DIR', ABSPATH . 'wp-content');
    if ( !defined('WP_PLUGIN_URL') )
        define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
    if ( !defined('WP_PLUGIN_DIR') )
        define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');
    if ( !defined('PLUGINDIR') )
        define( 'PLUGINDIR', 'wp-content/plugins' ); // Relative to ABSPATH.  For back compat.
		
}


/* Initializing */

include( WP_PLUGIN_DIR . '/google-authorship/google-authorship-badge.php');
include( WP_PLUGIN_DIR . '/google-authorship/google-authorship-icon.php');

/*  End of Initializing  */

function google_authorship () {
	echo mpgp_authorship_short();
}

function mpgp_authorship () {
	echo mpgp_authorship_short();
}

/*

Start of The Function

*/
function mpgp_authorship_short () { 
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
				$mpgpreturn .= "?rel=author' rel='";
				if(is_author){ $mpgpreturn .="author";}
				else {$mpgpreturn .= "me";}
				$mpgpreturn .= "' title='Google Plus Profile for ";
				$mpgpreturn .= $authorizing; 
				$mpgpreturn .="'>";					
				$mpgpreturn .= $authorizing;
				$mpgpreturn .= "</a>";

		return $mpgpreturn;
} 

add_shortcode( 'google_authorship', 'mpgp_authorship_short' );

/*

End of The Function

*/



add_action( 'show_user_profile', 'mpgp_author_profile_fields' );
add_action( 'edit_user_profile', 'mpgp_author_profile_fields' );

function mpgp_author_profile_fields( $user ) { 
	
	global $current_user;
	get_currentuserinfo();
	$mpgp_author_name = esc_attr( get_the_author_meta( 'preferredname', $current_user->ID ) );
	$mpgp_author_url = esc_attr( get_the_author_meta( 'mpgpauthor', $current_user->ID ) );

	?>
	<h3>Google Authorship</h3>

	<table class="form-table">

		<tr>
			<th><label for="mpgpauthor">Google Plus Profile URL</label></th>

			<td>
				<input type="text" name="mpgpauthor" id="mpgpauthor" value="<?php echo esc_attr( get_the_author_meta( 'mpgpauthor', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Google Plus Profile URL. (with "https://plus.google.com/1234567890987654321")</span>
			</td>
		</tr>
		<tr>

			<th><label for="preferredname">Preferred Name</label></th>
			<td>
				<input type="text" name="preferredname" id="preferredname" value="<?php echo esc_attr( get_the_author_meta( 'preferredname', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Enter Your Preferred Name</span>
			</td>
		</tr>

	</table>
<?php }


add_action( 'personal_options_update', 'mpgp_author_profile_save' );

function mpgp_author_profile_save( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	update_usermeta( $user_id, 'mpgpauthor', $_POST['mpgpauthor'] );
	update_usermeta( $user_id, 'preferredname', $_POST['preferredname'] );
}



?>