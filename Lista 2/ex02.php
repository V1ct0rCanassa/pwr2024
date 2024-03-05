<?php

    list($a, $b, $c) = floatval(readline());
    
    $delta = ($b * $b) - 4 * $a * $c;
    
    if($a == 0.0 or $delta < 0.0){
        echo "Impossivel calcular" . "\n";
    }else{
        $r1 = (-($b) + sqrt($delta)) / (2 * $a);
        $r2 = (-($b) - sqrt($delta)) / (2 * $a);
        
        echo "R1 = " . number_format($r1, 5, '.', '') . "\n" .
             "R2 = " . number_format($r2, 5, '.', '') . "\n";
    }
    
?>