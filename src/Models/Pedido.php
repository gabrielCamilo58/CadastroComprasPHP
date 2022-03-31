<?php

namespace CadastroCompras\Models;

use CadastroCompras\Drivers\MysqlPdo;
use PDO;

class Pedido extends Model
{
    protected $table = 'pedidos';
    
    public function __construct()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=testecompras', 'root', '12345');
        $driver = new MysqlPdo($pdo);
        $this->setDriver($driver);
    }

   
}
    
