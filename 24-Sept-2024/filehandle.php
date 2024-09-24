<?php
echo "<pre>";
   $file = fopen("practiceprob.txt", "r");
   $newfile = fopen("newfile.txt", "w");
   //read from one file and paste it to another file
   while(! feof($file)) {
      $str = fgets($file);
      fputs($newfile, $str);
   }
   fclose($file);
   fclose($newfile);

   //Reading binary files is an important skill for working with data (non-textual) such as images, audio, and videos. 
   $name = 'download.jfif';
   $file = fopen($name, "rb");
   $newfile = fopen("photo.jfif", "wb");
   $size = filesize($name);
   $data = fread($file, $size);
   fwrite($newfile, $data, $size);
   fclose($file);
   fclose($newfile);
  #####exists or not 
   $filename = 'new.txt';
   if (file_exists($filename))  //check if file exists
   {
    echo "The file $filename exists\n";
   } 
   else {
    echo "The file $filename does not exist\n";
        }

######file or not
        if (is_file($filename)) {       //Check if it's a file or not
            echo "$filename is a file\n";
         } else {
            echo "$filename is a not a file\n";
         }

##### FILE IS READABLE OR NOT

         if (is_readable($filename)) {
            echo "$filename is readable\n";
         } else {
            echo "$filename is not readable\n";
         }
## CAN BE WRITTEN ON THE FILE OR NOT

if (is_writable($filename)) {
    echo "$filename is writable\n";
 } else {
    echo "$filename is not writable\n";
 }
 //COPY FILE
 $source = "new.txt";
 $target = "test.txt";
 $data = file_get_contents($source);
 file_put_contents($target, $data);  

 /* SEEK_SET − Set position equal to offset bytes.

SEEK_CUR − Set position to current location plus offset.

SEEK_END − Set position to end-of-file plus offset

*/

 $fp = fopen("new.txt", "r+");
   fseek($fp, 0, SEEK_END);
   fwrite($fp, "\nPHP-MySQL Tutorial\n");
   fclose($fp);

//DELETE FILE -> UNLINK FILE

$file = 'empty.txt';

if (unlink($file)) {
    echo "The file was deleted successfully.";
 } else {
    echo "The file could not be deleted.";
 }
         
echo "<pre>";
?>