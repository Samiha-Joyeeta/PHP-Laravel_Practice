<?php
echo "<pre>";
/*he principle of data encapsulation is the cornerstone of the object-oriented programming methodology. 
It refers to the mechanism of keeping the data members or properties of an object away from the reach of the environment outside the class, allowing controlled access only through the methods or functions available in the class.
*/

//the class members (both member variables as well as member functions) are public by default.

   class Book {
   
      private $price; //member variables :: public anyway
      private $title;
      

    
      function __construct($price,$title){ //parameterized construct function
         $this->price = $price;
         $this->title = $title;
      }

      public function getPrice(){ 
         echo $this->price ."\n";
      }

      public function getTitle(){
         echo $this->title ."\n";
      }
   }

   class mybook {
    public function getmytitle($b) {
       echo "Title: $b->title <br/>";
    }
 }

   $object1 = new Book(356,"PHP Fundamentals");
   $object2 = new mybook;
  // $object2 = new Book(900,"PHP Basics");

   $object1->getTitle(); //protected
   $object2->getTitle();
   //$object1->getPrice();
   echo "Title : $object1->title";
   echo "Title : $object2->title"; //cannot access as protected member is not inherited

   /*
   The protected keyword grants access to an object of the same class and an object of its inherited class, denying it to any other environment.
    */
   

   echo "</pre>";
   
?>