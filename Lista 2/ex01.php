<?php

    list($a, $b, $c, $d) = explode(" ", readline());
    $somaab = $a + $b;
    $somacd = $c + $d;
    
    if($b > $c and $d > $a and $somacd > $somaab and $c >= 0 and $d >= 0 and $a % 2 === 0){
        echo "Valores aceitos" . "\n";
    }else{
        echo "Valores nao aceitos" . "\n";
    }
    
?>