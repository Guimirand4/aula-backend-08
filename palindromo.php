<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palíndromo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #4a90e2;
            text-align: center;
        }
        input[type="text"] {
            width: 93%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4a90e2;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #357ab7;
        }
        .resultado {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            background-color: #e7f3fe;
            border: 1px solid #b3d7ff;
            width: 300px;
        }
        .resultado.positivo {
            color: #2e7d32; /* Verde */
        }
        .resultado.negativo {
            color: #c62828; /* Vermelho */
        }
    </style>
</head>
<body>

<form action="palindromo.php" method="GET">
    <h1>Verificar Palíndromo</h1>
    <input type="text" name="palavra" placeholder="Digite uma palavra" required>
    <input type="submit" value="Verificar">
</form>

<?php
if(isset($_GET['palavra'])){
    $palavra = $_GET['palavra'];
    $palavraInvertida = strrev($palavra);
    
    echo '<div class="resultado';
    echo ($palavra == $palavraInvertida) ? ' positivo' : ' negativo';
    echo '">';
    
    if($palavra == $palavraInvertida){
        echo "<strong>$palavra</strong> é um palíndromo!";
    } else {
        echo "<strong>$palavra</strong> não é um palíndromo, ela invertida fica <strong>$palavraInvertida</strong>!";
    }
    echo '</div>';
}
?>

</body>
</html>