<?php
    include "processamento.php";
    $servername = 'localhost';
    $username = 'root';
    $password = "";

    /*$conn = new mysqli($servername,$username,$password);

    if ($conn->connect_error) {
        echo 'Base de dados não encontrada';
    } else {
        echo 'Conexão criada com sucesso! <br>';
    }

    $createDb = 'CREATE DATABASE IF NOT EXISTS db_test';

    if ($conn->query($createDb) == true) {
        echo "Banco de dados 'db_teste' criado com sucesso!<br>";
    } else {
        echo "Erro ao criar o banco de dados: " . $conn->error."<br>";
    }

    $conn->close();*/

    
    $conn2 = new mysqli($servername,$username,$password, "db_test");

    /*if ($conn2->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn2->connect_error).'<br>';
    }else{
        echo 'Conexao com o banco e instancia criada  com sucesso!<br>';
    }*/

    $sql1 = "CREATE TABLE IF NOT EXISTS usuario (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        idade int
    )";

    // Executando o comando SQL
    /*if ($conn2->query($sql1) === TRUE) {
        echo "Tabela 'usuario' criada com sucesso!";
    } else {
        echo "Erro ao criar a tabela: " . $conn2->error;
    }*/

    $insert = "INSERT INTO `usuario` (nome,idade) VALUES ($nome,$idade)";

    /*if($conn2->query($insert) == TRUE){
        echo 'Dados inseridos com sucesso!<br>';
    }else{
        echo 'Erro ao inserir dados: '. $conn->error.'<br>';
    }*/

    // Se a conexão foi estabelecida com sucesso, você pode executar consultas e operações no banco de dados aqui
    // Exemplo de consulta
    /*$sql = "SELECT * FROM cidade";
    $result = $conn2->query($sql);

    if ($result->num_rows > 0) {
        // Exibindo os dados retornados pela consulta
        while ($row = $result->fetch_assoc()) {
            echo  $row["id"].'<br>' 
                    .$row["nome"].'<br>'  
                    . $row["tamanho"].'<br>'  
                    . $row['estado'].'<br>' 
                    . $row['populacao'].'<br>'
                    ."<hr>"
                    ."<br>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }
    
    // Fechando a conexão
    $conn2->close();*/
?>