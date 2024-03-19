<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form>
        <label for="num1">Primeiro número:</label><br>
        <input type="number" name="n1"><br>
        <br>
        <label for="num2">Segundo número:</label><br>
        <input type="number" name="n2"><br>
        <br>


        <input type="submit" name="somar" value="Adição">
        <input type="submit" name="sub" value="Subtração">
        <input type="submit" name="multi" value="Multiplicação">
        <input type="submit" name="div" value="Divisão">

    </form>
    <?php
    if (isset($_GET['somar'])) {
        $resultado = $_GET['n1'] + $_GET['n2'];
        echo "Resultado da adição: " . $resultado;
    }
    if (isset($_GET['sub'])) {
        $resultado = $_GET['n1'] - $_GET['n2'];
        echo "Resultado da subtração: " . $resultado;
    }
    if (isset($_GET['multi'])) {
        $resultado = $_GET['n1'] * $_GET['n2'];
        echo "Resultado da multiplicação: " . $resultado;
    }
    if (isset($_GET['div'])) {
        if ($_GET['n2'] != 0) {
            $resultado = $_GET['n1'] / $_GET['n2'];
            echo "Resultado da divisão: " . $resultado;
        } else {
            echo "Erro: Divisão por zero!";
        }
    }

    ?>
</body>

</html>