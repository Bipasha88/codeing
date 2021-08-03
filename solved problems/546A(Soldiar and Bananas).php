<?php

class banana{

    public $cost;
    public $dollar;
    public $required;

    public function __construct($cost,$dollar,$required){

        $this->cost =$cost;
        $this->dollar = $dollar;
        $this->required = $required;
    }
}

$input = explode(" ",readline());

$banana = new banana($input[0],$input[1],$input[2]);

$payment = 0;

for ($i=1; $i<=$banana->required; $i++){

    $payment += $banana->cost * $i;

}
$borrow = $payment - $banana->dollar;

if($borrow > 0)
    echo $borrow;
else
    echo "0";
