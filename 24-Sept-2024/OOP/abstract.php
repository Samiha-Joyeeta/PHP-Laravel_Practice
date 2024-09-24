<?php
echo "<pre>";
//abstract func can be implemented only in abstract class
//child class of abstract class must use all abstract methods; else, it will catch fatal error
//Abstract class cannot be instantiated; can be done through child class
   abstract class marks {
      protected int $m1, $m2, $m3;
      abstract public function percent(): float; //returns float value
   }

   class student extends marks {
      public function __construct($x, $y, $z) {
         $this->m1 = $x;
         $this->m2 = $y;
         $this->m3 = $z;
      }
      public function percent(): float {
         return ($this->m1+$this->m2+$this->m3)*100/300;
      }
   }

   $s1 = new student(50, 60, 70);
   echo "Percentage of marks: ". $s1->percent() . PHP_EOL;
   echo "<pre>";
?>