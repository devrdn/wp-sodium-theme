<?php

/**
 * WordPress Functions
 *
 * @package sodium
 */

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