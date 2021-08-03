<?php

$string1 = str_split(readline());
$string2 = str_split(readline());

$value = 0;


for ($i=0; $i<count($string1); $i++){

    if(ord($string1[$i])>90){
        $string1_value = ord($string1[$i])-32;
    }
    else{
        $string1_value = ord($string1[$i]);
    }

    if(ord($string2[$i])>90){
        $string2_value = ord($string2[$i])-32;
    }
    else{
        $string2_value = ord($string2[$i]);
    }

    if($string1_value == $string2_value)
        $value = 0;
    elseif ($string1_value > $string2_value)
    {
        $value = 1;
        break;
    }

    else{
        $value = -1;
        break;
    }


}

echo $value;