<?php
//Ciclos
/*
for($i=0;$i<10;$i++)
{
    echo "<br> Contador :$i";
}

echo "<br>";
$c=0;

while ($c<=10)
{
    echo "<br> Contador :$c";
    $c+=2;
}

echo "<br>";
$c=0;

do
{
    echo "<br> Contador :$c";
    $c += 2;
}
while($c<=10);

//For com multiplos parametros (Bué top, simplifica codigo )

echo "<br>";

for ($i=0,$c=2; $i<20,$c<=10;$c++,$i++)
{
    echo "<br> Contador: $i Contador2: $c";
}

echo "<br>";

for ($i = 0; $i < 20; $i++) 
{
    echo "<br> Contador3 :$i";
    if ($i==5)
    break;
}

echo "<br>";

for ($i = 0; $i < 20; $i++) 
{
    if ($i == 5)
        continue;
    echo "<br> Contador4 :$i";
}

echo "<br>";
echo "<br> $i";

*/

//Arrays

$estacionamento = ["Ford Fiesta", "Seat Ibiza", "Renault Cangoo", "Citroen Saxo"];

$valores = [3, 223, 444, 21];

echo $estacionamento[3];
echo "<br>";
echo $valores[2];
echo "<br>";


//Adicionar um valor a um array

$estacionamento[] = "Dacia Logan";
echo $estacionamento[4];
echo "<br>";

array_push($valores, 45);
echo $valores[4];
echo "<br>";

array_pop($valores);

$estacionamento[0] = "Ford KA";
echo $estacionamento[0];
echo "<br>";

//Array associativo

$estacionamento2 = [
    "lugar1" => "Ferrari Testarossa",
    "lugar2" => "Porshe Carrera",
    "lugar3" => "Tesla Cybertruck",
    "lugar4" => "Lamborguini Diabo"
];

echo $estacionamento2["lugar2"];
echo "<br>";

$valores2 = [
    1 => 23,
    2 => 545,
    3 => 33
];

echo $valores2[1];

//Array Multidimensional / Matriz

$thematrix = [
    [4, 3, 2],
    ["Neo", "Morpheus", "Trinity"],
    [true, false, true]
];

echo "<br>";
echo $thematrix[1][2];
echo "<br>";

$cidades = [
    "Portugal" => ["capital" => "Lisboa", "norte" => "Porto", "sul" => "Évora"],
    "Espanha" => ["Madrid", "Barcelona", "Sevilha"],
    "Brasil" => ["Brasilia", "São Paulo", "Rio de Janeiro"]
];

echo $cidades["Portugal"]["sul"];
echo "<br>";

foreach ($estacionamento2 as $carro) {
    echo "<br> $carro";
}