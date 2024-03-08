<?php

    $sal = floatval(readline());
    
    
    if ($sal >= 0 and $sal <= 400.00){
        $vd = $sal * 0.15;
        $p = 15;
    }
    else if ($sal >= 400.01 and $sal <= 800.00){
        $vd = $sal * 0.12;
        $p = 12;
    }
    else if ($sal >= 800.01 and $sal <= 1200.00){
        $vd = $sal * 0.10;
        $p = 10;
    }
    else if ($sal >= 1200.01 and $sal <= 2000.00){
        $vd = $sal * 0.07;
        $p = 7;
    }
    else if($sal > 2000){
        $vd = $sal * 0.04;
        $p = 4;
    }
    
    $total = $sal + $vd;
    
    echo "Novo salario: " . number_format($total, 2, '.', '')  . "\n" . 
         "Reajuste ganho: " . number_format($vd, 2, '.', '') . "\n" .
         "Em percentual: " . $p . " %\n";

?>
