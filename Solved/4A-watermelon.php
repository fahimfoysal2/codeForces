<?php
// read line input
$w = readline();

// is number even but not 2? 
if ($w%2 == 0 && $w > 2) {
    echo "YES\n";
}else {
    echo "NO\n";
}

/**
 * why not 2?
 * => Because 2 can not be broken in two even numbers
 */