<?php

/**
 * Include your custom stylesheets
 */
function load_stylesheets() {

    wp_register_style('stylesheet',
        get_template_directory_uri() . '/css/style.css',
        array(), false, 'all');

    wp_enqueue_style('stylesheet');

    wp_register_style('style',
        get_template_directory_uri() . '/style.css',
        array(), false, 'all');

    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

/**
 * Include jquery into every page
 */
function include_jquery() {
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.3.6.js', '', 1, true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

/**
 * Include your custom javascripts
 */
function loadjs() {
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


/**
 * Add menu feature to this theme
 */
add_theme_support('menus');

/**
 * Add post thumbnail support
 */
add_theme_support('post-thumbnails');

/**
 * Register menu locations
 */
register_nav_menus(array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
));


/**
 * Image styles
 */
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
