<?php
abstract class Calc
{
    // Force Extending class to define this method
    public function add($numb1, $numb2){

         return $numb1 + $numb2;
     } 
     public function subtract($numb1, $numb2){
        return $numb1 - $numb2;
    }
    public function multiply($numb1, $numb2){
        return $numb1 * $numb2;
    }
    public function divide($numb1, $numb2){
        return $numb1 / $numb2;
    }

     abstract  protected function getTypeOfCalc();
    
    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

class SimpleCalc extends Calc
{
    public function getTypeOfCalc() {
        return "Simple Calc";
    }

    // public function prefixValue($prefix) {
    //     return "{$prefix}ConcreteClass1";
    // }
}

class ScientificCalc extends Calc
{
    public function getTypeOfCalc() {
        return "Scientific Calc";
    }

    public function ABS($input) {
        return  Math.abs($input);
    }

    // public function prefixValue($prefix) {
    //     return "{$prefix}ConcreteClass2";
    // }
}

$class1 = new SimpleCalc;
echo $class1->getTypeOfCalc() . '<br>';
echo $class1->add(3,8);
echo $class1->ABS(3);


$class2 = new ScientificCalc;
echo $class2->getTypeOfCalc();
echo $class2->add(3,8);
echo $class2->ABS(3);
?>