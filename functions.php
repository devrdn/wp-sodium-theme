<?php

/**
 * WordPress Functions
 *
 * @package Sodium
 */

function sodium_enqueue_styles() {
   wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), [] );
}

add_action( 'wp_enqueue_scripts', 'sodium_enqueue_styles' );