<?php

$Tab = [
    1 => [],
    2 => [],
    3 => [],
    4 => [],
    5 => [],
];

for ($i = 1; $i <= 5; $i++) {
    for ($j = 0; $j <= 4; $j++) {
        array_push($Tab[$i], rand(0, 9));
    }
    echo $Tab[$i][0] . " ";
    echo $Tab[$i][1] . " ";
    echo $Tab[$i][2] . " ";
    echo $Tab[$i][3] . " ";
    echo $Tab[$i][4] . " ";
    echo "<br>";
}