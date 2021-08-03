<?php
$a=readline();
$b=readline();
$alength=strlen($a);
$blength=strlen($b);

$a_line=str_split($a);
$b_line=str_split($b);
$a2=[];
$b2=[];
$j=0; $k=0;

    for($i=0;$i<$alength;$i++){
        $a2[$i]=$a_line[$i];
    }
    for ($i=0;$i<$blength;$i++){
       $b2[$i]=$b_line[$i];
    }
    while($a2[$j]=="0"){
        array_shift($a2);


    }
    while ($b2[$k]=="0"){
        array_shift($b2);

    }

if($a2>$b2){
    echo ">";
}
elseif ($a2<$b2){
    echo "<";
}
else{
    echo "=";
}