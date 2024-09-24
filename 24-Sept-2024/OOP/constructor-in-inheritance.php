<?php


   /* The constructor in the parent class constructor is inherited by the child class 
   but it cannot be directly called in the child class if the child class defines a constructor.

   In order to run a parent constructor, a call to parent::__construct() within the child constructor is required.

   */
  /*
   
   class myclass{
      public function __construct(){
         echo "This is parent constructor". PHP_EOL;
      }
   }
   class newclass extends myclass {
      public function __construct(){
         parent::__construct();
         echo "This is child class destructor" . PHP_EOL; //Why destructor? Need to know
      }
   }
   $obj = new newclass();

   */

   ################
   /*
   if the child does not have a constructor, 
   then it may be inherited from the parent class just like a normal class method (if it was not declared as private).*/

   

   class myclass{
    public function __construct(){
       echo "This is parent constructor". PHP_EOL;
    }
 }
 class newclass extends myclass{ }
 $obj = new newclass();

 /*PHP doesn’t allow developing a class by extending more than one parents. 
 You can have hierarchical inheritance, wherein class B extends class A, class C extends class B, and so on.
  But PHP doesn’t support multiple inheritance where class C tries to extend both class A and class B.
 */
?>