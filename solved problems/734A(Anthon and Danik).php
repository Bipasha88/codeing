<?php

$n = readline();
$win_line = readline();
$Anton = 0;
$Danik = 0;

for ($i=0; $i<$n; $i++ ){
    if($win_line[$i] == 'A')
        $Anton++;
    else
        $Danik++;
}

if($Anton>$Danik)
    echo "Anton";
elseif ($Danik>$Anton)
    echo "Danik";
else
    echo "Friendship";