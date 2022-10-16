<?php
namespace Creational\Factory\Posts;

class NoPost implements InterfacePost{
  public function message(){
    return "No post existing\n";
  }
}