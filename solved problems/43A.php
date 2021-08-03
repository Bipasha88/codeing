<?php
$n = (int)readline();
$team1 = "";
$team2 = "";
$t1=0;
$t2=0;
for($i=0;$i<$n;$i++){
    $team=readline();
   if($i==0){
       $team1 =$team;
       $t1++;
   }
   elseif($team1==$team){
       $t1++;
   }
   else{
       $team2=$team;
       $t2++;
   }
}

if($t1>$t2){
    echo $team1;
}
else{
    echo $team2;
}