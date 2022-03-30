<?php

namespace CadastroCompras\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use CadastroCompras\Controller\Controller;
use CadastroCompras\Models\Cliente;

class ClienteController extends Controller
{
    protected $model;
    public function __construct(Cliente $model)
    {
        $this->model = $model;
    }
    
    public function index() 
    {
        $clientes = $this->model->findAll();
        $this->render('pages/cliente/index', ['clientes' => $clientes]);
    }
    public function create()
    {
        
        $this->render('pages/cliente/create');
    }
    public function store()
    {
        $this->model->nomeCliente = $_POST['name'];
        $this->model->cpf = $_POST['cpf'];
        $this->model->email = $_POST['email'];
        $this->model->save();
        
        $clientes = $this->model->findAll();
        $this->render('pages/cliente/index', ['clientes' => $clientes]);
    }
}