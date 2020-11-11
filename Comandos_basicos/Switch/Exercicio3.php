<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
</head>
<body>
    <?php
        $op = $_GET["ES"];

        switch ($op) {
            case 1:
            case 4:
            case 21:
            case 22:
            case 13:
            case 3:
            case 26:
                echo "Regiao Norte";
                break;
            case 9:
            case 17:
            case 6:
            case 19:
            case 14:
            case 16:
            case 2:
            case 25:
            case 5:
                echo "Regiao Nordeste";
                break;
            case 10:
            case 11:
            case 8:
            case 27:
                echo "Regiao Centro-Oeste";
                break;
            case 12:
            case 7:
            case 18:
            case 24:
                echo "Regiao Sudeste";
                break;
            case 15:
            case 23:
            case 20:
                echo "Regiao Sul";
                break;
        }
    ?>
</body>
</html>