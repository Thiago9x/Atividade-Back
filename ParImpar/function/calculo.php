<?php

function calculoPar (int $num1, int $num2){
    $resultadoPar = (string) null;
    for($i=$num1;$i<=$num2;$i++){
        if($i % 2 == 0){
            $resultadoPar = $resultadoPar . $i . "<br>";
        }
    }
    return $resultadoPar;
}
function calculoImpar (int $num1,int $num2){
    $resultadoImpar = (string) null;
    for($i=$num1;$i<=$num2;$i++){
        if($i % 2 != 0){
            $resultadoImpar = $resultadoImpar . $i . "<br>";
        }
    }
    return $resultadoImpar;
}
function calculoquantPar(int $num1,int $num2){
    $quantPares = (int) 0 ;
    for($i = $num1;$i <= $num2 ; $i++){
        if(($i % 2) == 0){
            $quantPares = $quantPares +1;
        }
    }
    return $quantPares;
}
function calculoquantImp( int $num1,int $num2){
    $quantImpares = (int) 0 ;
    for($i = $num1; $i <= $num2 ; $i++){
        if(($i % 2) != 0){
            $quantImpares = $quantImpares +1;
        }
    }
    return $quantImpares;
}

?>