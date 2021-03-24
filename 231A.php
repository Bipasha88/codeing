<?php
$n=(int)readline();
$sum=0;
$sum1=0;
$problems = [];
for ($i=0; $i<$n; $i++){

    $number =readline();
    $arrays=explode(" ",$number);

    for($j=0; $j<3; $j++){

        $problems[$i][$j]= (int)$arrays[$j];

    }
}

for ($i=0; $i<$n; $i++){
    for($j=0; $j<3; $j++){
        $sum=$sum+$problems[$i][$j];
    }
    if($sum>=2){
        $sum1++;
    }
    $sum=0;
}
echo $sum1;