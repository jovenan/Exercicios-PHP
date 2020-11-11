<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <?php
        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:"Valor nao informado";
        $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:"Valor nao informado";
        $media = ($nota1 + $nota2) / 2;

        echo "As notas enviadas foram: nota $nota1 e nota $nota2, obtendo uma media de $media.";

        if ($media < 5){
            $situacao = "Reprovado";
        } elseif ($media > 4 && $media < 8) {
            $situacao = "Recuperação";
        } else {
            $situacao = "Aprovado";
        }
        echo "<br>O aluno esta $situacao";
    ?>
</body>
</html>