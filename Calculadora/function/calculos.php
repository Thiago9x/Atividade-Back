<?php


    //Função para calcular as formulas matematicas
function calcular($n1 , $n2 , $tipoCalculo){
    //Criando variaveis locais dentro da função
    $numero1 = (double) 0;
    $numero2 = (double) 0;
    $opcaoCalculo = (string) null;
    $total = (double) 0;
    
    //Guardando os valores dos argumentos nas variaveis locais na função
    $numero1 = $n1;
    $numero2 = $n2;
    $opcaoCalculo = $tipoCalculo;
    
    
                        switch ($opcaoCalculo){
                            case ('SOMA');
                                $total = round($numero1 + $numero2 , 2);
                                break;
                            case ('SUB');
                                $total = round($numero1 - $numero2 , 2);
                                break;
                            case ('MULT');
                                $total = round($numero1 * $numero2 , 2);
                                break;
                            case ('DIV');
                                if($numero2 == 0 )
                                    echo (ERRODIVISAOZERO);
                                else
                                $total = round($numero1 / $numero2 , 2);
                                break;
                            
                            //essa opção é quando nehum dos cases nao for utilizado utilizara o default
                            
                            default:
                                echo(ERROCAIXAVAZIA);
                    }
    return $total;
}
?>

