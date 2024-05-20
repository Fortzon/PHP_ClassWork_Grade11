<?php
$Numero = $_REQUEST["numero"];
$Tipo = $_REQUEST["tipo"];

switch($Tipo)
{
    case "T1": {
        $Numero = $Numero - ($Numero * 0.1);
        echo "O produto foi pago em cheque e ficou a $Numero €";
        break;  
    }
    case "T2": {
        $Numero = $Numero - ($Numero * 0.15);
        echo "O produto foi pago em dinheiro e ficou a $Numero €";
            break;
        }
    case "T3": {
            echo "O produto foi pago a pronto e ficou a $Numero €";
            break;
        }
    case "T4": {
            $Numero = $Numero + ($Numero * 0.1);
            echo "O produto foi pago em mais de duas vezes e ficou a $Numero €";
            break;
        }
          
}


?>