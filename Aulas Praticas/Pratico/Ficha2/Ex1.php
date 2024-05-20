<?php
$Numero = $_REQUEST["numero"];

if ($Numero % 2==0)
{
    echo "$Numero é par";
}

elseif ($Numero % 2!=0)
{
    echo "$Numero é impar";
}

else 
{
    echo "$Numero não é impar ou par";
}

?>