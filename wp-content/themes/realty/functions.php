<?php
$theme_features = array(
    "post-thumbnails",
    "custom-background",
    "title-tag");

foreach ($theme_features as $feature) {
    add_theme_support($feature);
}


add_action( 'wp_enqueue_scripts', 'load_styles_and_scripts', 20 );
function load_styles_and_scripts() {
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );
    wp_enqueue_script( 'theme.js', get_stylesheet_directory_uri() . '/js/theme.js', array('jquery'), '', true);
    wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
}

function create_widget( $name, $id, $description) {
    $args = array(
        'name' => __( $name ),
        'id' => $id,
        'description' => $description,
        'before_widget' => '<div class="thumbnail footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    );

    register_sidebar( $args );
}

create_widget( 'Left Footer', "footer_left", "Displays in the bottom left of footer" );
create_widget( 'Right Footer', 'footer_right', 'Displays in the bottom right of footer' );

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
function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyBdd41ph5PmiBzzmgYaJi65soPJrrAZIZQ';
	
	return $api;
	
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
