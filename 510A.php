<?php

$param=readline();
$param_line=explode(" ",$param);

$n=$param_line[0];
$m=$param_line[1];

$c=0;
for ($i=1;$i<=$n;$i++){
    for($j=0;$j<$m;$j++){
        if($i%4==2){
            if($j==$m-1)
            echo "#";
            else
                echo ".";
        }
        elseif($i%4==0){
            if($j==0)
                echo "#";
            else
                echo ".";
        }
        else
        echo "#";
    }
    echo "\n";
}