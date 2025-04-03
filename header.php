<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

    <div id="page" class="site">

    <header id="masthead" class="site-header">
        <div class="container">
            <!-- Logo -->
            <div class="site-logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>

            <!-- Menu Burger -->
            <div class="menu-toggle" id="menu-toggle">
                <span class="burger-bar"></span>
                <span class="burger-bar"></span>
                <span class="burger-bar"></span>
            </div>

            <!-- Menu -->
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class'     => 'header-menu',
                    'container'      => 'ul',
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>
        </div><!-- .container -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">