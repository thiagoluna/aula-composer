<?php

use AulaComposer\Graficos\Donnut;
use AulaComposer\Soma;

require 'vendor/autoload.php';

if(file_exists('.env')){
    $dotenv = Dotenv\Dotenv::create(__DIR__);
    $dotenv->load();
}

$soma = new Soma();
$grafico = new Donnut();

//print_r($_ENV);
