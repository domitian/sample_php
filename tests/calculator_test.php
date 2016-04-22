<?php
require_once('calculator.php'); //our calculator class which we will creater
require_once('calculator2.php'); //our calculator2 class which we will creater later.
class CalculatorTest extends PHPUnit_Framework_TestCase{
  // testing Calculator
  public function testAdd(){
      $calc = new Calculator();
      $result = $calc->add(array(2,3,4,5));
      $this->assertEquals(14, $result); //check if 2+3+4+5 is equal to 14
  }
  public function testSubtract(){
      $calc = new Calculator();
      $result = $calc->subtract(5,2);
      $this->assertEquals(3, $result); //check if 5 - 2 is equal to 3
  }
  public function testMultiply(){
      $calc = new Calculator();
      $result = $calc->multiply(array(5,2));
      $this->assertEquals(10, $result); //check if 5 - 2 is equal to 3
  }
  public function testDivide(){
      $calc = new Calculator();
      $result = $calc->divide(10,2);
      $this->assertEquals(5, $result); //check if 5 - 2 is equal to 3
  }

  // testing Calculator2
  public function testAdd2(){
      $calc = new Calculator2();
      $sum = $calc->add(array(2,3,4,5));
      $this->assertEquals(14, $sum); //check if 2+3+4+5 is equal to 14
  }
}
?>
