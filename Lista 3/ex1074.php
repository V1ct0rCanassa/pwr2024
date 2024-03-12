<?php
    $n = intval(readline());
    for($i = 1; $i <= $n ; $i++){
        $y = intval(readline());
        if($y != 0){
            if($y % 2 == 0){
            $parim = "EVEN";
            }else if($y % 2 != 0){
            $parim = "ODD";
            }
            if($y > 0){
            $posneg = "POSITIVE";
            }else if($y < 0){
            $parim = "NEGATIVE";
            }
        }else{
            echo "NULL\n";
        }
    }
    
    
?>