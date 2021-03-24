<?php
function diamond()
{

    $size = 9;

    for ($i = 1; $i <= $size; $i=$i+2)
    {
        for ($j=0; $j < ($size-$i)/2; $j++) {
            print ("&nbsp;&nbsp");
        }
        for ($j=0; $j < $i; $j++) {
            print ("*");
        }

        echo '<br>';
    }

    for ($i = $size ; $i >= 1; $i=$i-2)
    {
        for ($j=($size-$i)/2; $j >= 1; $j--) {
            print ("&nbsp;&nbsp");
        }
        for ($j=$i; $j >= 1; $j--) {
            print ("*");
        }

        echo '<br>';
    }
}
echo diamond();
