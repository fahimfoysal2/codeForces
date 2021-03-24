<?php

$looper = readline();

while ($looper--) {
    $string = readline();
    $length = strlen($string);
    if ($length > 10) {
        echo $string[0]."".($length-2)."".$string[$length-1]."\n";
    } else {
        echo $string."\n";
    }
}