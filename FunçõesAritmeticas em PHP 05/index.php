<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/style.css"/>
        <title>Funções Aritmeticas em PHP</title>
    </head>
    <body>
    <div class="ex0">
            <h1>Aprendendo PHP</h1>
            <h2>Funções Aritmeticas em <span>PHP</span></h2>
        </div>
        <div class="ex1">
            <?php 
            /*Funções Matemáticas:
                abs() Valor Absoluto
                pow() Potenciação
                sqrt () Raiz Quadrada
                round () Arredondamento
                intval() valor inteiro da variável
                number_format() Formatação
            */
                $a1 = $_GET["x"];
                $a2 = $_GET["y"];
                echo "<h2> Valores recebidos: $a1 e $a2</h2>";
                /*Para mostrar o resultado deve informar os dados (?x=4&y=-2). Segue o exemplo abaixo
                    http://localhost/web/PHP-2023/Fun%C3%A7%C3%B5esAritmeticas%20em%20PHP%2005/?x=4&y=-2
                */
                echo "O valor absoluto de $a1 e" .abs($a2);
                /* Resultado do valor em abs()*/

                /*Potenciaçã*/
                echo "<br> O valor de $a1<sup>$a2</sup> e " .pow($a1, $a2);

                /*sqrt ()*/
                echo "<br> A raiz de $a1 é " .sqrt($a1); 

                /*round ()*/
                echo "<br> O valor de $a2 arredondado é " .round($a2); //ceil (Arredonda sempre para cima), floor (arredonda sempre para baixo);

                //intval()  
                echo "<br>A parte inteira de $a2 é: " .intval($a2);

                //number_format()
                echo "<br> O valor de $a1 em moeda é R$:" .number_format($a1,2, ",". ".");
                

            ?>
        </div>
    </body>
</html>