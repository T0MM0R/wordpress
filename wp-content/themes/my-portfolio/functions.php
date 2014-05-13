<?php

// Enable custom menus
add_theme_support( 'menus' );

//load style sheets
function theme_styles() {
    
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );
    wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,800|Cinzel+Decorative:400,700' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'social', get_template_directory_uri() . '/css/webfonts/ss-social.css' );
    
    wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css');
    if( is_page( 'home' ) ) {
        wp_enqueue_style( 'flexslider' );
    }
    
}

//load js
function theme_js() {
    
    wp_register_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true );    
    if( is_page( 'home' ) ) {
        wp_enqueue_script( 'flexslider' );
    }
    
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );