<?php
  echo "<pre>";
  /* #########DESCRIPTION########
  The word "coalescing" means uniting many things into one. 
  This operator is used to replace the ternary operation in conjunction with the isset() function.
  A useful application of Null Coalescing operator is while checking whether a username has been provided by the client browser.
  */

  $num = 10;
  $val = $num ?? 0;
  echo "The number is $val.\n";

  $var = isset($x) ? $x : "not set";
  // The value will be whatever is set. Else not set
  echo "The value of x is $var.\n";

  $username = $_GET['name'] ?? 'Guest';
   echo "Welcome $username";

  /*
  $username = $_GET['name'] ?? $_POST['name'] ?? 'Guest';
   echo "Welcome $username";

*/


echo "</pre>";
?>