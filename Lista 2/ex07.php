<?php

    list($n1, $n2, $n3) = explode(" " , readline());
    
    $c1 = $n1;
    $c2 = $n2;
    $c3 = $n3;
    
    if($c1 < $c2){
        $comp = $c1;
        $c1 = $c2;
        $c2 = $comp;
    }
    if($c2 < $c3){
        $comp = $c2;
        $c2 = $c3;
        $c3 = $comp;
    }
    if($c1 < $c2){
        $comp = $c1;
        $c1 = $c2;
        $c2 = $comp;
    }
    
    echo $c3 . "\n" . $c2 . "\n" . $c1 . "\n" . "\n" .
         $n1 . "\n" . $n2 . "\n" . $n3 . "\n";
    
        
?>
