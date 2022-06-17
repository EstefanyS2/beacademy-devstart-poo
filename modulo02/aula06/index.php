<?php

ini_set('display_errors', 1);

include 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '';

for ($n =  0; $n < 10; $n++) {
    $html .= 'ó o pente! <br>';
}
$dompdf->loadHtml('<h1>Ola mundo, estou aprendendo Php</h1>'.$html);

$dompdf->render(); //renderiza 

$dompdf->stream(); //faz com que gere o pdf
