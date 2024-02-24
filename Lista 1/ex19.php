<?php
    
    $contador100 = intval(0);
    $contador50 = intval(0);
    $contador20 = intval(0);
    $contador10 = intval(0);
    $contador5 = intval(0);
    $contador2 = intval(0);
    $contador1 = intval(0);
    $n = intval(readline());
    
    $t = $n;
    for($i = $n; $i >= 100; $i -= 100){
        $contador100++;
        $n -= 100;
    }
    for($j = $n; $j >= 50; $j -= 50){
        $contador50++;
        $n -= 50;
    }
    for($p = $n; $p >= 20; $p -= 20){
        $contador20++;
        $n -= 20;
    }
    for($l = $n; $l >= 10; $l -= 10){
        $contador10++;
        $n -= 10;
    }
    for($o = $n; $o >= 5; $o -= 5){
        $contador5++;
        $n -= 5;
    }
    for($o = $n; $o >= 2; $o -= 2){
        $contador2++;
        $n -= 2;
    }
    for($o = $n; $o >= 1; $o -= 1){
        $contador1++;
        $n -= 1;
    }
    
    echo $t . "\n" . 
         $contador100 . " nota(s) de R$ 100,00" . "\n" .
         $contador50 . " nota(s) de R$ 50,00" . "\n" .
         $contador20 . " nota(s) de R$ 20,00"  . "\n" .
         $contador10 . " nota(s) de R$ 10,00" . "\n" .
         $contador5 . " nota(s) de R$ 5,00" . "\n" .
         $contador2 . " nota(s) de R$ 2,00" . "\n" .
         $contador1 . " nota(s) de R$ 1,00" . "\n";
    
?>
