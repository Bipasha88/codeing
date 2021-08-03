<?php
fscanf(STDIN,"%f",$a);
fscanf(STDIN,"%f",$b);



if($a>$b){
    echo ">";
}
elseif ($a<$b){
    echo "<";
}
else{
    echo "=";
}