<?php
$n =(int)readline();
$x=[];
$y=[];
$ans=0;
$ymax=$xmax=-1000000;
$ymin=$xmin=1000000;
for($i=0;$i<$n;$i++){
    $param=readline();
    $param_line=explode(" ",$param);
    $x[$i]=$param_line[0];
    $y[$i]=$param_line[1];

    if($x[$i]>$xmax)
        $xmax=$x[$i];
    if($x[$i]<$xmin)
        $xmin=$x[$i];
    if($y[$i]>$ymax)
        $ymax=$y[$i];
    if($y[$i]<$ymin)
        $ymin=$y[$i];
}
if($n==1)
    $ans=-1;
else if($n==2)
{
    if(($x[0]==$x[1])||($y[1]==$y[0]))
        $ans=-1;
    else
        $ans=abs($x[0]-$x[1])*abs($y[1]-$y[0]);
}
else
{
    $ans=abs($xmax-$xmin)*abs($ymax-$ymin);
}
if($ans==0)
    echo "-1";
else
    echo $ans;

