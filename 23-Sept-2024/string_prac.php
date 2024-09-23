<?php
echo "<pre>";
/*PHP supports escaping an Octal and a hexadecimal number to its ASCII character. 
For example, the ASCII character for P is 80 in decimal. 80 in decimal to Octal is 120. 
Similarly, 80 in decimal to hexadecimal is 50.

To escape an octal character, prefix it with "\"; and to escape a hexadecimal character, prefix it with "\x".
*/
$str = "\120\110\120";
   echo "PHP with Octal: ". $str; 
   echo PHP_EOL;

   $str = "\x50\x48\x50";
   echo "PHP with Hexadecimal: ". $str;

   $x = "100";
   echo "\n$ $x \n";

   $y = "Cakes";

   echo $x ." ". $y;

echo "</pre>";
?>