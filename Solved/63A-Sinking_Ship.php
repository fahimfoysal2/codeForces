<?php

$name = $type = "";
$rat = $woman_child = $man = array();
$captain = "";

$people = (int)readline();

// STDIN = fopen("php://stdin", "r");
while ($people--) {
    fscanf(STDIN, "%s %s", $name, $type); // multiple variable input in single line

    if ($type == "rat") {
        array_push($rat, $name);
    }elseif($type == "woman" || $type == "child"){
        array_push($woman_child, $name);
    }elseif($type == "man"){
        array_push($man, $name);
    }elseif($type == "captain"){
        $captain = $name;
    }
}

$final = array_merge($rat, $woman_child, $man);

foreach ($final as $name) {
    echo "$name\n";
}
echo "$captain\n";