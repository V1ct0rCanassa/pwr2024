<?php

    $t = intval(readline());
    
    
    for($i = 0; $i < $t; $i++){
        list($ra, $sh) = explode(" ", readline());
        
        switch (true) {
            case  $ra == "tesoura" and $sh == "papel" :
                echo "rajesh\n";
                break;
            case $sh == "tesoura" and $ra == "papel":
                echo "sheldon\n";
                break;
            case  $ra == "papel" and $sh == "pedra" :
                echo "rajesh\n";
                break;
            case  $sh == "papel" and $ra == "pedra" :
                echo "sheldon\n";
                break;
            case  $ra == "pedra" and $sh == "lagarto" :
                echo "rajesh\n";
                break;
            case  $sh == "pedra" and $ra == "lagarto" :
                echo "sheldon\n";
                break;
            case  $ra == "lagarto" and $sh == "spock" :
                echo "rajesh\n";
                break;
            case  $sh == "lagarto" and $ra == "spock" :
                echo "sheldon\n";
                break;
            case  $ra == "spock" and $sh == "tesoura" :
                echo "rajesh\n";
                break;
            case  $sh == "spock" and $ra == "tesoura" :
                echo "sheldon\n";
                break;
            case  $ra == "tesoura" and $sh == "lagarto" :
                echo "rajesh\n";
                break;
            case  $sh == "tesoura" and $ra == "lagarto" :
                echo "sheldon\n";
                break;
            case  $ra == "lagarto" and $sh == "papel" :
                echo "rajesh\n";
                break;
            case  $sh == "lagarto" and $ra == "papel" :
                echo "sheldon\n";
                break;
            case  $ra == "papel" and $sh == "spock" :
                echo "rajesh\n";
                break;
            case  $sh == "papel" and $ra == "spock" :
                echo "sheldon\n";
                break;
            case  $ra == "spock" and $sh == "pedra" :
                echo "rajesh\n";
                break;
            case  $sh == "spock" and $ra == "pedra" :
                echo "sheldon\n";
                break;
            case  $ra == "pedra" and $sh == "tesoura" :
                echo "rajesh\n";
                break;
            case  $sh == "pedra" and $ra == "tesoura" :
                echo "sheldon\n";
                break;
            case  $sh == $ra:
                echo "empate\n";
                break;
        }
    }
?>
