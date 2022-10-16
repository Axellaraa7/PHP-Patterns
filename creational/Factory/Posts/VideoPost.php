<?php
namespace Creational\Factory\Posts;

class VideoPost implements InterfacePost{
  public function __construct(public $author){
    $this->author = $author;
  }
  public function message(){
    return "I'm a video post and my author is: {$this->author}\n";
  }
}