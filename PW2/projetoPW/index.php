
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Formulario</title>
</head>
<body>
    <div id="container">
        <form action="processamento.php" method="post" id="form1">
            <h1>Formulario</h1>
            <div class="campo">
                <input type="text" name="nome1" id="nome1" placeholder="Insira seu nome">
            </div>
            <div class="campo">
                <input type="number" name="idade1" id="idade1" placeholder="Insira sua idade">
            </div>
            <div class="campo">
                <input type="submit" value="Cadastrar" id="botao">
            </div>
        </form>
        <form action="index.php" method="post">
            <input type="text" name="idPessoa" id="idPessoa" placeholder="Informe o id da pessoa">
            <input type="submit" value="Consultar">
        </form>
    </div>   
</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";

    if (filter_input(INPUT_SERVER,'REQUEST_METHOD') == 'POST') {
        $id = filter_input(INPUT_POST,'idPessoa');
        $conn = new mysqli($servername,$username,$password, 'db_test'); 
        $sql = "SELECT * FROM `usuario` WHERE id = $id";
        $result = $conn->query($sql);
        if ($id != null) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo  '<div id="resp">ID: '.$row["id"].'<br>'.
                          'Nome: '.$row["nome"].'<br>'.
                          'Idade: '. $row["idade"].'<br>'  
                            ."<hr>"
                            ."<br><div/>";
                }
            } else {
                echo "Nenhum resultado encontrado.";
            }
        } else {
            echo "Informe um id para buscar alguem cadastrado";
        }
        $conn->close();
    } else {
        echo '';
    }
?>