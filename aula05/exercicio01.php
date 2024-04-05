<?php
function soma($num1, $num2){
    $total = $num1 + $num2;


    if($total >= 0 )
        return $total;

    else
        return 0;

}
echo soma(-1 , -90);
echo "\n";
?>