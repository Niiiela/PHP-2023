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
        <h2>Apicar 10% de aumento e desconto ao preço de um produto em <span>PHP</span></h2>
    </div>
    <div class="ex1">
        <?php
        /*
            Adição          $a = $a + $b  ou $a + = $b
            Subtração       $a = $a - $b  ou $a - = $b
            Multiplicação   $a = $a * $b  ou $a * = $b
            Divisão         $a = $a / $b  ou $a / = $b
            Módulo          $a = $a % $b  ou $a % = $b
            Concatenação    $a = $a . $b  ou $a . = $b
        */
        
        //Preço
        $preco = $_GET["p"];
        echo "O preço do produto é R$ " .number_format ($preco, 2);
        // Informe o valor : http://localhost/web/PHP-2023/Operadores%20de%20Atribui%C3%A7%C3%A3o%2006/?p=200

        
        //Apicar 10% de desconto ao preço de um produto.
        //$preco = $preco + ($preco*10/100); ou
        $preco += $preco*10/100;
        echo "<br>O novo preço com 10% de aumento será: R$ " .number_format ($preco, 2);

        //Desconto
        $preco -= $preco*10/100;
        echo "<br>O novo preço com 10% de desconto será: R$ " .number_format ($preco, 2);
        ?>
    </div>
</body>

</html>