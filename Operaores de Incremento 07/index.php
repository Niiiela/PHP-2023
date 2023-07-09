<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Operadores de Atribuição em PHP</title>
</head>

<body>
    <div class="ex0">
        <h1>Aprendendo PHP</h1>
        <h2>Mostrar qual foi o ano anterior ao ano atual em <span>PHP</span></h2>
    </div>
    <div class="ex1">
        <?php
        /*
            Pré-incremento 	    $a = $a + 1	    ++$a
            Pós-incremento 	    $a = $a + 1	    $a++
            Pré-decremento 	    $a = $a - 1	    --$a
            Pós-descremento 	$a = $a - 1	    $a--
        */
        $atual = $_GET["aa"];
        echo "<br>O ano atual é $atual";
        echo "<br>O ano atual é $atual e o ano anterior é" .--$atual

        #Comentário inline
            // Essa linha é um comentátio
            # Essa também é uma forma de comentário
        
        /*Comentário multiline: outra forma de comentário com mais lihas*/
        ?>
    </div>
</body>

</html>