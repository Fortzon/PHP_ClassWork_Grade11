<?php
$num = $_REQUEST["numero"];
$num2 = $_REQUEST["numero2"];

$cont=0;

echo "Os números primos entre $num e $num2 são:<br>";

for ($i = $num; $i<$num2; $i++)
{
    for ($j= 1; $j<$i; $j++)
    {
        if($i % $j == 0)
        {
            $cont++;    
        }
    }
    if ($cont <= 1 && $i != 0 && $i != 1)
    {
        echo "$i<br>";    
    }
    $cont=0;
}

?>