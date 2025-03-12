<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Enregistrement des menus
function motatwo_register_menus() {
    register_nav_menus(array(
        'header-menu' => __('Menu principal', 'motatwo'),
    ));
}
add_action('after_setup_theme', 'motatwo_register_menus');

// Activation de l'option logo dans l'interface WP
function motatwo_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100, // Hauteur recommandée (modifiable)
        'width'       => 300, // Largeur recommandée (modifiable)
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'motatwo_theme_setup');

// Chargement du CSS
function motatwo_enqueue_styles() {
    wp_enqueue_style('motatwo-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'motatwo_enqueue_styles');

// Enregistrer et lier le fichier JavaScript

function motatwo_enqueue_scripts() {
    // Enqueue le style principal
    wp_enqueue_style('motatwo-style', get_stylesheet_uri());
    // Enqueue le script JS
    wp_enqueue_script('motatwo-scripts', get_template_directory_uri() . '/scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'motatwo_enqueue_scripts');

