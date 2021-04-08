<?php

require_once "vendor/autoload.php";

use \natyb_000\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('01001000');

print_r($resultado);