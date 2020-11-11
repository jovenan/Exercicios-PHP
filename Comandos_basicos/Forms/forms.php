<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="get" action="01valor.php">
        Valor <input type="number" name="v">
        <input type="submit" value="Calcular Raiz">
    </form>

    <br>

    <form method="get" action="01valor.php">
        Nome: <input type="text" name="nome"><br>
        Ano de Nascimento: <input type="number" name="ano"><br>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="Masculino">
            <label for="masc">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" value="Feminino">
            <label for="fem">Feminino</label>
        </fieldset><br>
        <input type="submit" value="Enviar">
    </form>

    <br>
    
    <form method="get" action="01valor.php">
        <label for="itxt">Texto: </label>
        <input type="text" name="t" id="itxt"><br>
        <label for="itam">Tamanho</label>
        <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt" selected>14</option>
            <option value="20pt">20</option>
            <option value="40pt">40</option>
        </select> <br>
        <label for="icor">Cor: </label>
        <input type="color" name="cor" id="icor"> <br>
        <input type="submit" value="Gerar">
    </form>


</body>
</html>