<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento PHP</title>
</head>
<body>
    <?php
         $servername = 'localhost';
         $username = 'root';
         $password = "";
         if(filter_input(INPUT_SERVER,'REQUEST_METHOD') == 'POST')
         {
            $nome  = filter_input(INPUT_POST,'nome1');
            $idade = filter_input(INPUT_POST,'idade1');
            echo $nome.'<br>'.$idade."<hr>";

         }
          $conn2 = new mysqli($servername,$username,$password, "db_test");
          $inserir = "INSERT INTO usuario (nome,idade) VALUES ('$nome','$idade');";
          if ($conn2->query($inserir) === TRUE) {
            echo "Dados inseridos com sucesso!<br>";
          } else{
            echo 'Erro ao inserir dados: '. $conn2->error.'<br>';
          }
    ?>
</body>
</html>