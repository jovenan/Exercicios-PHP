<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <?php 
        /*Exercicio usando ponteiros que referenciam outras variaveis */
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br>A variavel B vale $b";

        $a = 3;
        $b = &$a;
        $b += 5;
        echo "<br>A avriavel A vale $a";
        echo "<br>A variavel B vale $b";

    ?>
</body>
</html>