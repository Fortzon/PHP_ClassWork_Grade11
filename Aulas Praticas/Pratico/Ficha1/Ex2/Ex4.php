<?php
$Minutos = $_REQUEST["minutos"];

$Segundos = $Minutos * 60;
$Horas = $Minutos / 60;

echo "$Minutos Minutos corresponde a $Horas Horas e a $Segundos Segundos.";