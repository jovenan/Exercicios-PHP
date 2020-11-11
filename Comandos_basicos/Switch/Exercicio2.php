<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias da semana</title>
</head>
<body>
    <?php
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch($d){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "levante e va estudar";
                break;
            case 7:
            case 8:
                echo "pode descansar";
                break;
            default:
                echo "dia invalido";
        }
    ?>
</body>
</html>