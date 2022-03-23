<?php

// Enqueuing
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
    wp_enqueue_style('main');

    wp_register_style('magnific', get_template_directory_uri() . '/css/magnific.css', [], 1, 'all');
    wp_enqueue_style('magnific');

}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('magnific', get_template_directory_uri() . '/js/magnific.js', ['jquery'], 1, true);
    wp_enqueue_script('magnific');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', ['jquery'], 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');

function post_type(){
    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archieve' => true,
        'menu_icon' => 'dashicons-car',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug', 'cars'),
    );

    register_post_type('cars', $args);
}

add_action('init', 'post_type');


function post_type_team()
{
    $args = array(
        'labels' => array(
            'name' => 'Team Members',
            'singular_name' => 'Team Member',
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archieve' => true,
        'menu_icon' => 'dashicons-businessperson',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug', 'team-members'),
    );

    register_post_type('team members', $args);
}

add_action('init', 'post_type_team');

function post_type_location()
{
    $args = array(
        'labels' => array(
            'name' => 'Locations',
            'singular_name' => 'Location',
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archieve' => true,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'supports' => array('title', 'editor', 'thumbnail'),
        // 'rewrite' => array('slug', 'locations'),
    );

    register_post_type('locations', $args);
}

add_action('init', 'post_type_location');

function post_taxonomy(){
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),
        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('brands', array('cars'), $args);
}

add_action('init', 'post_taxonomy');

// Nav Menus
register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'theme' ),
    'footer-menu' => __( 'Footer Menu', 'theme' ),
) );

// Theme Support
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Image Sizes
add_image_size('square', 350, 350, true);

add_image_size('my_custom_size', 1200, 600, true);
