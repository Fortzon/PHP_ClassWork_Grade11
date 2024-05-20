<?php
$num = $_REQUEST["numero"];


$resultado; $AntigoNum=0; $AtualNum=1;

echo "A sequência fibbonacci de $num é: <br>";

for ($i = 1; $i < $num; $i++){
        $resultado = $AntigoNum + $AtualNum;
        $AntigoNum = $AtualNum;
        $AtualNum = $resultado;
        echo "$resultado<br>";
    }




?>