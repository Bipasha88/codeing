<?php
$n=(int)readline();

$a_values=readline();
$a=[200000+10];
$a=explode(" ",$a_values);
$sum=0;

for($i=0;$i<$n;$i++){

        $sum=bcadd($sum,abs(bcsub($a[$i], $a[$i-1]))) ;

}
echo $sum;