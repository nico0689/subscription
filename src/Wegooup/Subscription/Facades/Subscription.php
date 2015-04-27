<?php namespace Wegooup\Subscription\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Subscription extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'subscription'; }
 
}