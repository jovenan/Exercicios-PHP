<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 programa</title>
</head>
<body>
    <?php
        require_once "banco.php";

        $p1 = new ContaBanco(); //jubileu
        $p2 = new ContaBanco(); //Creuza

        $p1->abrirConta("CC");
        $p1->setdono("jubileu");
        $p1->setnumConta(1111);
        $p2->abrirConta("CP");
        $p2->setdono("Creuza");
        $p2->setnumConta(2222);

        $p1->depositar(300);
        $p2->depositar(500);

        $p1->pagarMensal();
        $p2->pagarMensal();

        $p1->sacar(200);
        $p2->sacar(400);

        print_r($p1);
        echo "<br>";
        print_r($p2);

        $p1->sacar(138);

        $p1->fecharConta();


        $p3 = new ContaBanco();

        $p3->setdono("Beatriz");
        $p3->abrirConta("CC");
        $p3->setnumConta("2252");

        $p3->depositar(10000);
        $p3->sacar(8200);
        $p3->pagarMensal();
        
        print_r($p3);

        $p3->fecharConta();

    ?>
</body>
</html>