<?php
    
    list($x, $y) = explode(" " , readline());
    
    while($x != 0 and $y != 0){
        if($x > 0 and $y > 0){
           echo "primeiro\n";
        
        }else if($x < 0 and $y > 0){
           echo "segundo\n";
        
        }else if($x < 0 and $y < 0){
           echo "terceiro\n";
        
        }else if($x > 0 and $y < 0){
           echo "quarto\n";
        
        }
        list($x, $y) = explode(" " , readline());
    }
?>
