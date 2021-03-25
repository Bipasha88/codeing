<?php
$parameter = readline();
$parameter_line=explode(" ",$parameter);

$sum=0;

$a= (int)$parameter_line['0'];
$b=(int)$parameter_line['1'];

while ($a<=$b){
    $a=$a*3;
    $b=$b*2;
    $sum++;

}
echo $sum;