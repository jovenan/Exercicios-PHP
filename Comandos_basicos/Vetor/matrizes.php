<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //criando uma "matriz"(vetores dentro de vetores)

        $n = array(array(2,3),array(3,4),array(9,5));
        print_r($n);

        //para pegar um valor de uma matriz

        $n[1][1] = 10;
        print_r($n);
    ?>
</body>
</html>