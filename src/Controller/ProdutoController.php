<?php

namespace CadastroCompras\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use CadastroCompras\Controller\Controller;
use CadastroCompras\Models\Produto;

class ProdutoController extends Controller
{
    protected $model;
    public function __construct(Produto $model)
    {
        $this->model = $model;
    }
    
    public function index() 
    {
        $produtos = $this->model->findAll();
        $this->render('pages/produto/index', ['produtos' => $produtos]);
    }
    public function create()
    {
        
        require __DIR__ . '/../../view/pages/produto/create.php';
    }
    public function store()
    {

        $this->model->nomeProduto = $_POST['name'];
        $this->model->valorUnitario = $_POST['price'];
        $this->model->quatidade = $_POST['qtd'];
        $this->model->save();
        
        $produtos = $this->model->findAll();
        $this->render('pages/produto/index', ['produtos' => $produtos]);
    }
}