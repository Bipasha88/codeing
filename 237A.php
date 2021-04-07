<?php

$n=readline();
$s1=[];
$s2=[];
$c=1;
$d=1;

for($i=0;$i<$n;$i++){
    fscanf(STDIN,"%d %d",$h,$m);
    $s1[$i]=$h;
    $s2[$i]=$m;
}
for ($i=0;$i<$n-1;$i++){
    if($s1[$i]==$s1[$i+1] && $s2[$i]==$s2[$i+1]){
        $d++;
    }
    elseif ($s1[$i]!=$s1[$i+1] || $s2[$i]!=$s2[$i+1]){
        $d=1;
    }
    if($c<$d){
        $c=$d;
    }
}
echo $c;