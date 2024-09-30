<?php

echo "<pre>";

function addition($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
 }

 function ref(&$num1, &$num2) { //call by reference
    $num1 = $num1 + $num2;
    return $num1;
 }

 $x = 10;
 $y = 20;
 $num = addition($x, $y); //call by value
 echo "Sum of the two numbers is : $num\n";
 $num = ref($x, $y);
 echo "Sum of the two numbers is : $num\n";
 echo "After Summation value of x becomes: $x\n"; 
 // now x = 30, beacuse num1 =30


 //Return by Reference
 function &myfunction(){
    static $x=10;
    echo "x Inside function: $x \n";
    return $x;
 }

 $a=&myfunction(); 
 echo "Returned by Reference: $a \n";
 $a=$a+10; //10 + 10 = 20; $a = &$x;
 $a=&myfunction(); //20


//DEFAULT ARGUMENTS
function  percent($p, $c, $m, $total=300) {
    $sum = $p+$c+$m;
    echo "Marks obtained: \n";
    echo "Physics = $p Chemistry = $c Maths = $m \n";
    echo "sum = $sum , Total = $total \n";
 }
 percent(50, 60, 70);

 /*you must pass value for the first argument. 
 If only one value is passed, it will be used by the first argument in the list.
 */


 //NAMED ARGUMENTS
 function  namedArg($x, $y) {
    echo "x = $x  y = $y \n";
 }
 namedArg(x:10, y:20); //passing named arguments


 //VARIABLE ARGUMENTS
 function varArg($x, ...$numbers) {
    echo "First number: $x" . PHP_EOL;
    echo "Remaining numbers: ";
    foreach ($numbers as $n) {
       echo "$n  ";
    }
 }
 varArg(5, 12, 9, 23, 8, 41);

echo "</pre>";

?>

