<?php
    
    list($a, $b) = explode(" ", readline());
    
    if($a == $b){
        echo "O JOGO DUROU 24 HORA(S)\n";
    }else if($a > $b){
        $t = $a - $b;
        $hora = 24 - $t;
        echo "O JOGO DUROU " . $hora . " HORA(S)\n";
    }else if($a < $b){
        $hora = abs($a - $b);
        echo "O JOGO DUROU " . $hora . " HORA(S)\n";
    }
?>
