<?php

$number_of_people = readline();
$people = explode(" ",readline());
$status = "";

for ($i=0; $i<$number_of_people; $i++){
    if($people[$i] == 1){
        $status = "HARD";
        break;
    }
    else{
        $status = "EASY";
    }
}

echo $status;