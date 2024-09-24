<?php
echo "<pre>";
   class Book {
   
      var $price; //member variables
      var $title;

    
      function __construct($price,$title){ //parameterized construct function
         $this->price = $price;
         $this->title = $title;
      }

      function getPrice(){ 
         echo $this->price ."\n";
      }

      function getTitle(){
         echo $this->title ."\t";
      }
   }

   $object1 = new Book(356,"PHP Fundamentals");
   $object2 = new Book(900,"PHP Basics");

   $object1->getTitle();
   $object1->getPrice();
   $object1->getTitle();
   $object1->getPrice();

   echo "</pre>";
   
?>