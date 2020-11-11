<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <?php 
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A avriavel A vale $a";
        echo "<br>A variavel B vale $b";
        
        $ano_atual = $_GET["aa"];
        echo "O ano atual é $ano_atual<br>";
        echo "O ano anterior é ". --$ano_atual;
        echo "<br>O ano anterior é ". $ano_atual--;
        
    
    ?>
</body>
</html>