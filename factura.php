<?php

require_once('TCPDF-main/TCPDF-main/tcpdf.php');


//Crear obj TCPDF
$pdf = new TCPDF('p', 'mm', 'A4');

//Pagina
$pdf -> AddPage();

//Contenido

//HTML
$pdf ->Rect(0, 0, 2000, 20,'F',array(),array(46, 61, 89));
$pdf -> Image("Resources/imgs/ALFAGADA.png", 10, 5, 50, 10);
//Output
$pdf -> Output();
