<?php

    list($c, $q) = explode(" " , readline());
    
    switch ($c) {
        case 1: 
            $to = $q * 4.00;
            break;
        case 2: 
            $to = $q * 4.50;
            break; 
        case 3: 
            $to = $q * 5.00;
            break;
        case 4: 
            $to = $q * 2.00;
            break;
        case 5: 
            $to = $q * 1.50;
            break;
    }
    
    echo "Total: R$ " . number_format($to, 2, '.', '') . "\n";
?>
