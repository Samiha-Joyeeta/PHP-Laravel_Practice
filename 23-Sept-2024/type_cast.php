<?php
echo "<pre>";

$x = 10.91;
$y = 10;
$z = "Hello World";

echo (int)$x."\n";
echo (int)$y."\n";
echo (int)$z."\n";
echo (string)$x."\n";
echo (string)$y."\n";
echo (string)$z."\n";
echo (float)$x."\n";
echo (float)$y."\n";
echo (float)$z."\n";
echo intval($x)."\n";
echo intval($y)."\n";
echo intval($z)."\n";
echo strval($x)."\n";
echo strval($y)."\n";
echo strval($z)."\n";
echo floatval($x)."\n";
echo floatval($y)."\n";
echo floatval($z)."\n";
echo (bool)$x."\n";
echo (bool)$y."\n";
echo (bool)$z."\n";

echo intval(042) . PHP_EOL;         # 0ctal number 
echo intval('042', 0) . PHP_EOL;    # 0ctal number
echo intval('42', 8) . PHP_EOL;     # octal  

echo intval(0x1A) . PHP_EOL;        # Hexadecimal              
echo intval('0x1A', 16) . PHP_EOL;  # Hexadecimal           
echo intval('0x1A', 0) . PHP_EOL;   # Hexadecimal         

echo intval(false) . PHP_EOL;                  
echo intval(true) . PHP_EOL; 


   echo floatval('99.90 Rs') . PHP_EOL;      
   echo floatval('$100.50') . PHP_EOL;      
   echo floatval('ABC123!@#') . PHP_EOL; 

   echo (true) . PHP_EOL; ;
   echo (false) . PHP_EOL;
   
   echo strval(4.2E5) . PHP_EOL;                   
   echo strval(NULL) . PHP_EOL;    //nothing prints  
   echo (true) . PHP_EOL; 
   echo (false) . PHP_EOL;   //nothing prints

   var_dump($y);

echo "</pre>"

?>