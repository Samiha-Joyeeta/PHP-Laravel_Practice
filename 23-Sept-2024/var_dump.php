<?php

/*The <pre> tag defines preformatted text.
 Text in a <pre> element is displayed in a fixed-width font.he 
 The text preserves both spaces and line breaks.
 */
echo "<pre>";

##  IMPORTANCE OF var_dump ##
/*debugging is just as vital as coding. When a developer has to verify information about a variable.
For example, if a function returns an array, it's best to double-check the return type and the contents of the returned value.
A developer can echo the entire contents, but var_dump in PHP has a function that also checks the datatype.
var_dump includes both type and data for the variables.
For string, it shows string length.*/


   $x = array("Hello", false, 99.99, array(10, 20,30));
   //var_dump ($x);
   
   $y = array("World",True,65.78,
    array(1=>10,2=>20,3=>30)

   );

   //var_dump($y);

   class Point {
    private int $x;
    private int $y;

    public function __construct(int $x, int $y = 0) {
       $this->x = $x;
       $this->y = $y;
    }
 }

 $p = new Point(4, 5);

 //The built-in function var_dump will dump all the defined variables to the browser...
 var_dump(get_defined_vars());
 //var_dump($p) 

 //no need to add closing pre tag with a var_dump used for showing array value...
 
?>