<?php

$x = 20;
$y = 10;

var_dump($x != $y); // bool(true)

$x = 20;
$y = '20';
var_dump($x != $y); // bool(false)