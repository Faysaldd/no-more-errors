<?php

if ($argc == 1) {
    echo "Geen wisselgeld";
    exit;
}

$geldgeef = intval($argv[1]);

if ($geldgeef <= 0) {
    echo "Geen wisselgeld";
    exit;
}

$muntjes = $geldgeef; 

echo $muntjes . " x 1 euro\n";

?>