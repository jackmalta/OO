<?php
  class Curso
  {
    public $nome;
    public $sala;
  }

  $curso = new Curso();
  $curso -> nome = "Algoritmos em Java";
  $curso -> sala = "B05";

  echo "O seu curso é: $curso->nome " . PHP_EOL;
  echo "A sua sala é: $curso->sala " . PHP_EOL;

?>
