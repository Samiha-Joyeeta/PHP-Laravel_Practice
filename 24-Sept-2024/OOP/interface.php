<?php
//extends => implements
// class => interface
//all the methods declared in an interface must be public.****
//a class can extend another class and implement an interface.
//no body; no functionality 

   interface shape {
      public function area(): float;
   }

   class square implements shape {
      var $side;
      public function __construct($arg1) {
         $this->side = $arg1; 
      }
      public function area(): float {
         return pow($this->side, 2);
      }
   }
   class circle implements shape {
      var $radius;
      public function __construct($arg1) {
         $this->radius = $arg1;
      }
      public function area(): float {
         return pow($this->radius,2)*pi();
      }
   }

   $sq = new square(5);
   echo "Side: " . $sq->side .  " Area of Square: ". $sq->area() . PHP_EOL;

   $cir = new circle(5);
   echo "Radius: " . $cir->radius .  " Area of Circle: " . $cir->area(). PHP_EOL;
?>