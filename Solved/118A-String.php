<?php

$string = readline();

// case in-sensetive replace 
$string = preg_replace("/[aoyeui]/i", '', $string);
// lower case
$string = strtolower($string);
// add dot (.)
$string = preg_replace("/([a-z]{1})/", '.$1', $string);

echo $string;