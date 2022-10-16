<?php
namespace Creational\Factory\Posts;

class TextPost implements InterfacePost{
  public function __construct(public $author){
    $this->author = $author;
  }
  public function message(){
    return "I'm a text post and my author is: {$this->author}\n";
  }
}