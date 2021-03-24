<?php
function print_pattern($num)
{
// Outer loop handles number of rows
    for ($i = 0; $i < $num; $i++)
    {
// inner loop handles indentation
        for($k = $num; $k > $i+1; $k-- )
        {
// Print stars
            echo "  ";
        }
// inner loop handles number of stars
        for($j = 0; $j <= $i; $j++ )
        {
// Print stars
            echo "* ";
        }
// go to new line after each row pattern is printed
        echo "\n";
    }
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern($num);
?>