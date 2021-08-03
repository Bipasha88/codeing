<?php

$location = readline();
$steps = 0;
if($location % 5 == 0)
    $steps = $location / 5;
else
    $steps = (int)($location / 5)+1;

echo $steps;