<?php
function load_stylesheets()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), false, 'all');
    wp_enqueue_style('normalize');

    wp_register_style('style', get_template_directory_uri() . '/style.min.css', array(), false, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs()
{
    wp_register_script('appjs', get_template_directory_uri() . '/app.js', '', 1, true);
    wp_enqueue_script('appjs');
}

add_action('wp_enqueue_scripts', 'loadjs');


add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'mobile-menu' => __('Mobile Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

add_image_size('small', 520, 390, false);
add_image_size('large', 900, 675, false);
