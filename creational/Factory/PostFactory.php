<?php
namespace Creational\Factory;

class PostFactory extends Factory{
  public function getType($type){
    switch($type){
      case "video":
        $product = new Posts\VideoPost("axellaraa");
        break;
      case "text":
        $product = new Posts\TextPost("Axellaraa");
        break;
      default:
        $product = new Products\NoProduct();
        break;
      }
    return $product;
  }
}