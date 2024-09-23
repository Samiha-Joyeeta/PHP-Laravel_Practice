<?php
echo "<pre>";
/*constant:
->starts with letter or _
->define() func must be used
->value cannot be changed or undefined.
->No need to use $ sign when printing
->resolved at runtime
 */
define('MAX',100);

echo MAX. " The current Line number is " . __LINE__ . ".\n"; //magical constant -> Resolved at compile time ->Returns Line number

if(defined('MAX'))
{
    echo 'Max number of seats: '. MAX ."\n";
}

echo 'Max number of seats: '. CONSTANT('MAX')."\n";

define('Restaurant_Name',"Nerdy Beans Coffee House");

echo Restaurant_Name;


define(
    $RESTAURANT = "Nerdy_Beans_Coffee_House",
    $menu = array('Iced-Tea','Iced-Mocha','Brownie')
);

var_dump(Nerdy_Beans_Coffee_House);

echo "\nCurrent PHP script name is " . __FILE__ . "."; //magical constant ->returns full path and filename of the current file.
echo "\nDirectory of the Current PHP script name is " . __DIR__ . "."; //magical constant -> returns the directory of the file.

/* Constant -> Resolved at runtime
Magical Constant -> Resolved at compile Time. */


function address(){
      $x = "Banani-21";
      echo "\n$x. The function name is ". __FUNCTION__ . ".\n"; 
      /*-> __FUNCTION__ This magical constant returns the function name in which the constant is used, 
      or {closure} for anonymous functions. */

}

address();

echo "</pre>";
?>