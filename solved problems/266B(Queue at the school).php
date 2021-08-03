<?php

$input = explode(" ",readline());
$queue = str_split(readline());

$students = $input[0];
$time = $input[1];

for($i=0; $i<$time; $i++){

    for ($j=0; $j<$students-1; $j++){
        if($queue[$j] == 'B' && $queue[$j+1] == 'G'){

            $queue[$j] = 'G';
            $queue[$j+1] = 'B';
            $j++;
        }
    }
}
for ($i=0; $i<$students; $i++){
    echo $queue[$i];
}
