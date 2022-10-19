<?php
namespace Creational\Factory\Posts;
use \Creational\Factory as Fr;
class TextPost implements Fr\InterfaceClasses{
  public function __construct(public $author){
    $this->author = $author;
  }
  public function message(){
    return "I'm a text post and my author is: {$this->author}\n";
  }
  public static function search(){

  }
}