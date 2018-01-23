<!DOCTYPE html>
<?php
  require 'Cliente.php';
  $clientes = new Cliente();
  $clientes->nome = $_POST['nome'];
  $clientes->email = $_POST['email'];

  $conn = new mysqli("localhost", "root", "senha", "meudb");

  if ($conn->connect_error){
    die("Erro de conexão" . $conn->connect_error);
  }
    echo "Conexão Efetuada com sucesso";

    if (!is_null($clientes->nome )) {
    $sql = "INSERT INTO Clientes (nome, email) VALUES ('$clientes->nome', '$clientes->email')";
//CREATE TABLE Clientes(codigo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(40) NOT NULL, email VARCHAR(40) NOT NULL)
    if ($conn->query($sql) === TRUE) {
      echo "Dados Cadastrados com sucesso";
    } else {
      echo "Erro!!!!";
    }
  }

    $dat = "SELECT codigo, nome, email FROM Clientes";
    $exib = $conn->query($dat);



 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exibindo dados</title>
  </head>
  <body>

    <h1>Clientes</h1>
    <?php
    if ($exib->num_rows > 0)
    {
      while($row = $exib->fetch_assoc()){
        echo "<p><h3>Código: ".$row["codigo"]."</h3>";
        echo "<h3>Nome: ".$row["nome"]."</h3>";
        echo "<h3>Email: ".$row["email"]."</h3><br></p>";
      }
    }
    ?>
  </body>
</html>
