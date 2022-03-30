<?php

namespace CadastroCompras\Models;

use CadastroCompras\Drivers\MysqlPdo;
use PDO;

class Cliente extends Model
{
    protected $table = 'clientes';
    
    public function __construct()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=testecompras', 'root', '12345');
        $driver = new MysqlPdo($pdo);
        $this->setDriver($driver);
    }
}
    
