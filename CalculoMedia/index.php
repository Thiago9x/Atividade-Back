<?php
    
    require_once('functions/erro.php');
    require_once('functions/calculo.php');
    
    $media = (double) 0;
    $nota1 = (double) 0;
    $nota2 = (double) 0;
    $nota3 = (double) 0;
    $nota4 = (double) 0;
    if(isset($_POST["btnCalcular"])){
//        Resgatando dados das caixas de textos
        $nota1 = $_POST["txtNota1"];
        $nota2 = $_POST["txtNota2"];
        $nota3 = $_POST["txtNota3"];
        $nota4 = $_POST["txtNota4"];
        
        
//        operadores de comparação
//            <
//            >
//            <=
//            >=
//            !=
//            ==
//            ===( compara o conteudo e o tipo de daods)
//            ==!( compara o conteudo e o tipo de dados)
//        Tratamento para caixa vazia
        if($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == "")
        {
            echo (ERROCAIXAVAZIA);
        }
        else{
//            is numeric serve para saber se a chegada é numero
            if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)){
            $media = calcular($nota1,$nota2,$nota3,$nota4);
            }
            else{
                echo(ERRODADOSNAONUMERICOS);
            }
        }
        
//        gettype permite verificar o tipo de dados da variavel ou objeto
//        echo(gettype($media));
       
    }
?>

<!DOCTYPE html>

<html lang="pt BR">
    <head>
        <title>
           Media
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
                <li class="menuItem"><a href="../Calculadora/index3.php">Calculadora</a></li>
                <li class="menuItem"><a href="../Tabuada/index.php">Tabuada</a></li>
                <li class="menuItem"><a href="../ParImpar/index.php">Par e Impar</a></li>
               </ul>
           </div>
       </div>
           <div id = "titulo"> Calcule de acordo com a sua necessidade</div>
   </header>
        <main>
            <h1>Calculo de Média</h1>
            <form name="frmMedias" action="" method="post">
                <div>
                    <lable>
                        Nota1 : 
                    </lable> 
                    <input type="text" name="txtNota1" size="27" maxlength="4" value = "<?=$nota1?>" >
                </div>
                <div>
                    <lable>
                        Nota2 : 
                    </lable>
                    <input type="text" name="txtNota2" size="27" maxlength="4" value = "<?=$nota2?>" >
                </div>
                <div>
                    <lable> 
                        Nota3 : 
                    </lable> 
                    <input type="text" name="txtNota3" size="27" maxlength="4" value = "<?=$nota3?>" >
                </div>
                <div>
                    <lable>
                    Nota4 : 
                    </lable>
                    <input type="text" name="txtNota4" size="27" maxlength="4" value = "<?=$nota4?>" >
                </div>
                    <input id="btnCalcular" type="submit" name="btnCalcular" value="Calcular">
                <div id="botaoReset"><a href="index.php"> Novo Calculo </a></div>
                <footer><h1>A média é: <?php echo($media);?></h1></footer>
            </form>
        </main>
    </body>
</html>