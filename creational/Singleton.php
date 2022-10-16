<?php
namespace Creational;

use Exception;

class Singleton{
  private static $instance;

  private function __construct(){}

  public static function getInstance(){
    if(!isset(self::$instance)) self::$instance = new Singleton();
    return self::$instance;
  }

  public function message(){ return "Singleton Pattern \n"; }

  public function __clone(){
    throw new Exception("You cannot clone a singleton object\n");
  }
}