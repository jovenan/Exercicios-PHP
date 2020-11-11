<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquanto</title>
</head>
<body>
    <?php 

        $cont = 0;
        while($cont < 10) {
            $cont ++;
            echo $cont. " > ";
        }

        echo "<br>";

        $cont = 10;
        do {
            echo $cont. " > ";
            $cont --;
        } while ($cont > 0);

        

    ?>
</body>
</html>