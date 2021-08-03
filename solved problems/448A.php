<?php

$cups=readline();
$medals=readline();
$n=readline();

$cup=explode(" ",$cups);
$medal=explode(" ",$medals);

$c=0;
$m=0;

for($i=0;$i<3;$i++){
    $c+=$cup[$i];
    $m+=$medal[$i];
}

if($c%5==0){
    $c=$c/5;
}
else{
    $c=(int)($c/5+1);
}

if($m%10==0){
    $m=$m/10;
}
else{
    $m=(int)($m/10+1);
}
if(($c+$m)<=$n){
    echo "YES";
}
else{
    echo "NO";
}