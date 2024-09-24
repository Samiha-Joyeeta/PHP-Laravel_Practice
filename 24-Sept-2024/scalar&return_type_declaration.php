<?php
 
//SCALAR TYPE DECLARATIONS
 declare (strict_types=1);
 echo "<pre>";
 /*
   In the weak mode, the strict_types flag is 0. Setting it to 1 forces the PHP parser to check the compatibility of the parameters and values passed.
   Add this statement in the above code and check the result
*/

function addition(int $x, int $y) {
    
    echo "\nAddition: " . $x+$y;
}

function division(int $x, int $y) {
    
   echo "\nDivision: " . (float)$x/$y;
}

   $x="10";
   $y=20;
   echo addition($x, $y)."\n";
   echo division($x, $y)."\n";

   echo "</pre>";
  

?>