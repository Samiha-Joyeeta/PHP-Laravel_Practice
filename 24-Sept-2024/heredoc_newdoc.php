<?php  

### newdoc ->does not expand variables
   $lang="PHP";


   $str = <<<'IDENTIFIER'
   This is an example of Nowdoc string.
   it can span multiple lines
   and include single quote ' and double quotes "
         IT doesn't expand the value of $lang variable
         Here, the hexdecimal ASCII characters don't produce PHP for \x50\x48\x50
   IDENTIFIER;

   echo $str."\n";

   $str = <<<IDENTIFIER
   This is an example of heredoc string.
   it can span multiple lines
   and include single quote ' and double quotes "
         IT expands the value of $lang variable
         Here, the hexdecimal ASCII characters produce \x50\x48\x50
   IDENTIFIER;

   echo $str;



?>