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

   $object1 = new Book(356,"PHP Fundamentals");
  // $object2 = new Book(900,"PHP Basics");

   $object1->getTitle();
   $object1->getPrice();
   echo "Title : $object1->title Price: $object1->price";
   

   /*
   The getTitle() and getPrice() functions are public, able to access the private member variables title and price.
   But, while trying to display the title and price directly, an error is encountered as they are not public.
    */
   

   echo "</pre>";
   
?>