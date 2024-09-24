<?php
 echo "<pre>";
   $i=1;
   $j=1;

   do{
      echo "\n";
      do{
         $k = sprintf("%4u",$i*$j);
         //$k = $i*$j;
         print "$k\t";
         $j++;
      } 
      while ($j<=10);
      $j=1;
      $i++;
   }
   while ($i<=5);
   //echo "\n";
   //The print_r() function used here displays the data stored in the array in an easy to understand human readable form.
   echo "<pre>";
?>