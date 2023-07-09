<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Variáveis referenciadas em PHP</title>
</head>

<body>
    <div class="ex0">
        <h1>Aprendendo PHP</h1>
        <h2>Usar variáveis referenciadas em <span>PHP</span></h2>
    </div>
    <div class="ex1">
        <?php
        $a = 3;
        $b = &$a; // referência
        $b += 5;
        echo "<br>A variavel A vale: $a";
        echo "<br>A variavel B vale: $b";
        
        ?>
    </div>
</body>

</html>