<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <?php

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2) / 2;
        echo "A media entre $nota1 e $nota2 é $m";

        $situacao = ($m > 6) ? "Aprovado" : "Reprovado";

        echo "<br>Situacao = $situacao";
        echo "<br>Situacao = ". (($m > 6) ? "Aprovado" : "Reprovado");

        
    ?>
</body>
</html>