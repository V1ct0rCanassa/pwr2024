<?php
    $v = 0;
    for($i = 0; $i < 6; $i++){
        $n = floatval(readline());
        if($n >= 0){
            $v += 1;
        }
    }
    echo $v . " valores positivos\n";
?>