<?php
echo "<pre>";
   class example {
      const X=10;
      private const Y=20;

      function test()
      {
        $area = 2*self::X;
        echo $area."\n";
      }
   }
   $obj=new example();
   echo "public=". $obj::X. "\n";
   $obj->test();
   echo "private=" . $obj->Y ."\n";
   echo "private=" . example::Y ."\n";

   echo "<pre>";
?>