<?php

// Enable custom menus
add_theme_support( 'menus' );

function create_widget( $name, $id, $description) {
    $args = array(
        'name' => __( $name ),
        'id' => $id,
        'description' => $description,
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    );

    register_sidebar( $args );
}

create_widget( 'Left Footer', "footer_left", "Displays in the bottom left of footer" );
create_widget( 'Middle Footer', 'footer_middle', 'Displays in the middle of footer' );
create_widget( 'Right Footer', 'footer_right', 'Displays in the bottom right of footer' );

//load style sheets
function theme_styles() {
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'gallery', '//blueimp.github.io/Gallery/css/blueimp-gallery.min.css' );
    wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,800|Cinzel+Decorative:400,700' );
    wp_enqueue_style( 'social', get_template_directory_uri() . '/css/webfonts/ss-social.css' );
    wp_enqueue_style( 'jqueryui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css' );
    
    
    wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css');
    wp_enqueue_style( 'flexslider' );
    
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
   
}

//load js
function theme_js() {
    
    wp_register_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true );    
    wp_enqueue_script( 'flexslider' );
    
    wp_enqueue_script( 'bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'gallery_js', '//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'jqueryui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js', array('jquery'), '', true );
    
    if ( is_front_page() ) {
        wp_enqueue_script( 'home_js', get_template_directory_uri() . '/js/home.js', array('jquery'), '', true);
    }
    
    if ( is_single() ) {
        wp_enqueue_script( 'blueimp-init_js', get_template_directory_uri() . '/js/blueimp-init.js', array('jquery'), '', true);
    }
    
    wp_enqueue_script( 'parent_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );

add_theme_support( 'post-thumbnails' );

function get_custom_avatar( $id_or_email, $size = '96', $default = '', $alt = false ) {
	if ( ! get_option('show_avatars') )
		return false;

	if ( false === $alt)
		$safe_alt = '';
	else
		$safe_alt = esc_attr( $alt );

	if ( !is_numeric($size) )
		$size = '96';

	$email = '';
	if ( is_numeric($id_or_email) ) {
		$id = (int) $id_or_email;
		$user = get_userdata($id);
		if ( $user )
			$email = $user->user_email;
	} elseif ( is_object($id_or_email) ) {
		// No avatar for pingbacks or trackbacks

		/**
		 * Filter the list of allowed comment types for retrieving avatars.
		 *
		 * @since 3.0.0
		 *
		 * @param array $types An array of content types. Default only contains 'comment'.
		 */
		$allowed_comment_types = apply_filters( 'get_avatar_comment_types', array( 'comment' ) );
		if ( ! empty( $id_or_email->comment_type ) && ! in_array( $id_or_email->comment_type, (array) $allowed_comment_types ) )
			return false;

		if ( ! empty( $id_or_email->user_id ) ) {
			$id = (int) $id_or_email->user_id;
			$user = get_userdata($id);
			if ( $user )
				$email = $user->user_email;
		}

		if ( ! $email && ! empty( $id_or_email->comment_author_email ) )
			$email = $id_or_email->comment_author_email;
	} else {
		$email = $id_or_email;
	}

	if ( empty($default) ) {
		$avatar_default = get_option('avatar_default');
		if ( empty($avatar_default) )
			$default = 'mystery';
		else
			$default = $avatar_default;
	}

	if ( !empty($email) )
		$email_hash = md5( strtolower( trim( $email ) ) );

	if ( is_ssl() ) {
		$host = 'https://secure.gravatar.com';
	} else {
		if ( !empty($email) )
			$host = sprintf( "http://%d.gravatar.com", ( hexdec( $email_hash[0] ) % 2 ) );
		else
			$host = 'http://0.gravatar.com';
	}

	if ( 'mystery' == $default )
		$default = "$host/avatar/ad516503a11cd5ca435acc9bb6523536?s={$size}"; // ad516503a11cd5ca435acc9bb6523536 == md5('unknown@gravatar.com')
	elseif ( 'blank' == $default )
		$default = $email ? 'blank' : includes_url( 'images/blank.gif' );
	elseif ( !empty($email) && 'gravatar_default' == $default )
		$default = '';
	elseif ( 'gravatar_default' == $default )
		$default = "$host/avatar/?s={$size}";
	elseif ( empty($email) )
		$default = "$host/avatar/?d=$default&amp;s={$size}";
	elseif ( strpos($default, 'http://') === 0 )
		$default = add_query_arg( 's', $size, $default );

	if ( !empty($email) ) {
		$out = "$host/avatar/";
		$out .= $email_hash;
		$out .= '?s='.$size;
		$out .= '&amp;d=' . urlencode( $default );

		$rating = get_option('avatar_rating');
		if ( !empty( $rating ) )
			$out .= "&amp;r={$rating}";

		$out = str_replace( '&#038;', '&amp;', esc_url( $out ) );
		$avatar = "<img alt='{$safe_alt}' src='{$out}' class='avatar avatar-{$size} photo img-circle' height='{$size}' width='{$size}' />";
	} else {
		$avatar = "<img alt='{$safe_alt}' src='{$default}' class='avatar avatar-{$size} photo avatar-default' height='{$size}' width='{$size}' />";
	}

	/**
	 * Filter the avatar to retrieve.
	 *
	 * @since 2.5.0
	 *
	 * @param string            $avatar      Image tag for the user's avatar.
	 * @param int|object|string $id_or_email A user ID, email address, or comment object.
	 * @param int               $size        Square avatar width and height in pixels to retrieve.
	 * @param string            $alt         Alternative text to use in the avatar image tag.
	 *                                       Default empty.
	 */
	return apply_filters( 'get_avatar', $avatar, $id_or_email, $size, $default, $alt );
}

if ( !is_admin() && !is_front_page() ) {
    add_filter('acf/load_value/name=project_images', 'img_class_filter');
    add_filter('the_content', 'img_class_filter');
}

function img_class_filter($content) {
    
    if ( strstr( $content, 'id="gallery"' ) ) {
        
        $content = str_replace('href=', 'data-gallery href=', $content);
        
        $content = '<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
                    <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel blueimp-gallery-controls">
                    <!-- The container for the modal slides -->
                        <div class="slides"></div>
                        <!-- Controls for the borderless lightbox -->
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="play-pause"></a>
                        <ol class="indicator visible-md visible-lg"></ol>
                    </div>' . $content;
        
    }
    
    return $content;
        
    
}

function favicon() {
    if (is_admin()) {
        $favicon_url = get_stylesheet_directory_uri() . '/favicon-bw.png';
    } else {
        $favicon_url = get_stylesheet_directory_uri() . '/favicon.png';
    }
    echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

add_action('admin_head', 'favicon');
add_action('wp_head', 'favicon');
add_action('login_head', 'favicon');

/* add class to comments avatar */
add_filter('get_avatar','add_gravatar_class');

function add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar img-circle", $class);
    return $class;
}

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects');
function my_wp_nav_menu_objects($items) {
    global $wp_query;
    
    
    foreach ( $items as $item ) {
        if (strtolower($item->title) == $wp_query->query["post_type"] && 'post_type' == $item->type) {
            $item->classes[] = 'current_page_parent';
        } elseif (!empty($wp_query->query["post_type"])) {
            $key = array_search('current_page_parent', $item->classes);
            unset($item->classes[$key]);
        }

    }
    
    return $items;
}