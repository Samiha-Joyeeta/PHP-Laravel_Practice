<?php
echo "<pre>";
/*Inheritance is a software modelling approach that enables extending
 the capability of an existing class to build new class instead of building from scratch.

 You are free to override the functionality of an inherited method, 
 otherwise it will retain its functionality as defined in the parent class.
 */
   class Book {
   
      /* Member variables */
      protected int $price;
      protected string $title;

      public function getbook(string $param1, int $param2) {
         $this->title = $param1;
         $this->price = $param2;
      }
      public function dispbook() {
         echo "Title: $this->title Price: $this->price \n";
      }
   }

   class ebook extends Book {
      private string $format;
      public function getebook(string $param1, int $param2, string $param3) {
         $this->title = $param1; //protected; still accessible
         $this->price = $param2; //protected; still accessible
         $this->format = $param3;
      }
      public function dispebook() {
         echo "Title: $this->title Price: $this->price\n";
         echo "Format: $this->format \n";
      }
   }
   $ebook = new ebook;
   $ebook->getebook("PHP Fundamentals", 450, "EPUB"); //can be overridden
   $ebook->dispebook();

   echo "</pre>";
?>