<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceitos basicos</title>
    <style>
        h2 {
            color: red;
        }
    </style>
</head>
<body>

    <?php

        $n = 4;
        $no = "Jonatas";
        echo $no;      
        echo " $no tem $n anos!";  


        $n1 = 3;
        $n2 = 2;
        $s = $n1 + $n2;
        $media = ($n1 + $n2) / 2;
        echo "<br>A soma de $n1 + $n2 é $s";
        echo "<br>A subtracao vale ". ($n1-$n2);
        echo "<br>A multiplicação vale ". ($n1*$n2);
        echo "<br>A divisão vale ". ($n1/$n2);
        echo "<br>A media é $media";

        /*Para pegar parametros da URL -- ?a=2&b=-3 -- */
        $num1 = $_GET["a"];
        $num2 = $_GET["b"];
        echo "<h1>Recebi valores $num1 e $num2 </h1>";

        /*Valor absoluto */
        echo "<h2>O valor absoluto de $num2 = ". abs($num2). "</h2>";

        /*Valor da potencia */
        echo "O valor de $num1<sup>$num2</sup> é ". pow($num1,$num2);
    
        /*Valor da raiz quadrada */
        echo "<br>A raiz de $num2 é ". sqrt($num2);

        /*Valor arredondado */
        echo "<br>O valor arredondado de $num1 é ". round($num1);

        /*Parte inteira do numero */
        echo "<br>O valor da parte inteira de $num1 é ". intval($num1);

        /*Formatando numeros*/
        echo "<br>O valor de $num1 em moeda é R$". number_format($num1,2,",",".");



        /* **** Atribuições **** */

        $a = 1;
        $b = 3;

        $c = $a + $b;

        $c = $c + 5;
        $c += 5;

        $b += $a;

        $a += 1;
        $a ++;

        $a = $a . $b;


        /* Variaveis de variaveis */

        $x = "abc";
        $$x = "def";

        // Basicamente o valor da variavel x recebe o valor atribuido

        echo "<h3>O conteudo de x é $x</h3>";
        echo "<h3>O conteudo de abc é $abc</h3>"


    ?>

    <h1>Testando PHP</h1>
</body>
</html>