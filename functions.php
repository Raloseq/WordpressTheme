<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 300, 300);
add_image_size( 'single-post-thumbnail', 590, 180 );

function rf_register_styles()
{
    wp_enqueue_style( 'rf-main', get_template_directory_uri(  ) . "/assets/css/app.css" );
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}

add_action( 'wp_enqueue_scripts', 'rf_register_styles' );

function rf_register_scripts()
{
    wp_register_script('rf-main', get_template_directory_uri(  ) . "/assets/js/app.js", '', '1.1', true);
    wp_enqueue_script('rf-main');
}

add_action( 'wp_enqueue_scripts', 'rf_register_scripts' );

function rf_menus() 
{
    $locations = array( 
        'primary' => 'Main Navbar',
        'footer'  => 'Footer Navbar'
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'rf_menus' );

function rf_aboutus_edit($wp_customize)
{
    $wp_customize->add_section( 'rf-aboutus-section', array(
        'title' => 'Aboutus Section'
    ) );

    $wp_customize->add_setting( 'rf-aboutus-section-heading', array(
        'default' => 'Headline text',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rf-aboutus-section-heading-control', array(
        'label' => 'Headline',
        'section' => 'rf-aboutus-section',
        'settings' => 'rf-aboutus-section-heading'
    ) ) );

    $wp_customize->add_setting( 'rf-aboutus-section-description', array(
        'default' => 'Description text',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rf-aboutus-section-description-control', array(
        'label' => 'Description',
        'section' => 'rf-aboutus-section',
        'settings' => 'rf-aboutus-section-description'
    ) ) );
}

add_action( 'customize_register', 'rf_aboutus_edit' );

function rf_create_post_type()
{
    register_post_type( 'diets', array(
        'labels' => array(
            'name' => 'Diets',
            'add_new_item' => 'Add New Diet',
            'edit_item' => 'Edit Diet',
            'all_items' => 'All Diets',
            'singular_name' => 'Diet'
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array( 'slug' => 'diets' ),
        'show_in_rest' => true,
        'supports' => ['title','editor','thumbnail'],
        'menu_icon' => 'dashicons-media-text'
    ) );
}

add_action( 'init', 'rf_create_post_type' );

function rf_add_post_type_to_query($query)
{
    if ( is_home(  ) && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'diets' ) );
    }
}

add_action( 'pre_get_posts', 'rf_add_post_type_to_query' );