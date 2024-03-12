<?php
    $v = 0;
    $t = 0;
    for($i = 0; $i < 6; $i++){
        $n = floatval(readline());
        if($n >= 0){
            $v += 1;
            $t += $n;
        }
    }
    $media = $t / $v;
    echo $v . " valores positivos\n" . number_format($media, 1, '.', '') . "\n";
    
?>