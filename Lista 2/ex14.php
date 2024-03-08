<?php

    $tv = readline();
    $ta = readline();
    $tc = readline();
    
    switch (true) {
        case ($tv == "vertebrado" and $ta == "ave" and $tc == "carnivoro"):
            echo "aguia\n";
            break;
        case ($tv == "vertebrado" and $ta == "ave" and $tc == "onivoro"):
            echo "pomba\n";
            break;
        case ($tv == "vertebrado" and $ta == "mamifero" and $tc == "onivoro"):
            echo "homem\n";
            break;
        case ($tv == "vertebrado" and $ta == "mamifero" and $tc == "herbivoro"):
            echo "vaca\n";
            break;
        case ($tv == "invertebrado" and $ta == "inseto" and $tc == "hematofago"):
            echo "pulga\n";
            break;
        case ($tv == "invertebrado" and $ta == "inseto" and $tc == "herbivoro"):
            echo "lagarta\n";
            break;
        case ($tv == "invertebrado" and $ta == "anelideo" and $tc == "hematofago"):
            echo "sanguessuga\n";
            break;
        case ($tv == "invertebrado" and $ta == "anelideo" and $tc == "onivoro"):
            echo "minhoca\n";
            break;    
        
    }

?>
