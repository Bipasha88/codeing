<html lang="">

<body>

<form method='POST'>
    <p>Enter a Odd number</p>
    <br>
    <label>
        <input type='text' name='value'>
    </label>
    <input type='submit' value='submit'>
    </form>


<?php
//$rows=(int)readline('Enter an integer: ');


$rows=$_POST['value'];
for($i=1; $i<=$rows; $i=$i+2)
{
    for($j=$i; $j<$rows; $j++)
    {
        echo "&nbsp;&nbsp;";
    }


    for($j=1; $j<=(2*$i-1); $j++)
    {
        echo "*";
    }

    echo "<br>";

}
for($i=$rows; $i>=1; $i=$i-2){

    for($j=($rows-$i)/2;$j>=1;$j--){

        print ("&nbsp; &nbsp ");
    }

    for($j=(2*$i-1);$j>=1;$j--){

        echo "*";
    }

    echo "<br>";

}
?>
</body>
</html>

