<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]: 0;
        echo "<h1>Exibir tabuada do $n</h1>";
        $cont = 1;

        do {
            echo "<h3>$cont x $n = ". ($cont * $n);
            $cont ++;
        }   while ($cont <= 10);
    ?>
</body>
</html>