<?php

ini_set('display_errors', 1);

include 'Produto.php';

$p1 = new Produto();
$p1->setNome('tenis para corrida');
$p1->setValor(299);

$p2 = new Produto();
$p2->setNome('Saia Jeans');
$p2->setValor('100');



var_dump($p1);
var_dump($p2);
