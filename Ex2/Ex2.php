<?php
$a = 0;
$a += 4.5;

$a++;

$a = "A5D39";
/*
echo "Este é o valor $a e o anterior é ". $a-- . " e o posterior é ". $a++;

//Funções aritméticas

echo "<br>";
echo "<br>";

echo "O valor absoluto é ". abs($a);
echo "<br>";

echo "Arredondar para cima ". ceil($a);
echo "<br>";
echo "Arredondar para baixo " . floor($a);
echo "<br>";
echo "Arredondar para o meio " . round($a);

echo "<br>";
*/

echo base_convert($a, 16, 10);
echo "<br>";

echo 4 === "4"; //Esta cena é o identico, tem que ser exatamente igual, também existe o !==
echo "<br>";

echo 1 <=> 1; //Este simbolo faz tudo, menor, igual e maior, -1 é o menor, 1 é maior e 0 igual
echo "<br>";
echo 1 <=> 2;
echo "<br>";
echo 3 <=> 2;
echo "<br>";
echo 2 <=> 3;
echo "<br>";

// && And/E
// || Or/Ou
// ! Not

echo "<br>";

$a = "Felicio";

if ($a == "Felicio") {
    echo "Olá Mestre";
} elseif ($a == "Zé Manel") {

    echo "OLA ZEZOCAS";
} else {
    echo "OHVAIPASSEARFIHDUMCÃO";
}

echo "<br>";

switch ($a) {
    case "Felicio":
        echo "Olá Mestre";
        break;
    case "Zé Manel":
        echo "OLA ZEZOCAS";
        break;
    default:
        "OHVAIPASSEARFIHDUMCÃO";
        break;
}

echo "<br>";
echo $a == "Felicio" ? "Olá Mestre" : "Xau";