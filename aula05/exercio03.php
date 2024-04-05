<?php
function nota($not1, $not2){
    $soma = ($not1 + $not2) /2;
    switch($soma){

    case $soma >= 6; 
        echo "Aluno aprovado"; 
        break;
    case $soma >=4; 
        echo "Aluno em recuperação";
        break;
    case $soma>=0;
        echo "Aluno reprovado";
        break;
        deafault:
        echo "Nota inválida";
    }
}
nota(10, 5);
?>