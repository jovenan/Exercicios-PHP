<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trim</title>
</head>
<body>
    <?php
        //tira os espacos do inicio e do fim da variavel
        $nome = "   jose da silva   ";
        $novo = trim($nome);
        echo $novo

        //Para remover so da esquerda uso "ltrim" e os espacos da direita "rtrim"
    ?>
</body>
</html>