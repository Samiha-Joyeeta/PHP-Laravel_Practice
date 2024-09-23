<?php
echo "<pre>";
/*
To use octal notation, a number is preceded with "0o" or "0O" (PHP 8.1.0 and earlier). 
From PHP 8.1.0 onwards, a number prefixed with "0" and without a decimal point is an octal number.
To use hexadecimal notation, precede the number with "0x". To use binary notation, precede the number with "0b".
*/
$a = 1234; 
   echo "1234 is an Integer in decimal notation: $a\n";

   $b = 0123; 
   echo "0o123 is an integer in Octal notation: $b\n"; //83

   $c = 0x1A; 
   echo "0xaA is an integer in Hexadecimal notation: $c\n"; //26

   $d = 0b1111;
   echo "0b1111 is an integer in binary notation: $d \n"; //15


$b = 12;

$c= intdiv($a,$b);
var_dump($a/$b); //returns float value

var_dump($c); //returns integer value of the division. 
echo "</pre>";
?>