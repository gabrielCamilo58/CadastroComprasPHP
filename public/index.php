<?php

use CadastroCompras\Controller\ProdutoController;

require __DIR__ . '/../vendor/autoload.php';


$rotas = require __DIR__ . '/../routes/web.php';
$resolver = require __DIR__ . '/../resolver.php';

$caminho = $_SERVER['PATH_INFO'];

if(!array_key_exists($caminho, $rotas)){
    echo "erro 404";
    exit();
}

$controler = $rotas[$caminho]['controller'];
$metodo = $rotas[$caminho]['metodo'];
$resolver->handler($controler, $metodo);


//$controler->$metodo();

