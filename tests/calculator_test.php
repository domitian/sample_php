<?php
require_once('calculator.php'); //our calculator class which we will creater
require_once('calculator2.php'); //our calculator2 class which we will creater later.
class CalculatorTest extends PHPUnit_Framework_TestCase {
  // testing Calculator
  // testing 100% for Calculator
  public function testAdd(){
      $calc = new Calculator();
      $result = $calc->add(array(2,3,4,5));
      $this->assertEquals(14, $result);
  }
  public function testSubtract(){
      $calc = new Calculator();
      $result = $calc->subtract(5,2);
      $this->assertEquals(3, $result);
  }
  public function testMultiply(){
      $calc = new Calculator();
      $result = $calc->multiply(array(2,5));
      $this->assertEquals(10, $result);
  }
  public function testDivide(){
      $calc = new Calculator();
      $result = $calc->divide(10,2);
      $this->assertEquals(5, $result);
  }

  // testing 0% for Calculator2
  // Since have ignored the class calculator2, so should not cause any coverage change
}
?>
