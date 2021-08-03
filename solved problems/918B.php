<?php

$parameter=readline();
$parameter_line=explode(" ",$parameter);

$n=$parameter_line[0];
$m=$parameter_line[1];
$servers=[];
$commands=[];

for($i=0;$i<$n;$i++){
    $server=readline();
    $server_line=explode(" ",$server);
    for($j=0;$j<2;$j++){
        $servers[$i][$j]=$server_line[$j];
    }
}

for($i=0;$i<$m;$i++){
    $command=readline();
    $tcommand=trim($command,";");
    $command_line=explode(" ",$tcommand);
    for($j=0;$j<2;$j++){
        $commands[$i][$j]=$command_line[$j];
    }
}

for($i=0;$i<$m;$i++){
    for($j=0;$j<$n;$j++){
        if($commands[$i][1]==$servers[$j][1]){
            echo $commands[$i][0]." ".$commands[$i][1]."; #".$servers[$j][0];
            echo "\n";
        }
    }
}




