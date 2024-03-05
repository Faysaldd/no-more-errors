<?php

define('EENHEDEN', [5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5]);

function calcWisselgeld($monie) 
{
    return round(floatval($monie) * 20) * 5;
}

function showWisselgeld($wisselmonie) 
{
    foreach (EENHEDEN as $eenheid) {
        if ($wisselmonie >= $eenheid) {
            $count = floor($wisselmonie / $eenheid);
            if ($eenheid >= 100) {
                echo "$count x " . $eenheid / 100 . " euro\n";
            } else {
                echo "$count x " . $eenheid . " cent" . ($eenheid > 1 ? 's' : '') . "\n";
            }
            $wisselmonie %= $eenheid;
        }
    }
}

function main($argc, $argv) 
{
    if ($argc == 1) {
        echo "geen wisselgeld";
        exit;
    }

    $geldgeef = calcWisselgeld($argv[1]);

    if ($geldgeef <= 0) {
        echo "geen wisselgeld";
        exit;
    }

    showWisselgeld($geldgeef);
}

main($argc, $argv);

?>