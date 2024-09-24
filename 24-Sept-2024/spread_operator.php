<?php
  echo "<pre>";
   $arr1 = [1,2,3];
   $arr2 = [4,5,6];
   $arr3 = [100,50,...$arr1, ...$arr2]; //... spread/Splat operator

   print_r($arr3);

   $arr4 = array_merge($arr1, $arr2); //merging

   //the use of (...) operator is much more efficient as it avoids the overhead a function call.



   print_r($arr4);

   

   function get_squares() {
    for ($i = 0; $i < 5; $i++) {
       $arr[] = $i**2;
    }
    return $arr;
 }
    $squares = [...get_squares()];
    print_r($squares);

    function  myfunction($x, $y, $z=30) {
        echo "x = $x  y = $y  z = $z";
     }
  
     //myfunction(...[10, 20], z:30); 
     //cannot combine though it should have unpacked the array value and worked
     echo "</pre>";
?>