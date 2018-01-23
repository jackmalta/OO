<?php
  require 'Cliente.php';
  require 'conectar.php';

  $cliente = new Cliente();
  $cliente->nome = $_POST['nome'];
  $cliente->email = $_POST['email'];

 ?><!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Cadastrando Clientes</title>
     <link rel="stylesheet" href="estilo.css" type="text/css">
   </head>
   <body>
     <?php
     if (!empty($cliente->nome) && !empty($cliente->email)) {
       $cadastro = "INSERT INTO clientes (nome, email) VALUES (?, ?)";

       $comando = $con->prepare($cadastro);
       $comando->bind_param("ss", $cliente->nome, $cliente->email);
       $comando->execute();

       $sucess = $con->query($comando);

       if ($sucess === FALSE) die("Erro Mortal2! $con->erro");
     }else die("erro, algum campo ficou vazio.");

      ?>
      <h2>Cadastro Realizado com Sucesso!</h2>

      <a href="pagina.html">Voltar</a>
   </body>
 </html>
