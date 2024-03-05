<?php

    list($n1, $n2, $n3, $n4) = explode(" " , readline());
    
    $media = (($n1 * 2) + ($n2 * 3) + ($n3 * 4) + ($n4 * 1)) / 10;
    
    if($media >= 7.0){
        echo "Media: " . number_format($media, 1, '.', '') . "\n".
             "Aluno aprovado." . "\n";
             
    }else if($media < 5.0){
        $media *= 10;
        $media = floor($media);
        $media /= 10;
        echo "Media: " . $media . "\n".
             "Aluno reprovado." . "\n"; 
             
    }else if($media >= 5.0 and $media <= 6.9){
        $ex = floatval(readline());
        $mediaex = ($ex + $media) / 2;
        
        if($mediaex >= 5.0){
            echo "Media: " . number_format($media, 1, '.', '') . "\n".
                 "Aluno em exame." . "\n".
                 "Nota do exame: " . number_format($ex, 1, '.', '') . "\n".
                 "Aluno aprovado." . "\n".
                 "Media final: " . number_format($mediaex, 1, '.', '') . "\n";
                 
        }else if($mediaex < 5.0){
            echo "Media: " . number_format($media, 1, '.', '') . "\n".
                 "Aluno em exame." . "\n".
                 "Nota do exame: " . number_format($ex, 1, '.', '') . "\n".
                 "Aluno reprovado." . "\n".
                 "Media final: " . number_format($mediaex, 1, '.', '') . "\n";
                 
        }
        
    }
?>
