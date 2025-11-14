<?php 
// Parent Class
abstract class Car{
 public $name;
 public function __construct($name){
 $this->name = $name;
 }
 abstract public function carIntro() : string;
}
// child Class suzuki
class Suzuki extends Car{
   public function carIntro() : string{
    return" It's {$this->name}, Car Brand.<br>";
   }
}
class Zeekar extends Car{
   public function carIntro() : string{
    return" It's {$this->name}, Car Brand.<br>";
   }
}class Toyota extends Car{
   public function carIntro() : string{
    return" It's {$this->name}, Car Brand.<br>";
   }
}
// object from child classes
$suzuki1 = new Suzuki("Suzuki");
echo $suzuki1->carIntro();

$zeekar1 = new Zeekar("Zeekar");
echo $zeekar1->carIntro();

$toyota1 = new Toyota("Toyota");
echo $toyota1->carIntro();
?>