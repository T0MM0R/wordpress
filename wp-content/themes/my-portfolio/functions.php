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
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );
    wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,800|Cinzel+Decorative:400,700' );
    wp_enqueue_style( 'social', get_template_directory_uri() . '/css/webfonts/ss-social.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    
    wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css');
    wp_enqueue_style( 'flexslider' );
    
}

//load js
function theme_js() {
    
    wp_register_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true );    
    wp_enqueue_script( 'flexslider' );
    
    wp_enqueue_script( 'bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );