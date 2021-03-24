<?php

/**
 * get input and return array
 */
function getInput(){
    $input = readline();
    return explode(' ', $input);
}

// get contestants and lowest number holders position
$input_array = getInput();
$contestant = $input_array[0];
$lowestMarkHolder = $input_array[1]-1;

// get results array
$input_array = getInput();
$lowest_mark = $input_array[$lowestMarkHolder];


$next_round = 0;

/**
 * if current number,
 *      is 0 or less than lowest_mark => break
 *      is not less than lowest mark  => next round
 */
for ($i=0; $i < $contestant; $i++) { 
    if ($input_array[$i] <= 0 || $input_array[$i] < $lowest_mark) {
        break;
    }else if ($input_array[$i] >= $lowest_mark) {
        $next_round++;
    }
}

echo $next_round."\n";