<?php

/*In type juggling, PHP automatically converts types from one to another when necessary. 
For example, if an integer value is assigned to a variable, it becomes an integer.
On the other hand, type casting takes place when the user explicitly defines the data type in which they want to cast.
*/
  echo "<pre>";
   $var1=100.50;
   $var2=(string)$var1;
   $var3="$var1";
   var_dump($var2, $var3);


   $x = 10.91;
   $y = 10;
   $z = "Hello World";

   echo "The variable \$x is of " . gettype($x) . " type" .PHP_EOL;  //double
   echo "The variable \$y is of " . gettype($y) . " type" .PHP_EOL; //int type
   echo "The variable \$z is of " . gettype($z) . " type" .PHP_EOL; //str type

   $m = $y + $x;
   echo "The variable \$m is of " . gettype($m) . " type" .PHP_EOL; //int+double = double type

   $var1=(boolean)$y;
   $var2=(string)$y;
   $var3=(array)$y;
   $var4=(object)$y; //scalar object 
   var_dump($var1, $var2, $var3, $var4);  
   ##OUTPUT##
   /*
   bool(true)
string(2) "10"
array(1) {
  [0]=>
  int(10)
}
object(stdClass)#1 (1) {
  ["scalar"]=>
  int(10)
}*/



   echo "</pre>";

   ?>