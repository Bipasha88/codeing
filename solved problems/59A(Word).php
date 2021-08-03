<?php

$word = str_split(readline());
$lower_count = 0;
$upper_count = 0;

for($i=0; $i<count($word); $i++){

    if(ord($word[$i])<=90){
        $upper_count++;
    }
    elseif(ord($word[$i])>=97){
        $lower_count++;
    }
}

if($upper_count>$lower_count){

    for ($i=0; $i<count($word); $i++){
        if(ord($word[$i])>=97){
            $value = ord($word[$i]) -32;
            $word[$i] = chr($value);
        }
        echo $word[$i];
    }

}
else{
    for ($i=0; $i<count($word); $i++){
        if(ord($word[$i])<=90){
            $value = ord($word[$i]) +32;
            $word[$i] = chr($value);
        }
        echo $word[$i];
    }
}

