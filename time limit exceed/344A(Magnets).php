<?php

class magnet{
    public $magnets = [];

    public function __construct($magnets){
        $this->magnets = $magnets;
    }
}
$number_of_magnets = readline();
$groups = 1;
$m = readline();
$magnets = new magnet($m);

for ($i=1; $i<$number_of_magnets; $i++){
    $magnets->magnets[$i] = readline();
    if($magnets->magnets[$i] == $magnets->magnets[$i-1])
        continue;
    else
        $groups++;
}
echo $groups;