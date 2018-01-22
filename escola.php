<?php
  class Aluno
  {
    public $nome;
    public $rg;
    public $dataNascimento;
  }


//Primeiro Aluno
  $Aluno1 = new Aluno();
  $Aluno1 -> nome = "Andy Bernard";
  $Aluno1 -> rg = "428798541";
  $Aluno1 -> dataNascimento = "18/8/1978";


//Segundo Aluno
  $Aluno2 = new Aluno();
  $Aluno2 -> nome = "Michael Scott";
  $Aluno2 -> rg = "258795413";
  $Aluno2 -> dataNascimento = "13/06/1969";


  echo "Os dados do Primeiro aluno são: \n
    Nome: $Aluno1->nome \tRG: $Aluno1->rg \tData de Nascimento: $Aluno1->dataNascimento \n".PHP_EOL;
  echo "Os dados do Segundo aluno são: \n
    Nome: $Aluno2->nome \tRG: $Aluno2->rg \tData de Nascimento: $Aluno2->dataNascimento \n".PHP_EOL;


 ?>
