<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'load_my_child_styles', 20 );
function load_my_child_styles() {
    wp_enqueue_style( 'child-theme', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'load_my_child_scripts', 20 );
function load_my_child_scripts() {
    wp_enqueue_script( 'child_theme_js', get_stylesheet_directory_uri() . '/js/theme.js', array('jquery'), '', true);
}

add_action( 'wp_enqueue_scripts', 'remove_parent_scripts', 20 );
function remove_parent_scripts() {
    wp_dequeue_script('theme_js' );
}