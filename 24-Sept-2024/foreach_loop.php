<?php

echo "<pre>";

   $a = array(10, 20, 30, 40, 50);
   foreach ($a as $key=>$val) {
      echo "Key: $key => Val: $val \n";
   }

   $b = array(1=>10, 2=>20, 3=>30, 4=>40, 5=>50); //associative array
   foreach ($b as $key=>$val) {
      echo "Key: $key => Val: $val \n";
   }

   foreach ($b as $pair) {
    $p = array_search($pair,$b);
    echo "Key: $p => Val: $b[$p] \n";
 }

 $multidim =array(
    array(1,2,3,4),
    array("one","two","three","four","five"),
    array(1=>"one",2=>"two","three"=>3)

 );

 foreach($multidim as $index=>$valarray)
 {
    echo "array No: $index";
    foreach($valarray as $key=>$val)
    {
        echo " $key => $val \n";
    }
 }

 $arr = array(10, 20, 30, 40, 50);
  
 foreach ($arr as $val) {         //normal array
    $index = array_search($val, $arr);
    echo "Element at index $index is $val \n";

 }
echo "</pre>";
?>