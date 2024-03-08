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

    $peso;
    $altura;
    $imc = $peso/($altura*$altura);

    echo$imc;
    if($imc<=16.9){
        echo "muito abaixo do peso";
    }
    else if($imc>=17&&$imc<=18.4){
        echo "abaixo do peso";
    }
    else if($imc>=18.5&&$imc<=24.9){
        echo "peso normal";
    }
    else if($imc>=25&&$imc<=29.9){
        echo "acima do peso";
    }
    else if($imc>=30&&$imc<=34.9){
        echo "obesidade grau I";
    }
    else if($imc>=35&&$imc<=40){
        echo "obesidade grau II";
    }
    ?>



    
</body>
</html>