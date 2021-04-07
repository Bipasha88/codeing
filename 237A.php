<?php

$n=readline();

$c=1;
$d=1;

fscanf(STDIN,"%d %d",$h1,$m1);

    while (--$n) {
        fscanf(STDIN,"%d %d",$h2,$m2);
        if($h2==$h1 && $m2==$m1){
            $d++;
        }
        elseif($h2!=$h1 || $m2!=$m1){
            $d=1;
        }
        if($c<$d){
            $c=$d;
        }

        $h1=$h2;
        $m1=$m2;
    }




echo $c;