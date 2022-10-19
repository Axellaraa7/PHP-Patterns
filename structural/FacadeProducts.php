<?php
namespace Structural;
use Creational\Factory\Products;

class FacadeProducts{
  public static function search(){
    return Products\Shirt::search().Products\Shoe::search();
  }
}