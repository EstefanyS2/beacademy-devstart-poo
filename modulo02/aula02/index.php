<?php

ini_set('display_errors', 1);

include 'Produto.php';

$p1 = new Produto();
$p1->nome = 'Tenis para corrida';
$p1->valor = 299;

$p2 = new Produto();
$p2->nome = 'Calça Jeans';
$p2->valor = -100;

var_dump($p1);
var_dump($p2);