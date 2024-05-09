<?php
$Numero1 = $_REQUEST["numeroconta"];
$Numero2 = $_REQUEST["numeroconta2"];

$Soma = $Numero1 + $Numero2;
$Subtracao = $Numero1 - $Numero2;
$Multiplicacao = $Numero1 * $Numero2;
$Divisao = $Numero1 / $Numero2;
$Raiz1 = sqrt($Numero1);
$Raiz2 = sqrt($Numero2);
$Elevado = $Numero2 ** $Numero2;

echo "A soma de $Numero1 e $Numero2 é $Soma";
echo "<br>";
echo "A subtração de $Numero1 e $Numero2 é $Subtracao";
echo "<br>";
echo "A multiplicação de $Numero1 e $Numero2 é $Multiplicacao";
echo "<br>";
echo "A divisão de $Numero1 e $Numero2 é $Divisao";
echo "<br>";
echo "A raiz quadrada de $Numero1 é $Raiz1 e a de $Numero2 é $Raiz2";
echo "<br>";
echo "$Numero1 elevado a $Numero2 é $Elevado";