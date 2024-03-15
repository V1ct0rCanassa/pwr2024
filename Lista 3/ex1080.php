<?php
    
    $m = 0;
    for($i = 1; $i <= 100; $i++){
        $n = intval(readline());
        if($m < $n){
            $m = $n;
            $p = $i;
        }
        
        
    }
    
    echo $m . "\n" .  $p . "\n"; 
    
?>
