<?php
namespace Creational;

class AbstractFactory{
  public function getFactory($type){
    switch($type){
      case "product":
        $factory = new Factory\ProductFactory();
        break;
      case "post":
        $factory = new Factory\PostFactory();
        break;
      default:
        $factory = new Factory\NoFactory();
        break;
    }
    return $factory;
  }
}