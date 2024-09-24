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

 $multidim =array(   //2D array
    array(1,2,3,4),
    array("one","two","three","four","five"),
    array(1=>"one",2=>"two","three"=>3)

 );

 $array1 = [    //2D array
    [1,2,3,4],
    [10, 20, 30, 40],
    [100, 200, 300, 400]
 ];  

 foreach($array1 as $index=>$valarray)
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

 $array3 = [   //3D array
    [[1, 0, 9],[0, 5, 6],[1, 0, 3]], 
    [[0, 4, 6],[0, 0, 1],[1, 2, 7]],
 ];

 foreach ($array3 as $arr) {
    foreach ($arr as $row) {
       foreach ($row as $element) {
          echo "$element ";
       }
       echo "\n";
    }
    echo "\n";
 }

 

echo "</pre>";
?>