<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    
        <form method="POST" action>
            <input type="number" name="num1" placeholder="Número 2">
            <select name="operacao">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="num2" placeholder="Número 2" required>
            <input type="submit" value="Calcular">
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacao = $_POST["operacao"];
        $resultado = 0;

        switch($operacao){
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;    
            default:
                echo "Operação inválida";
                return $operacao;
        }
        echo "<p>$resultado</p>";
    }
    ?>

</body>
</html>