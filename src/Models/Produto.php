<?php

namespace CadastroCompras\Models;

use CadastroCompras\Drivers\MysqlPdo;
use PDO;

class Produto extends Model
{
    protected $table = 'produtos';
    
    public function __construct()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=testecompras', 'root', '12345');
        $driver = new MysqlPdo($pdo);
        $this->setDriver($driver);
    }
    public function getMostViewed()
    {
        $this->getPdo();
    }
}
    
