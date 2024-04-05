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
        $peso = 80;
        $altura = 1.78;
        $imc = 80 / pow($altura, 2);

        if($imc < 18.5) {
            $classificacao = "Magreza";
        }
        else if($imc < 25) {
            $classificacao = "Normal";
        }
        else if($imc < 30) {
            $classificacao = "Sobrepeso";
            $obesidade = "Grau I";
        }
        else if($imc < 40) {
            $classificacao = "Obesidade";
            $obesidade = "Grau II";
        }
        else {
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