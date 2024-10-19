<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula-backend</title>
</head>
<body>
    <h1>Introdução a programação backend</h1>
    <br/>

    <?php
        echo 'Olá, Guilherme';
        echo '<br/>';

        //Cria uma variável chamada ano_nascimento
        $ano_nascimento = 2004;    

        //Cria uma variável  chamada ano_atual, que armazena o ano em que estamos
        $ano_atual = 2024;

        //Criamos uma variável para armazenar a idade da pessoa, 
        //Realizamos um cálculo de subtração entre o ano atual e o ano de nascimento
        $idade = $ano_atual - $ano_nascimento;

        //Exibimos a idade da pessoa.
        //No PHP, o caracter ponto "." concatena (junta) strings.
        echo 'Você possui '. $idade . ' anos.';
    ?> 
    <br/>
    <a href="formulario.php">Ir para o formulário</a>
</body>
</html>