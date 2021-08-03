<?php

$param=readline();
$param_line=explode(" ",$param);

$n=$param_line[0];
$x=$param_line[1];

$c=0;

for ($i=0;$i<$n;$i++){
    $queue=readline();
    $q=explode(" ",$queue);
    if($q[0]=="+"){
        $x+=$q[1];
    }
    elseif ($q[0]=="-"){
        if($q[1]>$x){
            $c++;
        }
        else{
            $x-=$q[1];
        }
    }
}

echo $x." ".$c;