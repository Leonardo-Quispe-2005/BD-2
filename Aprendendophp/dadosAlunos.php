<?php
    $nome = $_POST['txNome'];
    $idade = $_POST['txIdade'];
    $verificacao = "";

    if ($idade <= 10) {
        $verificacao = "Você é criança e Menor de idade";
    }
    
    else if ($idade < 18){
        $verificacao = "Menor de idade";
    }

    else{
        $verificacao = "Maior de Idade";
    }
    
    echo "Seu nome é: $nome <br>Você tem: $idade anos <br> $verificacao";
?>