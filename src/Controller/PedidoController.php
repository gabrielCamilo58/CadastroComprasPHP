<?php

namespace CadastroCompras\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use CadastroCompras\Controller\Controller;
use CadastroCompras\Models\Produto;

class PedidoController extends Controller
{
    protected $model;
    public function __construct(Produto $model)
    {
        $this->model = $model;
    }
    
    public function index() 
    {
        $this->render('pages/Pedido/index', ['nome' => 'Gabriel']);
    }
    public function create()
    {
        
        $this->render('pages/produto/index', ['nome' => 'Gabriel']);
    }
    public function store()
    {

        $this->model->nomeProduto = $_POST['name'];
        $this->model->valorUnitario = $_POST['price'];
        $this->model->quatidade = $_POST['qtd'];
        $this->model->save();
        
        $produtos = $this->model->findAll();
        header('Location: /produtos');
    }
}