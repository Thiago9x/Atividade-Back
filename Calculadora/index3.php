<?php
/* include
include_once

require
require_once
*/
//import do arquivo de variaveis e constantes 
require_once('function/calculos.php');
require_once('function/erro.php');
//determinando uma variavel e definindo o seu tipo de dados
$resultado = (double) 0;
$valor1 = (double)0;
$valor2 = (double)0;
$operacao = (string)null;


if(isset($_POST['btnCalcular'])){
    
    if($_POST['txtValor1'] == "" || $_POST['txtValor2']== ""){
        echo (ERROCAIXAVAZIA);
    }
    else{  
 
            $valor1 = $_POST['txtValor1'];
            $valor2 = $_POST['txtValor2'];
            

        if(isset($_POST['rdoResultado'])){
            
            $operacao = strtoupper($_POST['rdoResultado']);
                if(is_numeric($valor1) && is_numeric($valor2)){
                    //Chamada da função calcular enviando os ardumentos de valores e operação
                    $resultado = calcular( $valor1 ,$valor2 , $operacao);
                }
            else{
                echo(ERRODADOSNAONUMERICOS);
            }
        }
        else{
            echo (ERROCAIXAVAZIA);
        }
    }
}
?>
<!DOCTYPE html>

<html lang="pt BR">
    <head>
        <title>
            Calculadora Simples
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="style/style.css">              
    </head>
    <body>
    <header>
       
    <div id="icone">
           <span class="hamburguer"></span>
           <span class="hamburguer"></span>
           <span class="hamburguer"></span>
       
           <div id="caixaMenu">
               <ul>
               <li class="menuItem"><a href="../Principal/index.html">Principal</a></li>
                <li class="menuItem"><a href="../CalculoMedia/index.php">Média</a></li>
                <li class="menuItem"><a href="../Tabuada/index.php">Tabuada</a></li>
                <li class="menuItem"><a href="../ParImpar/index.php">Par e Impar</a></li>
               </ul>
           </div>
       </div>
           <div id = "titulo"> Calcule de acordo com a sua necessidade</div>
   </header>
        <main>
            <h1>Calculadora Simples</h1>
            <form name="frmCalculo" action="" method="post">
                <div>
                    <lable>
                        Valor1 :  
                    </lable> 
                    <input type="text" placeholder="Insira um número" name="txtValor1" size="27" maxlength="25" value = "<?=$valor1?>"  >
                </div>
                <div>
                    <lable>
                        Valor2 : 
                    </lable>
                    <input type="text" placeholder="Insira um número" name="txtValor2" size="27" maxlength="25" value = "<?=$valor2?>"  >
                </div>
                    
                <div id="radios">
                    <div>
                    <lable>Calculos : </lable>
                    </div>
                    <div>
                    <input class="rdoResult" type="radio" name="rdoResultado" value="Soma"<?php if($operacao == 'SOMA'){echo('checked');}?>><span class="txtRdo">Somar </span>
                    </div>
                    <div>
                    <input class="rdoResult" type="radio" name="rdoResultado" value="Sub" <?php if($operacao == 'SUB'){echo('checked');}?>><span class="txtRdo">Subtrair</span>
                    </div>
                    <div>
                    <input class="rdoResult" type="radio" name="rdoResultado" value="Mult" <?php if($operacao == 'MULT'){echo('checked');}?>><span class="txtRdo">Multiplicar</span>
                    </div>
                    <div>
                    <input class="rdoResult" type="radio" name="rdoResultado" value="Div" <?php if($operacao == 'DIV'){echo('checked');}?>><span class="txtRdo">Dividir</span>
                    </div>
                </div>
                <div id="resultado">
                    <div id="result"><?=$resultado;?></div>
                    <input id="btnCalcular" type="submit" name="btnCalcular" value="Calcular">
                </div>
            </form>
        </main>
    </body>
</html>