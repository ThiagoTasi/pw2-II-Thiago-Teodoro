<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $peso = 70;
    $altura = 1.85;
    $imc = $peso/ pow($altura, 2);

    
    if($imc < 16.5){
        $classificacao = "Muito abaixo do peso";
    }
    else if($imc < 18.4){
        $classificacao = "Abaixo do peso";
    }
    else if($imc < 24.9){
        $classificacao = "Peso normal";
    }
    else if($imc < 29.9{
        $classificacao = "Sobrepeso";
        $obesidade = "Grau I";
   }
    else if($imc < 34.9){
        $classificacao = "Obesidade grau I";
        $obesidade = "Grau II";
    }
    else{
        $classificacao = "Obesidade Grave";
        $obesidade = "Grau III";
    }

        echo "<p>Peso: $peso kg</p>";
        echo "<p>Altura: $altura cm</p>";
        echo "<p>IMC: $imc</p>";

        echo "<br /><p>Classificação: $classificacao</p>";
        if($imc > 29.9) {
            echo "<p>Obesidade: $obesidade</p>";
        }
    ?>



    
</body>
</html>
