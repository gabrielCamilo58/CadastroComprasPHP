<?php

require __DIR__ . '/vendor/autoload.php';

use CadastroCompras\Models\Model;
use CadastroCompras\Drivers\MysqlPdo;

$pdo = new PDO('mysql:host=localhost;dbname=testecompras', 'root', '12345');

$driver = new MysqlPdo($pdo);


$model = new Model;
$model->setDriver($driver);


//$model->name = 'gabk';
$model->age = 32;
$model->email = 'e@e.com';
$model->save();

//var_dump($model->findAll(['age', '32']));
//var_dump($model->findFirst(2));