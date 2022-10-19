<?php
namespace Creational\Factory\Posts;

use \Creational\Factory as Fr;

class NoPost implements Fr\InterfaceClasses{
  public function message(){
    return "No post existing\n";
  }
  public static function search(){
    
  }
}