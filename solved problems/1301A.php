<?php

$n = (int)readline();


for($i=0;$i<$n;$i++){
    $count=0;

    $a1 = readline();
    $b1 = readline();
    $c1 = readline();

    $a = str_split($a1);
    $b = str_split($b1);
    $c = str_split($c1);

    $length = strlen($a1);

    for ($j=0;$j<$length;$j++){
        if($a[$j]==$c[$j] || $b[$j]==$c[$j]){
            $count++;
        }
    }

    if($count==$length){
        echo "YES";
        echo "\n";
    }
    else{
        echo "NO";
        echo "\n";
    }

}