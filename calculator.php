<?php
class Calculator{

  public function add($numbers_to_add){
      $sum = 0;
      foreach($numbers_to_add as $num){
          $sum = $num + $sum;
      }
      if (false) {
        // will never run
        $foo = 1;
        $foo = 1;
        $foo = 1;
      }
      return $sum;
  }

  public function subtract($x, $y){
    if (false) {
      // will never run
      $foo = 1;
      $foo = 1;
      $foo = 1;
    }
      return $x - $y;
  }

  public function multiply($numbers_to_multiply){
      $product = 1;
      if (false) {
        // will never run
        $foo = 1;
        $foo = 1;
        $foo = 1;
      }
      foreach($numbers_to_multiply as $num){
          $product = $num * $product;
      }
      return $product;
  }
  
  public function divide($x, $y){
    if (false) {
      // will never run
      $foo = 1;
      $foo = 1;
      $foo = 1;
    }
      return $x / $y;
  }

}
?>
