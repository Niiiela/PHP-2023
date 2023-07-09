<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/style.css"/>
        <title>Operadores Aritméticos</title>
    </head>
    <body>
    <div class="ex0">
            <h1>Aprendendo PHP</h1>
            <h2>Operadores Aritméticoss em <span>PHP</span></h2>
        </div>
        <div class="ex1">
            <?php
            /*
            Operadores Aritméticos

            Adição: $a + $b
            Subtração: $c - $d
            Multiplicação: $b * $a
            Divisão: $c / $a
            Módulo: $e % $f
            */

            $n1 = 3;
            $n2 = 2;
            $m = ($n1 + $n2) /2;
            echo "<br><br><br>A soma é: " .($n1+$n2);
            echo "<br>A subtração é: " .($n1-$n2);
            echo "<br>A multiplicação é: " .($n1*$n2);
            echo "<br>A divisão é: " .($n1/$n2);
            echo "<br>O modulo é: " .($n1 % $n2);
            echo "<br> A média é: $m"; 
            ?>
        </div>
    </body>
</html>