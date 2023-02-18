<?php


namespace Sodium\Inc\Core;

use Sodium\Inc\Traits\Singleton;

if ( !class_exists( Sodium_Assets::class ) ) :

class Sodium_Assets {

   use Singleton;

   /**
    * Default Constructor
    *
    * Initialize the class `Sodium_Assets`
    */
   public function __construct() {
      $this->init_hooks();
   }

   /**
    * Init hooks
    *
    * @since 1.0.0
    * 
    * @return void
    */
    protected function init_hooks(): void {
      add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
   }
   
   /**
    * Register and Enqueue theme styles
    *
    * @since 1.0.0
    *
    * @return void
    */
   public function register_styles(): void {
      // Register styles
      wp_register_style( 'sodium_stylesheet', SODIUM_THEME_URI . '/assets/css/style.css', [], "0.1" );

      // Enqueue styles
      wp_enqueue_style( 'sodium_stylesheet' );
   }
}

endif; // class exists