<?php
    
    $tempo = intval(readline());
    $vm = intval(readline());
    
    $litros = ($tempo * $vm) /12;
    echo  number_format($litros, 3, '.', ''). "\n";
    
?>
