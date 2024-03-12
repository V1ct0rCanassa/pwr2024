<?php
    $x = intval(readline());
    $y = intval(readline());
    $w = min($x, $y);
    $z = max($x, $y);
    $soma = 0;
    
    for($i = $w+1; $i < $z ; $i++){
        if($i % 2 != 0){
            $soma += $i;
        }
    }
    echo $soma . "\n";
    
?>