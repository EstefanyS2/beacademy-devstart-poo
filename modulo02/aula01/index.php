<?php

ini_set('display_errors', 1);

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor();
$p1->nome = 'Alessandro';
$p1->cpf = '08912309801';
$p1->salario = 1000;

var_dump($p1);