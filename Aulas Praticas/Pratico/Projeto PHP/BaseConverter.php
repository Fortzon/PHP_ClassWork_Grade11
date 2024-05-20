<?php
$num = $_REQUEST["numero"];
$base = $_REQUEST["Base"];

switch ($base) {
    case "B": {
            echo base_convert($num, from_base: 10, to_base: 2);
            break;
        }
    case "O": {
            echo base_convert($num, from_base: 10, to_base: 8);
            break;
        }
    case "D": {
            echo base_convert($num, from_base: 10, to_base: 10);
            break;
        }
    case "H": {
            echo strtoupper(base_convert($num, from_base: 10, to_base: 16));
            break;
        }
}