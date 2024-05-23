<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de IP para binário</title>
    <link rel="icon" href="Imagens/favicon.ico">
    <link rel="stylesheet" href="IPs.css">
</head>

<body>
    <h2>Resultado</h2>
    <div>
        <?php
        $IP = $_REQUEST["UIP6"];

        function IPConv($IP)
        {
            $Array = explode(":", $IP);

            for ($i = 0; $i < 8; $i++) {
                $ArrayBi[] = str_pad(base_convert($Array[$i], from_base: 16, to_base: 2), 8, "0", STR_PAD_LEFT);
            }
            for ($i = 0; $i < 8; $i++) {
                echo strtoupper($Array[$i]);
                echo ":";
            }
            echo strtoupper($Array[3]) . " >> ";
            for ($i = 0; $i < 8; $i++) {
                echo
                $ArrayBi[$i];
                echo ".";
            }
            echo $ArrayBi[7];
        }
        IPConv($IP);
        ?>
    </div>
    <button><a href="IP2Binary.html">Inicio</a></button>
</body>

</html>