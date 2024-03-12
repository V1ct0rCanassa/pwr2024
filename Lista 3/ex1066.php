<?php
    $par = 0;
    $imp = 0;
    $pos = 0;
    $neg = 0;
    for($i = 0; $i < 5; $i++){
        $n = intval(readline());
        if($n % 2 == 0) {
            $par += 1;
        }else if($n % 2 != 0){
            $imp += 1;
        }
        if($n > 0){
            $pos += 1;
        }else if($n < 0){
            $neg += 1;
        }
        
    }
    echo $par . " valor(es) par(es)\n" .
         $imp . " valor(es) impar(es)\n" .
         $pos . " valor(es) positivo(s)\n" .
         $neg . " valor(es) negativo(s)\n";
    
?>