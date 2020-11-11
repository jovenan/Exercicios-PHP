<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimentos 2</title>
</head>
<body>
    <?php

        /*O "&" aponta para o valor da variavel 
        passada, ou seja referencia para mudar o valor da variavel passada*/
        function teste (&$x) {
            $x += 2;
            echo "O valor de X é $x";
        }

        $a = 3;
        teste($a);
        echo "<br>O valor de A é $a"
    ?>
</body>
</html>