<?php
namespace CadastroCompras\Drivers;
use CadastroCompras\Models\Model;

interface DriverStrategy
{
    public function save(Model $data);
    public function select(array $data = []);
    public function delete(array $conditions);
    public function exec(string $query = null);
    public function first();
    public function all ();
}