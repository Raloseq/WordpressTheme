<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php  bloginfo('charset'); ?>"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body <?php body_class(); ?>>
    <header class="app-header">
        <button class="app-header__hamburger" id="test">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <nav class="app-nav">
            <?php 
                if( is_page(116) ) {
                    wp_nav_menu( array( 
                        'menu' => 'primary',
                        'container' => 'app-nav',
                        'theme_location' => 'primary'
                    ) );
                } else {
                    wp_nav_menu( array( 
                        'menu' => 'blog',
                        'container' => 'app-nav',
                        'theme_location' => 'blog'
                    ) );
                }
                
                
            ?>
            <div class="app-nav__search">
                <?php get_search_form( ) ?>
            </div>
        </nav>
    </header>