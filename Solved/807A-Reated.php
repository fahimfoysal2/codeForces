<?php

/**
 * if (num1 != num2) ==> score changed--->rated->exit**
 * else, if all numbers are in order----->maybe
 * else,--------------------------------->not rated
 */

$students = $looper = readline();

$in_order = $previous = 0;

while ($looper--) {
    fscanf(STDIN, "%s %s", $num1, $num2);

    if ($num1 != $num2) {
        echo "rated\n";
        exit;
    }

    if ($previous >= $num1) {
        $in_order++;
    }
    $previous = $num1;

}

if($in_order == $students-1) {
    echo "maybe\n";
}else {
    echo "unrated\n";
}