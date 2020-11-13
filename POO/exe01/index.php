<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 programa</title>
</head>
<body>
    <?php
        require_once 'caneta.php';

        $c1 = new Caneta;
        $c1 ->cor = "azul";
        $c1 ->ponta = 0.5;
        $c1 ->tampada = true;
        $c1 ->destampar();
        $c1 ->rabiscar();
        $c1 ->tampar();
        var_dump($c1);

        $c2 = new Caneta;
        $c1 ->cor = "verde";
        $c1 ->ponta = 0.7;
        $c1 ->tampada = false;
        $c1 ->tampar();
        $c1 ->rabiscar();
        var_dump($c1);
    ?>
</body>
</html>