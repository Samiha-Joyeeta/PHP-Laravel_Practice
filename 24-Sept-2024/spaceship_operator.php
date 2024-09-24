<?php
  echo "<pre>";
  /*
  he spaceship operator has three possible return values: -1,0,or 1. 
  This operator can be used with integers, floats, strings, arrays, objects, etc.
  The symbol used for spaceship operator is "<=>"
  */
  $x = 10;
  $y = 20;
  
  echo $x<=>$y;

  echo "\n";

  $z = $x<=>$y/2;

  echo "$x<=>$y/2 === $z \n"; // 10<=>10; should be 0



     echo "</pre>";
?>