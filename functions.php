<?php

/**
 * WordPress Functions
 *
 * @package sodium
 */

if ( !defined( 'SODIUM_THEME_PATH' ) ) {
   define( 'SODIUM_THEME_PATH', untrailingslashit( get_template_directory() ) );
}

// Class autoloader
require_once __DIR__ . './vendor/autoload.php';

function sodium_get_theme_class_instance() {
   return \Sodium\Inc\Sodium_Theme::get_instance();
}

sodium_get_theme_class_instance();

/**
 * Enqueues the stylesheet for the theme.
 *
 * @since 1.0
 * 
 * @return void
 */
function sodium_enqueue_styles() {
   // Enqueue main styles 
   wp_enqueue_style( 'sodium_stylesheet', get_stylesheet_directory_uri() . '/assets/css/style.css', [], "0.1" );
}

add_action( 'wp_enqueue_scripts', 'sodium_enqueue_styles' );