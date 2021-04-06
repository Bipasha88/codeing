<?php
$n=(int)readline();
$g=readline();
$g_line=explode(" ",$g);
$j=0;
$g1=[]; $g2=[] ;$g3=[];
for($i=1;$i<=$n;$i++){
    $a=(int)$g_line[$j];
    if($a==1) array_push($g1,$i);
    elseif($a==2) array_push($g2,$i);
    elseif ($a==3) array_push($g3,$i);
    $j++;
}

$b1=count($g1);
$b2=count($g2);
$b3=count($g3);
$b=min($b1,$b2,$b3);

if($b>0){
    echo $b;
    echo "\n";
    for ($i=0;$i<$b;$i++){
        echo $g1[$i]." ".$g2[$i]." ".$g3[$i];
        echo "\n";
    }
}
else{
    echo "0";
}
