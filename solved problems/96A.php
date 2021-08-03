<?php
$string=readline();

$length=strlen($string);

$string_line=str_split($string);


$z=0;
$o=0;
$x=0;

for($i=0;$i<$length;$i++){
    if($string_line[$i]==0){
        $z++;
        $o=0;
    }
    else{
        $o++;
        $z=0;
    }
    if($z==7 || $o==7){
        $x=1;
    }
}

if($x==1){
    echo "YES";
}
else{
    echo "NO";
}
