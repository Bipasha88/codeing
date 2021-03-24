<?php
$n=(int)readline();
$words=array($n);
for ($i=0;$i<$n;$i++){
    $words[$i]= readline();
}
foreach ($words as $word){
    echo $word;

}