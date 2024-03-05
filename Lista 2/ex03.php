<?php

    $n= floatval(readline());
    
    if($n >= 0 and $n <= 25){
        echo "Intervalo [0,25]" . "\n";
    }else if($n > 25 and $n <= 50){
        echo "Intervalo (25,50]" . "\n";
    }else if($n > 50 and $n <= 75){
        echo "Intervalo (50,75]" . "\n";
    }else if($n > 75 and $n <= 100){
        echo "Intervalo (75,100]" . "\n";
    }else{
        echo "Fora de intervalo" . "\n";
    }
?>