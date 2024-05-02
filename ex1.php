<?php
/*echo "Hello World";
echo "<br>";*/
echo "<h1> Hello World!</h1>";
//Fixe

$Nome = "Miguel";
$Idade = 16;
$casado = false;
$altura = 1.64;
$Dinheiro = 1000;



//Constantes
const pi = 3.1416;

define("Config", "file.cfg");
//Constantes Mágicas
echo __FILE__;
echo __DIR__;
echo __LINE__;


//var_dump
echo "<br>";
var_dump($Nome);
echo "<br>";
var_dump($altura);


//Atribuição encadeada
$n1=$n2=$n3=300;

echo "Olá $nome! Tens $Idade e medes $Altura m.";

echo "Olá $Nome! Tens a pagar $Dinheiro €";

$soma = "2"+"2";

echo $soma;

var_dump($soma);
?>