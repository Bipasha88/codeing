<?php

$name = str_split(readline());
$char_count = 0;

for ($i=0; $i<count($name); $i++){

    $char_exist = 0;

    for ($j=0; $j<$i; $j++){

        if($name[$i] == $name[$j]){
            $char_exist++;
        }
    }
    if($char_exist == 0)
        $char_count++;
}

if($char_count % 2 == 0)
    echo "CHAT WITH HER!";
else
    echo "IGNORE HIM!";