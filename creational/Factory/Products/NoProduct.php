<?php
namespace Creational\Factory\Products;

class NoProduct implements \Creational\Factory\InterfaceClasses{
  public function message(){
    return "There's no product\n";
  }
  public static function search(){
    
  }
}