<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Operador Lógicos em PHP</title>
</head>

<body>
    <div class="ex0">
        <h1>Aprendendo PHP</h1>
        <h2>Mostrar se um eleitor é obrigado a votar ou não em <span>PHP</span></h2>
    </div>
    <div class="ex1">
        <?php
        /*
        Operador Lógicos
        "and &&"
            p	q	pEq
            v	v	V
            v	f	F
            f	f	F
            f	f	F

        "or ||"
            p	q	p OU q
            v	v	V	
            v	v	V
            f	v	V
            f	f	F

        "xor"
            p	q	p XOU q
            v	v	F
            v	f	V
            f	v	V
            f	f	F

        "!"
            p	Não p
            v	F
            f	V

        Mostrar se um eleitor é obrigado a votar ou não.
        */
        $ano = $_GET["an"];
        $idade = 2023 - $ano;
        echo "<br><br>Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade>=18 && $idade<65)?"obrigatório" :"não obrigatório";
        echo "<br>Dessa forma seu voto é $tipo";
        
        ?>
    </div>
</body>

</html>