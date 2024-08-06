<?php 

include 'src/config/config.php';
require 'vendor/autoload.php';
use src\source\Helpers;
use src\Controller\siteController;


// echo teste();

$caminho = __DIR__ . '/banco.sqlite';

$pdo = new PDO("sqlite:" . "$caminho");

$strings = 'fome';
include 'rotas.php';

Helpers::formatador(50000);



// $msg = new Mensagem();

// var_dump($msg->exibirMensagem("teste"));



