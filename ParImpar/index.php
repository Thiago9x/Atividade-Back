<?php

include_once"function/calculo.php";
include_once"function/erro.php";
$resultadoPar = (string) null;
$resultadoImpar = (string) null;
    $num1 = $_POST["txtNum1"];
    $num2 = $_POST["txtNum2"];


    if(isset($_POST["btnCalcular"])){
        if($num1 == "" || $num2 == ""){
            echo(ERROCAIXAVAZIA);
        }
        else if($num1 == $num2){
            echo(ERRONUMEROSIGUAIS);
        }
        if($num1 > $num2){
            echo(NUMEROINCIALMAIORFINAL);
        }
            else{
                $resultadoPar = calculoPar((int)$num1,(int) $num2);
            
                $resultadoImpar = calculoImpar((int)$num1,(int) $num2);
            }
    }
    
    
?>

<!DOCTYPE html>

<html lang="pt BR">
    <head>
        <title>
           Par Impar
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
                <li class="menuItem"><a href="../Calculadora/index3.php">Calculadora</a></li>
                <li class="menuItem"><a href="../Tabuada/index.html">Tabuada</a></li>
               </ul>
           </div>
       </div>
           <div id = "titulo"> Calcule de acordo com a sua necessidade</div>
   </header>
        <main>
            <h1>Pares e Impares</h1>
            <form name="frmMedias" action="" method="post">
            <div>
                    <label>
                        Nº Incial :
                    </label> 
                    <select name="txtNum1" maxlength="10" value="" >
                    <option value="" disabled selected>Insira um Número</option>
                    <?php 
                            for($i=0;$i<=500;$i++){
                                echo("<option value='$i'>$i</option>");
                            }
                    ?>
                        
                    </select>
            </div>
            <div>
                    <label>
                        Nº Final :
                    </label>
                    <select name="txtNum2" maxlength="10"  value = "">
                        <option value=''disabled selected>Insira um Número</option>
                    <?php 
                            for($i=100;$i<=1000;$i++){
                                echo("<option value='$i'>$i</option>");
                            }
                        ?>

                    </select>
            </div>
            <div>
                    <input id="btnCalcular" type="submit" name="btnCalcular" value="Calcular">
            </div>
                <footer>
                    <div id="Resultadopar">
                        Pares: 
                        <?php echo("<br>" . $resultadoPar); ?>
                    </div>
                    <div id="Resultadoimp">
                        Impares:
                        <?php echo("<br>" . $resultadoImpar); ?>
                    </div>

                    <div id="quantPar">
                            <?php 
                            $quantPares = calculoquantPar((int) $num1,(int) $num2);
                            echo("São " . $quantPares . " pares");
                            ?>
                    </div>
                    <div id="quantImpar">
                        <?php 
                        $quantImpares = calculoquantImp((int) $num1,(int) $num2);
                        echo("São " . $quantImpares . " impares");?>
                    </div>
                    
                </footer>
            </form>
        </main>
    </body>
</html>