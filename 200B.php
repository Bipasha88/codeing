<?php

$n=readline();

$param=readline();

$j=explode(" ",$param);
$sum=0;
$ans=(float)0;
for ($i=0;$i<$n;$i++){
    $sum=$sum+$j[$i];
}
$ans=$sum/$n;
echo $ans;