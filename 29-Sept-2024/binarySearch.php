<?php
   function bsearch($my_list, $low, $high, $element) {
      if ($high >= $low) {
         $mid = intval(($high + $low)/2);

         if ($my_list[$mid] == $element)
         return $mid;

         elseif ($my_list[$mid] > $element)
         return bsearch($my_list, $low, $mid - 1, $element);

         else
         return bsearch($my_list, $mid + 1, $high, $element);
      }
      else
      return -1;
   }

   $list = [5,12,23, 45, 49, 67, 71, 77, 82];
   $num = 67;
   $result = bsearch($list,0,count($list)-1, $num); //because starts from index 0
   if ($result != -1)
   echo " Number $num found at index  " . $result+1; //starting from index 1
   else
   echo "Element not found!";
?>