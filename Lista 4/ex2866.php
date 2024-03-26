<?php

    $c = intval(trim(fgets(STDIN)));
    
    
    for($i = 0; $i < $c; $i++){
        $frase = trim(fgets(STDIN));
        $fraseminus = preg_replace('/[^a-z]/', '', $frase);
        
        $frasefinal = strrev($fraseminus);
        
        echo $frasefinal . "\n";
    }
?>
