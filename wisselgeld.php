<?php

define('EENHEDEN', [5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5]); 

if ($argc == 1) { 
    echo "geen wisselgeld"; 
    exit;
}

$geldgeef = round(floatval($argv[1]) * 20) * 5; 


if ($geldgeef <= 0) { 
    echo "geen wisselgeld"; 
    exit;
}

foreach (EENHEDEN as $eenheid) { 
    if ($geldgeef >= $eenheid) { 
        $count = floor($geldgeef / $eenheid); 
        if ($eenheid >= 100) { 
            echo "$count x " . $eenheid / 100 . " euro\n"; 
        } else { 
            echo "$count x " . $eenheid . " cents\n"; 
        }
        $geldgeef = $geldgeef % $eenheid; 
    }
}

?>