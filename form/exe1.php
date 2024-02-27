<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $num1 + $num2;
    echo $num3 . "<br>";

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    
    if($nome = "Victor" and $senha === "pao" and $email === "v@gmail.com"){
        echo "Seu nome: " . $nome . "<br>" .
         "Seu email: " . $email . "<br>".
         "Sua senha: " . $senha . "<br>";
    }else{
        echo "Está tudo errado";
    }
?>