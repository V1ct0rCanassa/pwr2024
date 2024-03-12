<?php
    $imp = intval(readline());
    
    for($i = 0; $i < 12 ; $i++){
        $ni = $imp + $i;
      
        if($ni % 2 != 0){
            echo $ni . "\n";
        }
    }
    
?>