<?php

namespace CadastroCompras\Models;
use CadastroCompras\Drivers\DriverStrategy;

class Model
{
    protected $driver;
    
    public function setDriver(DriverStrategy $driver)
    {
        $this->driver = $driver;
        $this->driver->setTable($this->table);
        return $this;
    }

    protected function getDriver()
    {
        return $this->driver;
    }

    public function save()
    {
        $this->getDriver()
            ->save($this)
            ->exec();
    }

    public function findAll(array $conditions = [])
    {
        return $this->getDriver()
            ->select($conditions)
            ->exec()
            ->all();
    }
    public function search(string $filtro, string $campo)
    {
        $query = "SELECT * FROM ".$this->getTableName()." WHERE ".$campo." LIKE '%".$filtro."%'";
        return $this->getDriver()
        ->exec($query)
        ->all();
    }
    public function orderBY(string $coluna, string $order)
    {
        $query = "SELECT * FROM ". $this->getTableName() ." ORDER BY ". $coluna ." ".$order;
        //$query = "SELECT * FROM ".$this->getTableName()." WHERE ".$campo." LIKE '%".$filtro."%'";
        return $this->getDriver()
        ->exec($query)
        ->all();
    }

    public function findFirst($id)
    {
        return $this->getDriver()
            ->select(['id' => $id])
            ->exec()
            ->first();
    }

    public function delete()
    {
        $this->getDriver()
            ->delete(['id' => $this->id])
            ->exec();
    }

    public function __get($variable)
    {
        if ($variable === 'table') {
            $table = get_class($this);
            $table = explode('\\', $table);
            return strtolower(array_pop($table));
        }
        return null;
    }
    public function all()
    {
        $sql = 'SELECT * FROM ' . $this->table;
        $result = $this->getPdo()->query($sql);
        return $result->fetchAll(MYSQLI_ASSOC);
    }

    public function get()
    {
        return [
            
        ];
    }

    public function getPdo()
    {
        return $this->pdo;
    }

    public function setTableName(string $table)
    {
        $this->table = $table;
    }

    public function getTableName()
    {
        return $this->table;
    }
}
