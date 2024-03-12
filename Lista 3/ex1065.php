<?php
    $v = 0;
    for($i = 0; $i < 5; $i++){
        $n = intval(readline());
        if($n % 2 == 0) {
            $v += 1;
        }
    }
    echo $v . " valores pares\n";
    
?>