<?php
  require 'conectar.php';

  $dados = "SELECT * FROM clientes";
  $exib = $con->query($dados);

  if (!$exib) die ("Erro mortal! $con->error");

 ?><!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Exibindo dados</title>
     <link rel="stylesheet" href="estilo.css" type="text/css">
   </head>
   <body>
     <h1>Lista de Clientes</h1>
     <?php
        if ($exib->num_rows > 0){
          while($linha = $exib->fetch_assoc()){
            echo "Código: $linha[codigo]<br>";
            echo "Nome: $linha[nome]<br>";
            echo "Email: $linha[email]<br>";
          }
        }
      ?>
      <a href="pagina.html">Voltar</a>
   </body>
 </html>
