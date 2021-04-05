<?php
$param =readline();

$param_line =explode(" ",$param);

$n=$param_line[0];
$k=$param_line[1];

for($i=0;$i<$k;$i++){
    $n2=str_split($n);
    $l=strlen($n);
    if($n2[$l-1]>=1){
        $n=$n-1;

    }
    elseif ($n2[$l-1]==0){
        $n=$n/10;

    }
}
echo $n;