<?php

require 'escola.php';

//Primeira Turma
$TurmaA = new Turma();
$TurmaA -> periodo = "Matutino";
$TurmaA -> serie = "8 Série";
$TurmaA -> sigla = "A";
$TurmaA -> tipoDeEnsino = "Integral";



//Segunda Turma
$TurmaB = new Turma();
$TurmaB -> serie = "4 Série";
$TurmaB -> sigla = "B";
$TurmaB -> tipoDeEnsino = "Integral";
$TurmaB -> periodo = "Noturno";


echo "Dadoa das Turmas:
      TurmaA - Periodo: $TurmaA->periodo \tSérie: $TurmaA->serie $TurmaB->sigla \tEnsino: $TurmaA->tipoDeEnsino \n".PHP_EOL;

echo "Dadoa das Turmas:
      TurmaB - Periodo: $TurmaB->periodo \tSérie: $TurmaB->serie $TurmaB->sigla \tEnsino: $TurmaB->tipoDeEnsino \n".PHP_EOL;

 ?>
