<?php

/**
 * Bootstrap Theme
 * 
 * @package Sodium
 */

namespace Sodium\Inc;

use Sodium\Inc\Traits\Singleton;

/**
 * Main Sodium Theme Class
 * 
 * @since 1.0.0
 */
class Sodium_Theme
{
   use Singleton;

   protected function __construct()
   {
      wp_die("Hello");
   }
}
