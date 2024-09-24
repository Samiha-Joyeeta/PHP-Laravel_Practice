<?php
echo "<pre>";
/*
fopen() function is used to open a file. 
It requires two arguments stating first the file name and then mode in which to operate.

Modes: r , r+, w, w+ , a , a+

After making a changes to the opened file it is important to close it with the fclose() function. 
The fclose() function requires a file pointer as its argument and then returns true when the closure succeeds or false if it fails.



*/
##READ FILE##
$filename = "practiceprob.txt";
      $file = fopen( $filename, "r" ); //r = read only ; r+ = read & write. ReWrite from beginning of file

      if( $file == false ) {
         echo ( "Error in opening file" );
         exit(); //terminates the script after printing the error msg
      }
      
      $filesize = filesize( $filename ); //returns filesize
      //fwrite($file,"Hehe");
      $filetext = fread( $file, $filesize ); //two arguments needed for fread(). fread() reads the file content
      //fwrite($file,"Hehe");
      fclose( $file );
  
      echo ( "File size : $filesize bytes\n");
      echo $filetext;
      echo "\nFilename: $filename";


##Write File##
$filename = "new.txt";
//Use w/w+
$file = fopen($filename, "w+"); //if file doesn't exist, it will be created. truncates the file to zero length. Starts from beginning.

    fwrite($file, "Hell is empty. All the devils are here on earth. "); //text file will be written.
    $filesize = filesize( $filename );
    fwrite($file, "Filesize = $filesize");


fclose($file);


##Write File from the end.
$filename = "new.txt";
$file = fopen($filename, "a+"); //if file doesn't exist, it will be created. Starts from the end. Use a/a+
    fwrite($file, "\nAgain Writing the line.Hell is empty. All the devils are here on earth. "); //text file will be written.
    $filesize = filesize( $filename );
    fwrite($file, "Filesize = $filesize");


fclose($file);
echo "</pre>";
?>