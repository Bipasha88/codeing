<?php

$n=(int)readline();
$strings=[];

for($i=0;$i<$n;$i++){
    $string=readline();
    $string_line=explode(" ",$string);
    for($j=0;$j<2;$j++){
        $strings[$i][$j]=$string_line[$j];
    }
}


    for ($j = 0; $j < $n; $j++) {
        if ($strings[$j][1] == "rat") {
            echo $strings[$j][0];
            echo "\n";
            unset($strings[$j]);
        }
    }
    for ($j = 0; $j < $n; $j++) {
        if ($strings[$j][1] == "woman" ||$strings[$j][1] == "child" ) {
            echo $strings[$j][0];
            echo "\n";
            unset($strings[$j]);
        }
    }
for ($j = 0; $j < $n; $j++) {
    if ($strings[$j][1] == "man") {
        echo $strings[$j][0];
        echo "\n";
        unset($strings[$j]);
    }
}
  for ($j = 0; $j < $n; $j++) {
    if ($strings[$j][1] == "captain") {
        echo $strings[$j][0];
        echo "\n";
        unset($strings[$j]);
    }
}




