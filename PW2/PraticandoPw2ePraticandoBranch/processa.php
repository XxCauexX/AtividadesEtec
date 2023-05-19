<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == "POST") {
            $nome = filter_input(INPUT_POST, 'nome');
            $sobrenome = filter_input(INPUT_POST, 'sobrenome');
            $idade = filter_input(INPUT_POST,'idade');
            $email = filter_input(INPUT_POST, 'email');
            $telefone = filter_input(INPUT_POST, 'telefone');
            $rua = filter_input(INPUT_POST, 'rua');
            $numero = filter_input(INPUT_POST, 'residencia');
            $bairro = filter_input(INPUT_POST, 'bairro');
            $cidade = filter_input(INPUT_POST, 'cidade');
            $sexo = filter_input(INPUT_POST, 'sexo');
            $notifica = filter_input(INPUT_POST, 'notifica');

            echo "<div>Nome: {$nome} {$sobrenome}<br>Idade: {$idade}<br>Email: {$email}<br>Telefone: {$telefone}<br>Rua: {$rua}<br>Número de Residencia: {$numero}<br>Bairro: {$bairro}<br>Cidade: {$cidade}<br>Sexo: {$sexo}<br>Notifica: {$notifica} </div>";
        } else {
            echo "Erro 404";
        }
    ?>
</body>
</html>