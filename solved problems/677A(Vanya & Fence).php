<?php

class input_detail {
    public $number_of_friends;
    public $height_of_fence;
    public $height_of_friends;

    public function __construct($number_of_friends,$height_of_fence,$height_of_friends){
        $this->number_of_friends = $number_of_friends;
        $this->height_of_fence = $height_of_fence;
        $this->height_of_friends = $height_of_friends;
    }
}

$input1 = explode(" ",readline());
$input2 = explode(" ",readline());

$input = new input_detail($input1[0],$input1[1],$input2);
$width = 0;

for ($i=0; $i<$input->number_of_friends; $i++){
    if($input->height_of_friends[$i] <= $input->height_of_fence)
        $width++;
    else
        $width += 2;
}

echo $width;



