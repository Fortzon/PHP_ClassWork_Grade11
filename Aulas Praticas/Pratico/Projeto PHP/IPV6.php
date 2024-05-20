<?php
$IP = $_REQUEST["UIP6"];

function IPConv($IP)
{
    $Array = explode(":", $IP);

    for ($i = 0; $i < 8; $i++) {
        $ArrayBi[] = base_convert($Array[$i], from_base: 16, to_base: 2);
    }



    for ($i = 0; $i < 8; $i++) {
        echo strtoupper($Array[$i]);
        echo ":";
    }

    echo strtoupper($Array[3]) . " >> ";

    for ($i = 0; $i < 8; $i++) {
        echo $ArrayBi[$i];
        echo ".";
    }
    echo $ArrayBi[7];
}

IPConv($IP);