<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 programa</title>
</head>
<body>
    <?php
        require_once 'caneta.php';

        $c3 = new Caneta;
        $c3 ->cor = "Vermelho";
        #$c3 ->ponta = 0.5;
        var_dump($c3);
        $c3->rabiscar();
        
    ?>
</body>
</html>