<?php
//if the include is double it will show a warning , that why we use include_once
include_once 'function.php';
include_once 'function.php';

echo $title;
echo "\n";
echo $content;