<?php
  $ser = "localhost";
  $user = "root";
  $pass = "senha";
  $db = "verao";

  $con = new mysqli($ser, $user, $pass, $db);
  if ($conn->connect_error){
    die("Erro de conexão" . $conn->connect_error);
  }
?>
