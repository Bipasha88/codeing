<?php

$test =readline();

for ($j=0;$j<$test;$j++){
    $n =readline();

    $a=explode(" ",readline());
    $index=0;
    for ($i=0;$i<$n;$i++){
        if($i==0){
            if($a[$i]!=$a[$i+1] && $a[$i]!=$a[$i+2] ){
                $index = $i;
            }
        }
        elseif ($i==($n-1)){
            if($a[$i]!=$a[$i-1] && $a[$i]!=$a[$i-2]){
                $index = $i;
            }
        }
        else{
            if($a[$i]!=$a[$i+1] && $a[$i]!=$a[$i-1]){
                $index = $i;
            }
        }
    }
    echo $index+1;
    echo "\n";
}