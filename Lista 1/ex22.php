<?php
    
    $n = round(floatval(readline()) * 100); 

    $contador100 = intval($n / 10000); 
    $n %= 10000;

    $contador50 = intval($n / 5000); 
    $n %= 5000;

    $contador20 = intval($n / 2000); 
    $n %= 2000;

    $contador10 = intval($n / 1000); 
    $n %= 1000;

    $contador5 = intval($n / 500); 
    $n %= 500;

    $contador2 = intval($n / 200); 
    $n %= 200;

    $contador1 = intval($n / 100); 
    $n %= 100;

    $contador050 = intval($n / 50); 
    $n %= 50;

    $contador025 = intval($n / 25); 
    $n %= 25;

    $contador010 = intval($n / 10); 
    $n %= 10;

    $contador05 = intval($n / 5); 
    $n %= 5;

    $contador01 = $n; 
    
    echo "NOTAS:". "\n" . 
         $contador100 . " nota(s) de R$ 100.00" . "\n" .
         $contador50 . " nota(s) de R$ 50.00" . "\n" .
         $contador20 . " nota(s) de R$ 20.00"  . "\n" .
         $contador10 . " nota(s) de R$ 10.00" . "\n" .
         $contador5 . " nota(s) de R$ 5.00" . "\n" .
         $contador2 . " nota(s) de R$ 2.00" . "\n" .
         "MOEDAS:". "\n" . 
         $contador1 . " moeda(s) de R$ 1.00" . "\n" .
         $contador050 . " moeda(s) de R$ 0.50" . "\n" .
         $contador025 . " moeda(s) de R$ 0.25"  . "\n" .
         $contador010 . " moeda(s) de R$ 0.10" . "\n" .
         $contador05 . " moeda(s) de R$ 0.05" . "\n" .
         $contador01 . " moeda(s) de R$ 0.01" . "\n";
    
?>
