<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Proyecto 3
        </title>
    </head>
    <body>
        <h1>
            <?php
                //Esto es un comentario
                $PrimeraVariable = 2;
                echo $PrimeraVariable . "<br>";
                $SegundaVariable = 5;
                echo $SegundaVariable . "<br>";
                echo $PrimeraVariable + $SegundaVariable . "<br>";
                echo $PrimeraVariable - $SegundaVariable . "<br>";
                echo $PrimeraVariable * $SegundaVariable . "<br>";
                echo $PrimeraVariable / $SegundaVariable . "<br>";
                if($PrimeraVariable < 1 && $SegundaVariable > 2){
                    echo "Soy menor" . "<br>";
                }
                else{
                    echo "Soy menor" . "<br>";
                }
                $lenguaje = 'Javascript';
                switch ($lenguaje){
                    case "PHP":
                        echo 'PHP'. "<br>";
                        break;
                    case "Javascript":
                        echo 'Javascript'. "<br>";
                        break;
                    case "html":
                        echo 'html'. "<br>";
                        break;
                }
                //Arreglos
                $LenguajeDos = ["PHP","Javascript","html"];
                echo $LenguajeDos[0] . "<br>";
                echo $LenguajeDos[1] . "<br>";
                echo $LenguajeDos[2] . "<br>";
            ?>
        </h1>
    </body>
</html>
