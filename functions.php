<?php
// Add theme support for custom templates
function my_custom_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    add_theme_support( 'menus' );
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'my-custom-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );