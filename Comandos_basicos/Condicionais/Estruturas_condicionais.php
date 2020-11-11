<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFs e Elses</title>
</head>
<body>
    <?php 
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e tera $i anos";

        if($i < 16) {
            $tipoVoto = "não pode votar";
        } 
        elseif ( ($i >= 16 && $i < 18) || ($i > 65) ) {
            $tipoVoto = "tem voto opcional";
        }
        else {
            $tipoVoto = "tem voto obrigatorio";
        }
        

        echo "<br> Com essa idade voce $tipoVoto";
    ?>
</body>
</html>