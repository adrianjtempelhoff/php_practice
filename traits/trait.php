<?php

trait Greeting {

  protected function sayHi($name) {
  
    echo "Hello " . $name;
    
  }
  
}

trait SaveData {

  protected function saveData($data) {
  
    return $data. ", like that!";
    
  }
  
}

class MyClass {

  use Greeting;
  use SaveData;
  
  public function displayGreeting() {
  
    $this->sayHi("Fred");
    
  }
  
  public function save() {
  
    return $this->saveData("my message");
    
  }

}

(new MyClass())->displayGreeting();

echo (new MyClass())->save();

?>