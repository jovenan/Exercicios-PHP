<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /*Formas de formar um vetor */

        $n[0] = 3;
        $n[1] = 6;
        $n[2] = 9;
        print_r($n);
        // Ou
        echo "<br>";
        $n = array(3,6,9);
        print_r($n);
        //para adicionar um valor ao final do vetor
        echo "<br>";
        $n[] = 7;
        print_r($n);
        //ou pode ser criado um array assim
        echo "<br>";
        $c = range(5,20,2);
        print_r($n);
        echo "<br>";
        //Para mostrar valores melhor

        foreach($n as $ni) {
            echo "$ni ";
        }

        //pode criar vetores tambem da seguinte forma colocando em indices personalizados
        echo "<br>";
        $v = array(0 =>5,1=>9,2=>8,3=>7);
        print_r($v);
        echo "<br>";
        //Criando vetores com nomes de colunas

        $v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
        print_r($v);
        echo "<br>";
        //foreach para essa estrutura

        foreach ($v as $campo => $valor) {
            echo "<br>O valor de $campo é $valor";
        }

        //para mostrar a quantidade de elementos
        echo "<br> esse vetor tem ".count($n);

        //para incluir um elemento dentro de vetor
        array_push($n,7);

        //para tirar o ultimo elemento de um vetor

        array_pop($n);

        //para incluir elemento no inicio do vetor
        
        array_unshift($n,7);

        //para tirar o primeiro valor do vetor

        array_shift($n);

        //ordenar vetor

        sort($n);

        //ordenar no inverso

        rsort($n);

        

    ?>
</body>
</html>