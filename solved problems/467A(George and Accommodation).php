<?php

$number_of_rooms = readline();
$room_available = 0;
for ($i=0; $i<$number_of_rooms; $i++){
    $room_details = explode(" ",readline());
    if(($room_details[0]+1)< $room_details[1])
        $room_available++;
}

echo $room_available;