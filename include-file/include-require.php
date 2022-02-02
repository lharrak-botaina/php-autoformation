<?php
// require will produce a fatal error (E_COMPILE_ERROR) and stop the script
// include will only produce a warning (E_WARNING) and the script will continue
require 'file.php';
echo 'hello world';
?>