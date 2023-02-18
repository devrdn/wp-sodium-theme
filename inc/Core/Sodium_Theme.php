<?php

/**
 * Bootstrap Theme
 * 
 * @package Sodium
 */

namespace Sodium\Inc\Core;

use Sodium\Inc\Traits\Singleton;

if ( !class_exists( Sodium_Theme::class ) ) :

/**
 * Main Sodium Theme Class
 * 
 * @since 1.0.0
 */
class Sodium_Theme
{
   use Singleton;

   /**
    * Bootstrap the theme 
    *
    * Main Theme Function, is used for bootstrap the theme.
    *
    * @return void
    */
   public function bootstrap_theme(): void {
      $this->init_hooks();

      Sodium_Assets::get_instance();
   }

   /**
    * Init hooks
    *
    * @return void
    */
   protected function init_hooks(): void {
      add_action( 'after_setup_theme', [ $this, 'setup_sodium_theme' ] );
   }

   /**
    * Sets up the Sodium theme by adding theme support.
    * 
    * @since 1.0.0
    *
    * @return void
    */
   public function setup_sodium_theme(): void {
      add_theme_support( 'title-tag' );

      $this->setup_custom_logo_support();
   }

   public function setup_custom_logo_support(): void {
      $defaults = [
         'header-text'  => [ 'site-title', 'site-description' ],
         'height'       => 190,
         'width'        => 190,
         'flex-height'  => true,
         'flex-width'   => true,
      ];

      add_theme_support( 'custom-logo', $defaults );
   }
}

endif; // class exists