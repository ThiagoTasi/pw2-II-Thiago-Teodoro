<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício IMC</title>
</head>
<body>
    <?php
        $peso = 300;
        $altura = 1.75;
        $imc = $peso / pow($altura, 2);

        switch($imc); {
        case $imc< 18.5;
        $classificacao = "abaixo do peso";
        break;
        }
        case $imc < 25;{
        $classificacao = "normal";
        break;
        }

        case $imc < 30;{
        $classificacao = "sobrepeso";
        $obesidade = "obesidade grau I";
        break;
        }
        case $imc < 40;{
        $classificacao = "obesidade";
        $obesidade = "grau II";
        break;
        }

        default;
        $clasificacao = "obesidade grave";
        $obesidade = "grau III";
        break;
        }

        echo "<p>peso: $peso kg</p>";
        echo "<p>altura: $altura cm</p>";
        echo "<p>imc: $peso imc</p>";

        echo "<br /><p>classificacao:$classificacao</p>";
        if($imc > 29.9){
            echo "<p>obesidade: $obesidade</p>";
        }

     
    ?>
</body>
</html>