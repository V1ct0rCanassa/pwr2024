<?php

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $salario = $_GET['salario'];
    
    if($salario <= 1045.00){
        $totaldesc = $salario * 0.075;
        echo "O valor que vc deve pagar é: " . $totaldesc . "<br>";
    }else if($salario > 1045.00 and $salario <= 2089.60){
        $totaldesc = $salario * 0.09;
        echo "O valor que vc deve pagar é: " . $totaldesc . "<br>";
    }else if($salario > 2089.60 and $salario <= 3134.40){
        $totaldesc = $salario * 0.12;
        echo "O valor que vc deve pagar é: " . $totaldesc . "<br>";
    }else if($salario > 3134.40 and $salario <= 6101.06){
        $totaldesc = $salario * 0.14;
        echo "O valor que vc deve pagar é: " . $totaldesc . "<br>";
    }else{
        $totaldesc = 6101.06 * 0.14;
        echo "O valor que vc deve pagar é: " . $totaldesc . "<br>";
    }
?>