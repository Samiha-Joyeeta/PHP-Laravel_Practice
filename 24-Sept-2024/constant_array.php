<?php
   echo "<pre>";

   //associative array
   $a = [
   "row1" => ["key11" => "val11", "key12" => "val12", "key13" => "val13"],
   "row2" => ["key21" => "val21", "key22" => "val22", "key23" => "val23"],
   "row3" => ["key31" => "val31", "key32" => "val32", "key33" => "val33"]
   ];

   print "value at row2 - key22 is " . $a["row2"]["key22"]."\n";

   //constant array

   const FRUITS = [
      "Watermelon", 
      "Strawberries",
      "Pomegranate",
      "Blackberry",
   ];
   //FRUITS[1] = "Mango";

   var_dump(FRUITS);

   define ('FRUITS1',  [
      "Watermelon", 
      "Strawberries",
      "Pomegranate",
      "Blackberry",
   ]);
   print_r(FRUITS1);
    //The print_r() function used here displays the data stored in the array in an easy to understand human readable form.

    define ('CAPITALS',  array(
      "Maharashtra" => "Mumbai",
      "Telangana" => "Hyderabad",
      "Gujarat" => "Gandhinagar",
      "Bihar" => "Patna"
   ));
   print_r(CAPITALS);

   //GO TO "https://www.tutorialspoint.com/php/php_array_functions.htm" to learn about array_functions

   echo "</pre>";
?>