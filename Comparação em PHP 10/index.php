<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Comparação em PHP</title>
</head>

<body>
    <div class="ex0">
        <h1>Aprendendo PHP</h1>
        <h2>Operadores Relacionais / Operador Unário em <span>PHP</span></h2>
    </div>
    <div class="ex1">
        <?php
        /*
            Operadores Relacionais
            Maio		$a > $b
            Menor		$a < $b
            Maior ou igual	$a >= $b
            Menor ou igual	$a <= $b
            Diferente	$a <> $b ou $a != $b
            Igual		$a == $b
            Idêntico	$a === $b
        */

        // Igual		$a == $b
        $a = 3;
        $b = "3";
        $r = $a == $b ?"Sim":"Não";
        echo "<br><br><br>As variaveis A e B são iguais: $r<br><br><br>";

        //Idêntico	$a === $b
        $a = 3;
        $b = "3";
        $r = $a === $b ?"Sim":"Não";
        echo "<br><br><br>As variaveis A e B são iguais: $r<br><br><br>";
        /*
            Operador Unário
            expressão ? verdadeiro : falso
	        ex00: $maior = $a>$b ? $a : $b
            ex01: $r = $a>$b? $a+b : $a-b
            ex02: $sit = $m <7?"recuperação" : "aprovado"

            Permite que o usuário escolha entre somar e multiplicar dois números.

            Passando valores na URL (?a=5&b=3&tipo=s)
            http://localhost/web/PHP-2023/Compara%C3%A7%C3%A3o%20em%20PHP%2010/?a=5&b=3&tipo=s
         */
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["tipo"];
        echo "<br>Os valores passados foram $n1 e $n2 <br>";
        $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
        echo "os resultados seram: $r";
        ?>
    </div>
</body>

</html>