<?php
echo "<pre>";
   function square($num) {
      return $num * $num;
   }

   $arr = [1, 2, 3, 4, 5];
   $squares = array_map('square', $arr);
   var_dump($squares);
   

   foreach($arr as $a) {
    echo "square of $a:" . call_user_func("square", $a). PHP_EOL;
 }

 echo "</pre>";

?>