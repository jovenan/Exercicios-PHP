<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>
        <?php 
        
            $preco = $_GET['preco'];

            echo "Preco do produto é $preco";
            $preco += ($preco*10/100);

            echo "<br>O preco com 10% de aumento sera R$". number_format($preco,"2",",",".");

            $preco -= ($preco*10/100);
            echo "<br>O preco com 10% de desconto sera R$". number_format($preco,"2",",",".");
        
        
        ?>
    </h1>
</body>
</html>