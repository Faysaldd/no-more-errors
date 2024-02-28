<?php

if ($argc == 1) { 
    echo "geen wisselgeld"; 
    exit; 
}

$geldgeef = intval($argv[1]);

if ($geldgeef <= 0) { 
    echo "geen wisselgeld";
    exit;
}

define('EENHEDEN', [50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05]); 

foreach (EENHEDEN as $eenheid) {  
    if ($geldgeef >= $eenheid) { 
        $count = floor($geldgeef / $eenheid); 
        echo "$count x " . $eenheid . " euro\n";
        $geldgeef = $geldgeef % $eenheid; 
    }
}

?>