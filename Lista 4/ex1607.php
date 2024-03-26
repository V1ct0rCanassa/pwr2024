<?php

    $t = intval(readline());
    
    
    for($i = 0; $i < $t; $i++){
        list($a, $b) = explode(" ", readline());
        
        $vezes = 0;
        for($j = 0; $j < strlen($a); $j++){
            if($a[$j] != $b[$j]){
                $valorA = ord($a[$j]);
                $valorB = ord($b[$j]);
                
                if($a[$j] > $b[$j]){
                    $vezes += abs($valorB - $valorA + 26) % 26;
                    
                }else if($a[$j] < $b[$j]){
                    $vezes += abs($valorB - $valorA);
                }
                
                
                
            }
        }
        echo $vezes . "\n";
    }

?>