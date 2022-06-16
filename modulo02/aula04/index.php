<?php

ini_set('dispaly_errors', 1);

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$c1 = new Cliente('chiquim@email.com', 123456);
$c1->setNome('Chiquim');
$c1->setdataCadastro('01/012019');

$g1 = new Gestor('zezin@email.com', 1234564);
$g1->setNome('Zezim');
$g1->setSalario(6000);

var_dump($c1);
var_dump($g1);