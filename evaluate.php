<?php

function evaluate($n) {
  $arr=explode(" ",$n);

  $first=(float)$arr[0];
  $second=(float)$arr[2];
  $operator=$arr[1];
  $result=0;

  switch($operator){
    case "+":
      $result=$first+$second;
      break;
    case "-":
      $result=$first-$second;
      break;
    case "*":
      $result=$first*$second;
      break;
    case "/":
      $result=$first/$second;
      break;
    default :
      $result="Invalid operator";
  }
  echo $result;
}
    
?>
