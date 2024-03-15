<?php
    $n = intval(readline());
    $totalcoelho = 0;
    $totalratos = 0;
    $totalsapos = 0;
    $total = 0;
    for($i = 1; $i <= $n; $i++){
        
        list($quantia, $tipoanimal) = explode(" ", readline());
        
        switch ($tipoanimal) {
            case "C":
                $totalcoelho += $quantia;
                break;
            case "R":
                $totalratos += $quantia;
                break; 
            case "S":
                $totalsapos += $quantia;
                break;
            default:
                break;
        
        }
        $total += $quantia;
        
    }
    $porccoelho = ($totalcoelho * 100) / $total;
    $porcrato = ($totalratos * 100) / $total;
    $porcsapo = ($totalsapos * 100) / $total;
    
    echo "Total: " .  $total . " cobaias\n".
         "Total de coelhos: " .  $totalcoelho . "\n".
         "Total de ratos: " .  $totalratos . "\n".
         "Total de sapos: " .  $totalsapos . "\n".
         "Percentual de coelhos: " .  number_format($porccoelho, 2, '.', '') . " %\n".
         "Percentual de ratos: " .  number_format($porcrato, 2, '.', '') . " %\n".
         "Percentual de sapos: " .  number_format($porcsapo, 2, '.', '') . " %\n"; 
    
?>
