<?php

    $n = intval(readline());
    
        $ano = floor($n / 365);
        $dias = $n % 365;
        $mes = floor($dias / 30);
        $dias %= 30;
        
    echo $ano . " ano(s)" . "\n" . $mes . " mes(es)" . "\n" . $dias . " dia(s)" . "\n" ;
    
?>
