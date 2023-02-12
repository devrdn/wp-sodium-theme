<?php

namespace Sodium\Inc\Traits;

/**
 * Singleton trait for implementation Singleton Pattern in classes
 * 
 * @since 1.0.0
 */
trait Singleton
{
   protected static $instances = [];

   /**
    * Protected class constructor in order to prevent direct object creation
    */
   protected function __construct() { }

   /**
    * Prevent object cloning
    */
   protected function __clone() { }

   /**
    * Return new or existing Singleton instance of class from witch is called
    *
    * @return object Singleton instance of the class
    */
   final public static function get_instance()
   {
      $class = static::class;

      if ( !isset( self::$instances[ $class ] ) ) {
         self::$instances[ $class ] = new $class();
      }

      return self::$instances[ $class ];
   }
}
