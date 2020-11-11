<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <?php 
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $tipo = $_GET['op'];

        $resultado = ($tipo == "s") ? $n1 + $n2 : $n1 - $n2;
    
        echo "Voce digitou $n1 e $n2, o resultado é ".$resultado;
    ?>
</body>
</html>