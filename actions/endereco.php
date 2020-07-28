<?php

require '../vendor/autoload.php';
use Jarouche\ViaCEP\HelperViaCep;

$cep = $_POST['cep'];

$resultado = HelperViaCep::getBuscaViaCEP('Json', $cep);

exit(json_encode($resultado['result']));