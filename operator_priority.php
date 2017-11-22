<?php

// #1

$a = true OR false ? '1' : '0';
var_dump($a);

$a = true || false ? '1' : '0';
var_dump($a);


// #2 
$a = null;

true OR false ? $a = '1' : $a = '0';
var_dump($a);

true || false ? $a = '1' : $a = '0';
var_dump($a);
