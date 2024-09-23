<?php
echo "<pre>";

/*
Dynamic variables, also known as variable variables.
They allow us to use the value of a variable as the name of another variable. 
It’s a sort of indirect reference to a variable in PHP.
*/

 $a = 'good';
 $$a = 'morning';
 $$$a = 'Samaira';

 echo "$a {$$a}". "\n";
 echo "$a $good".", ".$$good;

 $food = 'burger';
 $$food = '250';

 echo "\nThe food name is ". $food . "...\n";
 echo "The price of ". $food . " is ".$burger.".\n"; 
/*
As PHP continues to evolve with more advanced and clean ways of handling variables and data structures, the necessity for dynamic variables has indeed declined.
The use of dynamic variables can often lead to code that’s hard to understand and debug, which makes it a less-preferred approach.
*/
echo "</pre>"

?>