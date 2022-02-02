<?php
// 1)To open the file PHP use fopen() function it takes two parameters 
// first is name of the while
//  and other is the mode of the file read, write
// r is used to open the file to read only
//2)en use fread() function it takes two parameters first is name of the file and
//  other is the number of bytes you want to read.



//A function to read file content
function phpReadFile($filename){
    $myfile = fopen($filename,"r") or die ("unable to open file!");
    $filecontent = fread($myfile,filesize($filename));
    fclose($myfile);
    return $filecontent;

}
//let's test it , try to read "myFile.tst" file in root directory
 echo phpReadFile("myFile.txt");
?>
<!-- http://talkerscode.com/php/php_fileinputoutput.php -->