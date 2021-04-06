<?php

$n=(int)readline();
$seats=[];
$c=0;
for($i=0;$i<$n;$i++){
    $s=readline();
    $s_line=explode("|",$s);
    array_push($seats,$s_line[0]);
    array_push($seats,$s_line[1]);
}

for($i=0;$i<(2*$n);$i++){
    if($seats[$i]=="OO"){
        $seats[$i]="++";
        $c=1;
        break;
    }

}
if($c==1){
    echo "YES";
    echo "\n";
    for($i=0;$i<(2*$n)-1;$i=$i+2){
        echo $seats[$i]."|".$seats[$i+1];
        echo "\n";
    }
}
else{
    echo "NO";
    echo "\n";
}
