<?php

    $n = intval(readline());
    
        $s = floor($n % 60);
        $m = floor(($n % 3600) / 60);
        $h = floor($n / 3600);
    
    echo $h . ":" . $m . ":" . $s . "\n";
    
?>
