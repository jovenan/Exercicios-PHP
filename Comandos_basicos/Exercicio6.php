<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <?php

        $ano = $_GET["an"];

        $idade = 2020 - $ano;

        $tipo = ($idade >= 18 && $idade <65) ? "Obrigatorio" : "Não é Obrigatorio";

        echo  "Quem nasceu em $ano tem $idade anos e seu voto é $tipo";

    ?>
</body>
</html>