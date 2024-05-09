<?php
$Numero = $_REQUEST["numero"];

$numeroA = $Numero--;
$numeroP = $Numero++;

echo "Numero anterior a $Numero é $numeroA e o seguinte é $numeroP";
?>