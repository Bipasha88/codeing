<?php

$n=(int)readline();

$start=readline();
$end=readline();

$s1=str_split($start);
$s2=str_split($end);

$c=0;

for($i=0;$i<$n;$i++){
    $x=max($s1[$i],$s2[$i]);
    $y=min($s1[$i],$s2[$i]);

    if(($x-$y)<=5){
        $c+=$x-$y;
    }
    else{
        $c+=11-$x+$y-2+1;
    }
}
echo $c;