<?php
  require 'Cliente.php';
  require 'conectar.php';

  $cliente = new Cliente();
  $cliente->nome = $_POST['nome'];
  $cliente->email = $_POST['email'];
  if ($con->connect_error){
    die("Erro de conexão!".$con->connect_error);
  }
 ?><!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Cadastrando Clientes</title>
   </head>
   <body>
     <?php
     if (!empty($cliente->nome) && !empty($cliente->email)) {
       $cadastro = "INSERT INTO clientes (nome, email) VALUES ('$cliente->nome', '$cliente->email')";
       $sucess = $con->query($cadastro);

       if (!$sucess) die("Erro Mortal! $con->error");
     }else die("erro, algum campo ficou vazio.");
      ?>
      <h2>Cadastro Realizado com Sucesso!</h2>
   </body>
 </html>
