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
  
   echo "<pre>";
?>