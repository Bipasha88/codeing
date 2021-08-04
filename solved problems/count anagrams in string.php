<?php

$str = explode(" ",readline());
$count = 0;
$same = "";

for($i=1; $i<count($str); $i++ ){
    if (strlen($str[$i]) != strlen($str[$i-1])) {
        continue;
    }
    else{
        $a_chars = str_split($str[$i]);
        $b_chars = str_split($str[$i-1]);
        sort($a_chars);
        sort($b_chars);
        if($a_chars === $b_chars){
            if($a_chars != $same){
                $count +=1;
                $same = $a_chars;
            }
        }

    }
}
echo $count;