<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wordwrap</title>
</head>
<body>
    <?php

        $t = "Aqui temos um texto grande para testar algo que o wordwrap faz, que ele quebra linha quebra linhas";
        $r = wordwrap($t);
        echo $r;
    ?>
</body>
</html>