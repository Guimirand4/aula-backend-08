<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .resultado {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            color: #333;
        }
    </style>

<?php

$palavraUmInicial = '';
$palavraDoisInicial = '';
if(isset($_GET['palavraUm'])){
    $palavraUmInicial = $_GET['palavraUm'];
}
if(isset($_GET['palavraDois'])){
    $palavraDoisInicial = $_GET['palavraDois'];
}

?>


<form action="anagrama.php" method="get">
    <h1>Verificar Anagramas</h1>
    <label for="palavraUm">Insira a primeira palavra:</label>
    <input type="text" name="palavraUm" id="palavraUm" value="<?php echo $palavraUmInicial?>" required>

    <label for="palavraDois">Insira a segunda palavra:</label>
    <input type="text" name="palavraDois" id="palavraDois" value="<?php echo $palavraDoisInicial?>" required>

    <input type="submit" value="Comparar">
</form>

<div class="resultado">


<?php
if (isset($_GET['palavraUm']) && isset($_GET['palavraDois'])) {

    $palavraUm = $_GET['palavraUm'];
    $palavraDois = $_GET['palavraDois'];

    $palavraUmOriginal = $palavraUm;
    $palavraDoisOriginal = $palavraDois;


    $palavraUm = str_split($palavraUm);
    $palavraDois = str_split($palavraDois);

    sort($palavraUm);
    sort($palavraDois);

    $palavraUm = implode('', $palavraUm);
    $palavraDois = implode('', $palavraDois);


    if ($palavraUm == $palavraDois) {
        echo "$palavraUmOriginal e $palavraDoisOriginal são anagramas";
    } else {
        echo "$palavraUmOriginal e $palavraDoisOriginal não são anagramas";

    }
}

?>
</div>