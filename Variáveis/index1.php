<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/style.css"/>
        <title>Váriavel em PHP</title>

    </head>
    <body>
        <div class="ex0">
            <h1>Aprendendo PHP</h1>
            <h2>Variáveis em <span>PHP</span></h2>
        </div>

        <div class="ex1">
        <?php 
            /*Concatenanação 
            
            $nome = "Daniela Silva";
            $idade = 25;
            echo "<br>".$nome ." tem " .$idade ." ano!";
            */
            $no = "Dani";
            $sobrenome = "Vieira";
            $idade = "25";
            echo "<br>Qual o seu nome: $no $sobrenome tenho $idade anos!";
        ?>
        </div>
    </body>
</html>