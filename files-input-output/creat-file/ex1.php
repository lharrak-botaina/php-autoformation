<?php
//w+ is used to open the file to write and read both. 
// If files does not exist then it attemts to create a file. Places the file 
// pointer at the beginning of the file.
$filename = 'readme.txt';


$f = fopen($filename, 'w+');
if ($f) {
    // process the file
    // ...
    echo 'The file ' . $filename . ' is open';
    fclose($f);
}