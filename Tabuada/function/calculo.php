<?php
function operacao( int $tabuada, int $contador){
    $resultado = (string) null;
    for($count= 1 ; $count<=$contador; $count++){
        $resultado =  $resultado . $tabuada ."X" . $count . "=" .($tabuada * $count) . "<br>" ; 
}
return $resultado;
}   
?>