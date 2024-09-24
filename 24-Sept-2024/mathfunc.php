<?php
echo "<pre>";
$num1 = -100.9876;
$num2 = 100.9876;
echo abs($num1)."\n";  //100.9876
echo ceil($num1)."\n"; //-100 rounded towards 0
echo floor($num1)."\n";  //-101 next lowest
echo abs($num2)."\n";  //100.9876
echo ceil($num2)."\n"; //101 next highest
echo floor($num2)."\n";  //100 next lowest

echo exp(M_LN2)."\n"; //exp of loge2 = 2
echo exp(M_LN10)."\n"; //exp of loge10 = 10
//$div = intdiv($num2, 0);
//echo $div."\n"; //div by 0. uncaught error
$div = intdiv($num2, 10.76);
echo $div."\n"; //intdiv is applied only to integer part. Not on fractional part. Answer: 10

echo log10(1000)."\n";
echo log10(0)."\n"; //inf  
//NAN = NOT A NUMBER
echo log10(sqrt(-1))."\n"; //log of nan = nan
echo M_LOG10E."\n"; //log10E = log10(2.718281828459)=0.43429448190325

$a=array("Java", "Angular", "PHP", "C", "Kotlin"); 
   echo max($a) ." ". min($a)."\n";
   echo pow(10,2)."\n";
   echo round($num2)."\n";
   echo round(100.06)."\n";
   echo round($num1)."\n"; //-101
   echo round(-100.06)."\n"; //100

   $arg=1234.567;
   echo "round(" . $arg . ") = " . round($arg) . "\n";
   echo "round(" . $arg . ",1) = " . round($arg,1) . "\n";
   echo "round(" . $arg . ",2) = " . round($arg,2) . "\n";
   echo "round(" . $arg . ",-1) = " . round($arg,-1) . "\n";
   echo "round(" . $arg . ",-2) = " . round($arg,-2) . "\n";
   echo "round(3.45,HALF_UP) = " . round(3.45,0, PHP_ROUND_HALF_UP) . "\n"; //Rounds number away from 0 when it is half way there. 
                                                                            //Hence, 1.5 becomes 2 and -1.5 to -2
   echo "round(3.75 HALF_DOWN) = " . round(3.79, 1, PHP_ROUND_HALF_DOWN) . "\n"; //Rounds number towards 0 when it is half way there. 
                                                                                 //Hence 1.5 becomes 1 and -1.5 to -1
   echo "round( 3.45,HALF_ODD) = " . round(3.45,0, PHP_ROUND_HALF_ODD) . "\n"; //Rounds the number to nearest odd value
   echo "round(3.78 HALF_EVEN) = " . round(3.78, 0, PHP_ROUND_HALF_EVEN) . "\n"; //Rounds the number to nearest even value
   echo M_SQRT1_2 ; ## 1/sqrt(2)= 0.70710678118655
   echo "sqrt(pi) = " . sqrt(M_PI) . "\n";
   echo "M_SQRTPI = " . M_SQRTPI. "\n";
   echo "2/sqrt(pi) = " . 2/sqrt(M_PI) . "\n";
   echo "M_2_SQRTPI = " . M_2_SQRTPI . "";
   echo "sqrt(-1) = " . sqrt(-1) . ""; //nan
echo "</pre>";
?>