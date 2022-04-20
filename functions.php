<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 300, 300);
add_image_size( 'single-post-thumbnail', 590, 180 );

function raloseqfitness_register_styles()
{
    wp_enqueue_style( 'raloseqfitness-main', get_template_directory_uri(  ) . "/assets/css/app.css" );
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}

add_action( 'wp_enqueue_scripts', 'raloseqfitness_register_styles' );

function raloseqfitness_register_scripts()
{
    wp_enqueue_script( 'raloseqfitness-main', get_template_directory_uri(  ) . "/assets/js/app.js" );
}

add_action( 'wp_enqueue_scripts', 'raloseqfitness_register_scripts' );

function raloseqfitness_menus() 
{
    $locations = array( 
        'primary' => 'Main Navbar',
        'footer'  => 'Footer Navbar'
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'raloseqfitness_menus' );