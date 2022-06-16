<?php

ini_set('dispaly_errors', 1);

include 'Usuario.php';
include 'Cliente.php';
include 'ClienteVip.php';
include 'Gestor.php';
include 'Gestorgeral.php';

$c1 = new Cliente('chiquim@email.com', 123456); //contrutor do Usuario
$c1->setNome('Chiquim');
$c1->setdataCadastro('01/012019');

$g1 = new Gestor('zezin@email.com', '1234564', 6000); //contrutor do Gestor
$g1->setNome('Zezim');
$g1->setSalario(6000);

$gg1 = new GestorGeral('maria@email.com', '1q2w3e', 9000);

$cv = new ClienteVip('clientevip@email.com', '123123');

//$uss = new Usuario('hacker@email.com', '1111111');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
var_dump($cv);