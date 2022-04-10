<?php

function raloseqfitness_register_styles()
{
    wp_enqueue_style( 'raloseqfitness-main', get_template_directory_uri(  ) . "/assets/css/app.css" );
}

add_action( 'wp_enqueue_scripts', 'raloseqfitness_register_styles' );

function raloseqfitness_register_scripts()
{
    wp_enqueue_script( 'raloseqfitness-main', get_template_directory_uri(  ) . "/assets/js/app.js" );
}

add_action( 'wp_enqueue_scripts', 'raloseqfitness_register_scripts' );