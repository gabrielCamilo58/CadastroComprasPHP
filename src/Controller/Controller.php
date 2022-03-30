<?php
namespace CadastroCompras\Controller;

use CadastroCompras\Models\Model;

class Controller
{
    public function __construct(Model $model) {
        $this->model = $model;
        $this->configmodel();
    }

    protected function render(string $view = null, array $data = [])
    {
        if(!$view){
            $view = $this->controllerNome() . '/' . debug_backtrace()[1]['function'];
            //debug_backtrace retorna um array com informações de tudo que foi executado até o momento, no caso a ultima classe e a function dessa classe, o ultimo item se encontra no indece 1
        }
        extract($data);
        require __DIR__ . '/../../view/' . $view . '.php';
    }

    private function controllerNome()
    {
        $class = get_class($this); // src\Controller\ProdutoController
        $class = explode('\\', $class); // [src], [Controller], [ProdutoController]
        $class = array_pop($class); // ProdutoController
        $class = preg_replace('/Controller$/', '', $class); // Produto
        return strtolower($class); // produto

    }
    private function configModel()
    {
        if (!$this->model->getTableName()) {
            $this->model->setTableName($this->controllerNome());
        }
    }
}