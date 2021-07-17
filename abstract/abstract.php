<?php

abstract class Greetings {

  protected $type = "Salutation";
  
  public function showType() {
  
    return $this->type;
    
  }
  
  abstract public function hideType($type);

}

class GoodMorning extends Greetings {

  public function displayGreeting() {
  
    return $this->showType();
    
  }
  
  public function hideType($type) {
  
    echo $type;
    
  }
  
}

echo (new GoodMorning())->displayGreeting();

(new GoodMorning())->hideType("Hello");

?>