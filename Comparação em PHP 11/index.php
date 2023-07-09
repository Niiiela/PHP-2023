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
        //Mostrar a situação de um aluno, de acordo com a sua média obtida.
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) /2;
        echo "<br><br><br>A media entre $nota1 e $nota2 e $m<br/>";
        
        // Mostra se foi aprovado ou reprovado
        $situacao = ($m<6)?"Reprovado":"Aprovado";
        echo "<br>a situação do aluno é: $situacao<br><br>";
        // Outra forma de usar o Operadr unário
        echo "<br><br><br>Outra forma de usar o operador unário: " .($m<6?"Reprovado":"Aprovado");
        

        ?>
    </div>
</body>

</html>