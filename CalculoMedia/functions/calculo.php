<?php
    function calcular($n1, $n2, $n3,$n4){
    
    $numero1 = (double) 0;
    $numero2 = (double) 0;
    $numero3 = (double) 0;
    $numero4 = (double) 0;

    $total = (double) 0;

    $numero1 = $n1;
    $numero2 = $n2;
    $numero3 = $n3;
    $numero4 = $n4;
    

    $total = ($n1 +$n2 + $n3 + $n4) / 4;
 return $total;   
}
?>