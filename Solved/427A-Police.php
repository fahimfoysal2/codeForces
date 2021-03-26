<?php

$looper = (int)readline();
// all operations in one line
$operation = readline();
$operation = explode(' ', $operation);

$police = $crime = 0;

for($i=0; $i < $looper; $i++){
    if ($operation[$i] > 0) {
        $police+=$operation[$i];
    }elseif($operation[$i] < 0){
        if ($police > 0) {
            $police--;
        }else{
            $crime++;
        }
    }
}
echo $crime."\n";