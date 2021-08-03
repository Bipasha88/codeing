<?php

class passengers{

    public $exit;
    public $enter;

    public function __construct($exit,$enter){

        $this->exit = $exit;
        $this->enter = $enter;
    }
}

$n = readline();
$passengers = [];


for ($i=0; $i<$n; $i++){

    $input = explode(" ",readline());
    $passengers[] = new passengers($input[0],$input[1]);
}
$max = $passengers[0]->enter;
$total = $passengers[0]->enter;


for ($i=0; $i<$n-1; $i++){

    $total = abs($total - $passengers[$i+1]->exit) + $passengers[$i+1]->enter;

    if($max < $total)
        $max = $total;
}

echo $max;



