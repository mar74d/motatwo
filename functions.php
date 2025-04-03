<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajouter la police Space Mono depuis Google Fonts
wp_enqueue_style('space-mono', 'https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;500&display=swap', false);

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
    wp_enqueue_script('scripts', get_template_directory_uri() . '/scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'motatwo_enqueue_scripts');

function register_footer_menu() {
    register_nav_menu('footer-menu', __('Menu Footer', 'theme-textdomain'));
}
add_action('after_setup_theme', 'register_footer_menu');

//                         Option d'image personnalisable en haut de la modale via l'interface WP

function theme_customize_register($wp_customize) {
    $wp_customize->add_section('contact_popup_section', array(
        'title'    => __('Image de la modale de contact', 'mon-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('contact_popup_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_popup_image', array(
        'label'    => __('Téléchargez une image pour la modale de contact', 'mon-theme'),
        'section'  => 'contact_popup_section',
        'settings' => 'contact_popup_image',
    )));
}
add_action('customize_register', 'theme_customize_register');
