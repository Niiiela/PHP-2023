<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Variáveis de variáveis em PHP</title>
</head>

<body>
    <div class="ex0">
        <h1>Aprendendo PHP</h1>
        <h2>Uso de variáveis de variáveis em <span>PHP</span></h2>
    </div>
    <div class="ex1">
        <?php
            $blog = "blogModa";
            $$blog = "cursos";
            
            echo "<br>O conteúdo da variavel Blog é: $blog";
            echo "<br>A variavel criada 'BlogModa' recebeu o valor de $blogModa";
        ?>
    </div>
</body>

</html>