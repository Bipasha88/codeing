<?php

$t = readline();

for ($k=0;$k<$t;$k++){

    $n = readline();
    $matrix=[];
    $count = 0;
    $position_i1 = "";
    $position_i2 = "";
    $position_j1 = "";
    $position_j2 = "";

    for ($i=0;$i<$n;$i++){

        $char = readline();
        $char_element = str_split($char);

        for ($j=0;$j<$n;$j++){

            $matrix[$i][$j] = $char_element[$j];
        }
    }

    for ($i=0;$i<$n;$i++){

        for ($j=0;$j<$n;$j++){

            if($matrix[$i][$j] == "*"){
                if($count>0){

                    $position_i2 = $i;
                    $position_j2 = $j;
                }
                else{
                    $position_i1 = $i;
                    $position_j1 = $j;
                }
                $count++;
            }

            if($count==2){
                break;
            }
        }
    }

    if(($position_i1<$position_i2 && $position_j1>$position_j2) ||
        ($position_i1<$position_i2 && $position_j1<$position_j2) ){

        $matrix[$position_i1][$position_j2] = "*";
        $matrix[$position_i2][$position_j1] = "*";
    }

    elseif (($position_i1<$position_i2 && $position_j1==$position_j2)){

        if($position_j1 == ($n-1)){

            $matrix[$position_i1][$position_j1-1] = "*";
            $matrix[$position_i2][$position_j2-1] = "*";
        }
        else{
            $matrix[$position_i1][$position_j1+1] = "*";
            $matrix[$position_i2][$position_j2+1] = "*";
        }
    }
    elseif($position_i1==$position_i2){

        if($position_i1 == ($n-1)){
            $matrix[$position_i1-1][$position_j1] = "*";
            $matrix[$position_i2-1][$position_j2] = "*";
        }
        else{
            $matrix[$position_i1+1][$position_j1] = "*";
            $matrix[$position_i2+1][$position_j2] = "*";
        }
    }

    for ($i=0;$i<$n;$i++) {

        for ($j = 0; $j < $n; $j++) {
            echo $matrix[$i][$j];
        }
        echo "\n";

    }
}

