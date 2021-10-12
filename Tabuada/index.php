<?php

include_once"function/calculo.php";
include_once"function/erro.php";

$tabuada= (int) 0;
$contador=(int) 0;
$resultado=(string) null;



if(isset( $_POST['btnCalcular'])){
    $tabuada=$_POST['txtTabuada'];
    $contador=$_POST['txtContador'];

    if($tabuada=="0"){
        echo (ERROCAIXAVAZIA);
    }
    else if(!is_numeric($tabuada) || !is_numeric($contador)){
        echo(ERRODADOSNAONUMERICOS);
    }
    else{
    if($contador >=1){
        $resultado = operacao((double)$tabuada,(int)$contador);
        }
    else if($contador<="0"){
        echo(ERROCONTADOR);
    }
    }
}
?>

<!DOCTYPE html>

<html lang="pt BR">
    <head>
        <title>
           Tabuada
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
                <li class="menuItem"><a href="../ParImpar/index.php">Par e Impar</a></li>
               </ul>
           </div>
       </div>
           <div id = "titulo"> Calcule de acordo com a sua necessidade</div>
   </header>
        <main>
            <h1>Tabuada</h1>
            <form name="frmMedias" action="" method="post">
                <div>
                    <lable>
                        Tabuada :
                    </lable> 
                    <input type="text" name="txtTabuada" size="27" maxlength="10" value="<?php $tabuada?>" >
                </div>
                <div>
                    <lable>
                        Contador :
                    </lable>
                    <input type="text" name="txtContador" size="27" maxlength="10" value = "<?php $contador?>" >
                </div>
                    <input id="btnCalcular" type="submit" name="btnCalcular" value="Calcular">
                <footer><h1><?php echo($resultado);?> </h1></footer>
            </form>
        </main>
    </body>
</html>