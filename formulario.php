<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<pre>
    <form action="formulario.php" method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]+\s?[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]*$"/>

        <label>Digite seu telefone:</label>
        <input type="text" name="telefone" required pattern="(\d{2}\d{5}-\d{4})"/>

        <label>Digite seu email:</label>
        <input type="text" name="email" required pattern=^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$qpp-hheu-szo/>

        <input type="submit" value="Enviar para o servidor">
    </form>
    </pre>

    <hr>
    <?php
        $nome = '';

        if(isset($_POST['nome'])){//isset é uma função do PHP que verifica se há valor em uma variável
            //estamos atribuindo o valor do campo "nome" digitado no formulário
            //à nossa variável chamada $nome
            $nome = $_POST['nome']; 


            //Estamos imprimindo a mensagem de boas vindas. 
            //Concatenamos uma string constante com a variável "$nome"
            echo '<p>Olá, '. $nome .'! Seja bem-vindo(a)</p>';
        }
    ?>
</body>
</html>