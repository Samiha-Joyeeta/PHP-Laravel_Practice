<?php

   echo "<pre>";
   $obj=new stdClass; //stdClass = built-in generic empty class

   $obj->name="Joyeeta";
   $obj->id="1810003";
   $obj->dept="ECE";

   print_r($obj);
   ###### OBJECT TO ARRAY CONVERSION  #####
   $identity=(array)$obj;
   print_r($identity);

   $a = array("name"=>"Joyeeta","id"=>"1810003","dept"=>"ECE"); //associative array -> key + value
   print_r($a);
   ###### ARRAY TO OBJECT CONVERSION  #####
   $identity_obj=(object)$a;
   print_r($identity_obj);

   ### Scalar Object ####
   $name="Alfia";
   $age=21;
   $percent=75.50;

   $obj1=(object)$name;
   print_r($obj1);

   $obj2=(object)$age;
   print_r($obj2);

   $obj3=(object)$percent;
   print_r($obj3);

   echo "</pre>";
?>