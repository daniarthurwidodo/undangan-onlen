<?php
// This file is used to define theme functions, register menus, enqueue scripts and styles, and set up theme support features.

function my_custom_theme_setup() {
    // Add support for various theme features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_scripts() {
    // Enqueue styles
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue scripts
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');
?>