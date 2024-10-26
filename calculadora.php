<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .calculator-container {
            width: 350px;
            padding: 25px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 15px;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
            display: block;
            text-align: left;
            margin: 10px 0 5px;
        }

        input[type="number"], select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            font-size: 16px;
            color: #333;
            background-color: #e9f7ef;
            border-radius: 8px;
            border: 1px solid #4CAF50;
            text-align: left;
        }

        .result-title {
            font-weight: bold;
            color: #2e7d32;
            margin-bottom: 10px;
        }

        .operation-result {
            margin-bottom: 8px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="calculator-container">
    <form action="calculadora.php" method="GET">
        <h2>Calculadora PHP</h2>
        <label for="valorUm">Valor 1:</label>
        <input type="number" name="valorUm" id="valorUm" value="<?php echo isset($_GET['valorUm']) ? $_GET['valorUm'] : ''; ?>" required>
        
        <label for="valorDois">Valor 2:</label>
        <input type="number" name="valorDois" id="valorDois" value="<?php echo isset($_GET['valorDois']) ? $_GET['valorDois'] : ''; ?>" required>
        
        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao" required>
            <option value="todasOperacoes" <?php echo isset($_GET['operacao']) && $_GET['operacao'] == 'todasOperacoes' ? 'selected' : ''; ?>>Todas operações</option>
            <option value="somar" <?php echo isset($_GET['operacao']) && $_GET['operacao'] == 'somar' ? 'selected' : ''; ?>>Somar</option>
            <option value="subtrair" <?php echo isset($_GET['operacao']) && $_GET['operacao'] == 'subtrair' ? 'selected' : ''; ?>>Subtrair</option>
            <option value="multiplicar" <?php echo isset($_GET['operacao']) && $_GET['operacao'] == 'multiplicar' ? 'selected' : ''; ?>>Multiplicar</option>
            <option value="dividir" <?php echo isset($_GET['operacao']) && $_GET['operacao'] == 'dividir' ? 'selected' : ''; ?>>Dividir</option>
        </select>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_GET['valorUm']) && isset($_GET['valorDois']) && isset($_GET['operacao'])) {
        $valorUm = $_GET['valorUm'];
        $valorDois = $_GET['valorDois'];
        $operacao = $_GET['operacao'];

        $resultado = '';

        if ($operacao == 'todasOperacoes') {
            $soma = $valorUm + $valorDois;
            $subtracao = $valorUm - $valorDois;
            $multiplicacao = $valorUm * $valorDois;

            if ($valorDois == 0) {
                $divisao = 'Não é possível dividir por zero';
            } else {
                $divisao = $valorUm / $valorDois;
            }

            $resultado = "<div class='operation-result'>Soma: $soma</div>
                          <div class='operation-result'>Subtração: $subtracao</div>
                          <div class='operation-result'>Multiplicação: $multiplicacao</div>
                          <div class='operation-result'>Divisão: $divisao</div>";
        } elseif ($operacao == 'somar') {
            $resultado = $valorUm + $valorDois;
        } elseif ($operacao == 'subtrair') {
            $resultado = $valorUm - $valorDois;
        } elseif ($operacao == 'multiplicar') {
            $resultado = $valorUm * $valorDois;
        } elseif ($operacao == 'dividir') {
            if ($valorDois == 0) {
                $resultado = 'Não é possível dividir por zero';
            } else {
                $resultado = $valorUm / $valorDois;
            }
        }

        echo "<div class='result'>";
        echo "<div class='result-title'>Resultado</div>";
        echo "Resultado: " .$resultado;
        echo "</div>";
    }
    ?>
</div>

</body>
</html>



