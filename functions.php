<?php

/**
 * WordPress Functions
 *
 * @package sodium
 */

use Sodium\Inc\Core\Sodium_Theme;

if ( !defined( 'SODIUM_THEME_PATH' ) ) {
   define( 'SODIUM_THEME_PATH', untrailingslashit( get_template_directory() ) );
}

if ( !defined( 'SODIUM_THEME_URI' ) ) {
   define( 'SODIUM_THEME_URI', untrailingslashit( get_template_directory_uri() ) ); 
}

// Class autoloader
require_once __DIR__ . './vendor/autoload.php';

/**
 * Bootstrap The Theme
 */
(Sodium_Theme::get_instance())->bootstrap_theme();