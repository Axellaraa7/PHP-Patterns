<?php
namespace Creational\Factory\Products;

class NoProduct implements InterfaceProduct{
  public function message(){
    return "There's no product\n";
  }
}