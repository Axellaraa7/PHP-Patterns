<?php
namespace Creational\Factory;

class NoFactory extends Factory{
  public function getType($type){
    // return new interface{
    //   public function message(){
    //     "No Factory selected";
    //   }
    // }
  }
}