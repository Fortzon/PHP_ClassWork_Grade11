<?php
//Funções

function soma($num1, $num2)
{
    return $num1 + $num2;
}

echo "A soma é: " . soma(4, 3);

function parimpar($num)
{
    if ($num % 2 == 0) {
        return "Par";
    } else {
        return "Impar";
    }
}

echo "<br> O número é: " . parimpar(5);

function ILoveYou($nome)
{
    echo "<br>I Love U $nome";
}

ILoveYou("Miguel");

$soma = soma(5, 3);

echo "<br> $soma";

function multi($num1, $num2 = 10)
{
    echo "<br>" . $num1 * $num2 . "<br>";
}

multi(4);

function fan(...$param)
{
    foreach ($param as $p) {
        echo "<br>" . $p;
    }
}

fan("Barco", 40, "Carro", 60, 70, 80);

$jogar = function ($jogo) {
    echo "<br>Joguei ao jogo $jogo";
};

$jogar("Witcher 3");
