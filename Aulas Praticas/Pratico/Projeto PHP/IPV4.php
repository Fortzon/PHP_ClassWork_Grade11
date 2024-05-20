<?php
$IP = $_REQUEST["UIP4"];

function IPConv($IP){
    $Array = explode(".", $IP);

    for ($i = 0; $i < 4; $i++) {
        $ArrayBi[] = base_convert($Array[$i], from_base: 10, to_base: 2);
    }



    for ($i = 0; $i < 3; $i++) {
        echo $Array[$i];
        echo ".";
    }

    echo $Array[3] . " >> ";

    for ($i = 0; $i < 3; $i++) {
        echo $ArrayBi[$i];
        echo ".";
    }
    echo $ArrayBi[3];
}

IPConv($IP);
?>