<?php

$w=0;
$b=0;
for($i=0;$i<8;$i++){
    $string=readline();
    $s=str_split($string);
    for($j=0;$j<8;$j++){

         if($s[$j]=="Q"){
             $w=$w+9;
         }
         elseif($s[$j]=="R"){
             $w=$w+5;
         }
         elseif($s[$j]=="B" || $s[$j]=="N"){
             $w=$w+3;
         }
         elseif($s[$j]=="P"){
             $w=$w+1;
         }
        if($s[$j]=="q"){
            $b=$b+9;
        }
        elseif($s[$j]=="r"){
            $b=$b+5;
        }
        elseif($s[$j]=="b" || $s[$j]=="n"){
            $b=$b+3;
        }
        elseif($s[$j]=="p"){
            $b=$b+1;
        }
     }


}
if($w>$b){
    echo "White";
}
elseif($w<$b){
    echo "Black";
}
else{
    echo "Draw";
}

