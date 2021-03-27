<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 programa</title>
</head>
<body>
    <?php
        require_once 'caneta.php';

        $caneta = new Caneta("bic","azul","50%",False);
        
        $caneta->setponta(0.5);

        $caneta->destampar();

        $caneta->rabiscar();
        
        #print_r($caneta);
        echo '<br> A ponta é '.$caneta->getponta();
    ?>
</body>
</html>