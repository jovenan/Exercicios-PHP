<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"texto Generico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>

    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>

    <?php 
    /*
        $valor = isset($_GET["v"])?$_GET["v"]:"[Não informado]";
        echo "O valor enviado foi $valor";
        $rq = sqrt($valor);
        echo"<br> A raiz do valor $valor é $rq";
    */
    /*
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Nome nao informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
        $idade = date("Y") - $ano;
        echo "<br>$nome é $sexo e tem $idade anos";
    */

        
        echo "<span class='texto'>$txt</span>"

    
    ?>
    <a href="forms.php">voltar</a>


</body>
</html>