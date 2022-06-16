<?php

ini_set('display_errors', 1);
include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';


$cpf = '12345678901';
$docX = '12345678912345';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUs();
$us->validarDocumento($docX);


echo 'Funcionou';