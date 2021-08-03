<?php

$q=(int)readline();

$n = (int)"";

for($i=0;$i<$q;$i++){

    $n=(int)readline();

    $k = 0;

    $c = 0;

    while ($n>1){

        if($n%2==0){
            $n = $n/2;
            $c++;
        }

        elseif ($n%3==0){
            $n = ($n*2)/3;
            $c++;
        }

        elseif ($n%5==0){
            $n = ($n*4)/5;
            $c++;
        }

        else{
            $k++;
        }

        if($k==1){
            break;
        }

    }

    if($n==1 && $c==0){
        echo "0";
        echo "\n";
    }

    elseif($k==1){
        echo "-1";
        echo "\n";
    }

    else{
        echo $c;
        echo "\n";
    }

}
