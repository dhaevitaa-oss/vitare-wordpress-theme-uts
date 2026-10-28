<?php

function vitare_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    register_nav_menus(array(
        'primary' => 'Menu Utama',
        'footer' => 'Menu Footer'
    ));
}
add_action('after_setup_theme', 'vitare_theme_setup');

function vitare_enqueue_assets() {
    wp_enqueue_style(
        'vitare-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'vitare_enqueue_assets');