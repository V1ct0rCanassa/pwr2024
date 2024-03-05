<?php

    list($a, $b, $c) = explode(" " , readline());
    
    if($a < $b + $c and $b < $a + $c and $c < $a + $b){
        $p = $a + $b + $c;
        echo "Perimetro = " . number_format($p, 1, '.', '') . "\n";
        
    }else{
        $area = ($a + $b) / 2* $c;
        echo "Area = " . number_format($area, 1, '.', '') . "\n";
        
    }
        
?>
