<?php

echo "<pre>";

//The value of each element of the array needs to be doubled using nested while loop

   $a = array(10, 20, 30, 40, 50);
   $size = count($a);
   $i = 0;
   
   echo $size."\n";

   while($i<$size)
   {
    //echo $i;
    $j = 1;
    while($j<=2)
    {
      $j++;
      $a[$i]+=1;

    }
    echo $a[$i]."\n";
    $i++;
   }

   $a = array(10, 20, 30, 40, 50);
   $size = count($a);
   $i = 0;
   
   echo $size."\n";

   while($i<$size):
   
    //echo $i;
    $j = 1;
    while($j<=2):
      $j++;
      $a[$i]+=1;
    endwhile;



    echo $a[$i]."\n";
    $i++;
endwhile;

$line = "PHP is a popular general-purpose scripting language.";
   $vowels="aeiou";
   $size = strlen($line);
   $i=0;
   $count=0;
   echo $size."\n";
   while ($i<$size){
      if (str_contains($vowels, $line[$i])) {
         $count++;
      }
      $i++;
   }
   echo "Number of vowels = $count";

echo "</pre>";
?>