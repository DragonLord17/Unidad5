<?php
require_once('lib/nusoap.php');
require_once('calculadora.php');

$server = new nusoap_server();
$server->register('calculadora');

$server->service(file_get_contents("php://input"));
//$server->service(file_get_contents("http://localhost/Calculadora/calculadora.php"));

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
//$server->service(file_get_contents("php://http://localhost/Calculadora/servicio.php"));
//$server->service(file_get_contents("php://input"));
?>