<?php
    $x = intval(readline());
    
    $in = 0;
    $out = 0;
    for($i = 0; $i < $x ; $i++){
        $y = intval(readline());
        if($y >= 10 and $y <= 20){
           $in += 1;
        }else{
           $out += 1; 
        }
    }
    echo $in . " in\n" . $out . " out\n" ;
    
?>