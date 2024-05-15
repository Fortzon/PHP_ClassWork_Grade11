<?php
/*echo "Hello World";
echo "<br>";*/
echo "<h1> Hello World!</h1>";
//Fixe

$Nome = "Miguel";
$Idade = 16;
$casado = false;
$Altura = 1.64;



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
var_dump($Altura);


//Atribuição encadeada
$Dinheiro=$n2=$n3=300;

echo "<br>";

echo "Olá $Nome! Tens $Idade anos e medes $Altura m.";

echo "<br>";

echo "Olá $Nome! Tens a pagar $Dinheiro €";

echo "<br>";

$soma = "2"+"2";

echo $soma;

var_dump($soma);

//Strings

$seasons = "Primavera, Verão, Outono, Inverno";
echo "<br>";
echo $seasons;

echo $seasons[9];

echo "<br>";

echo strlen($seasons);

echo "<br>";

echo substr($seasons,11,6);

echo "<br>";

echo strtoupper($seasons);

echo "<br>";

echo str_contains($seasons, "Pedro");

echo str_replace( "Verão", "Fortnite",$seasons);

echo "<br>";

echo $seasons;

$NomeDoFilme = (string)$n2;

//Operadores
// ** Potencia
//+ - * / %
//++ --
// += -= *= /=
//Usa o PEMDAS (Potencia, expoente, multiplicação, adição, subtração)

//Funções
echo "<br>";
echo base_convert("AB39C10",12,8);

?>