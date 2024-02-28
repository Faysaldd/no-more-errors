<?php

define('geen_wisselgeld_melding', 'geen wisselgeld');

if ($argc == 1) { 
    echo geen_wisselgeld_melding; 
    exit; 
}

$geldgeef = intval($argv[1]);

if ($geldgeef <= 0) { 
    echo geen_wisselgeld_melding; 
    exit; 
}

$eenheden = array(50, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05); 

foreach ($eenheden as $eenheid) {  
    if ($geldgeef >= $eenheid) {
        $count = floor($geldgeef / $eenheid); 
        echo "$count x " . $eenheid . " euro\n"; 
        $geldgeef = $geldgeef % $eenheid; 
    }
}

?>
