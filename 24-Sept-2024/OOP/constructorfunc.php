<?php
echo "<pre>";
   class Book {
   
      var $price; //member variables
      var $title;

    
      function __construct(){ //construct function
         $this->price = 250;
         $this->title = "PHP Programming";
      }

      function getPrice(){ 
         echo $this->price ."\n";
      }

      function getTitle(){
         echo $this->title ."\n";
      }
   }

   $b1 = new Book;

   $b1->getTitle();
   $b1->getPrice();

   echo "</pre>";
   
?>