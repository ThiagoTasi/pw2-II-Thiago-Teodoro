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
           case $imc < 20;{
                $classificacao = "Normal";
               break;
           case $imc < 30;{
                $classificacao = "Sobrepeso";
                $obesidade = "Obesidade Grau I";
               break;
           case $imc < 40;{
                $classificacao = "Obesidade";
                $obesidade = "Grau II";
               break;
          default;
              $clasificacao = "Obesidade Grave";
              $obesidade = "Grau III";
              break;
        }

        echo "<p>Peso: $peso kg</p>";
        echo "<p>Altura: $altura cm</p>";
        echo "<p>IMC: $peso imc</p>";

        echo "<br /><p>classificacao:$classificacao</p>";
        if($imc > 29.9){
            echo "<p>obesidade: $obesidade</p>";
        }

     
    ?>
</body>
</html>
