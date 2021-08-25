<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/



require_once("dompdf/autoload.inc.php");


use Dompdf\Dompdf;
use Dompdf\Options;


$data = "Hello world PDF";
$options = new Options();
$options->isPhpEnabled(true);
$options->isHtml5ParserEnabled(true);
$options->setIsRemoteEnabled(true);
$options->isFontSubsettingEnabled(true);
$dompdf = new Dompdf($options);

$dompdf->loadHtml($data);
$dompdf->render();
$dompdf->stream("BimContrato.pdf");