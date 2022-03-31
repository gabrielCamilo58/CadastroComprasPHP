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
        return $this->render('pages/cliente/index', ['clientes' => $clientes]);
    }
    public function create()
    {
        
        return $this->render('pages/cliente/create');
    }
    public function store()
    {
        $this->model->nomeCliente = $_POST['name'];
        $this->model->cpf = $_POST['cpf'];
        $this->model->email = $_POST['email'];
        $this->model->save();
        
        $clientes = $this->model->findAll();
        return $this->render('pages/cliente/index', ['clientes' => $clientes]);
    }
    public function search()
    {
        $filtro = $_POST['filtro'];
        $clientes = $this->model->search($filtro, "nomeCliente");
        return $this->render('pages/cliente/index', ['clientes' => $clientes]);
    }
    public function destroy()
    {
        $this->model->id = (intval($_POST['cliente_id']));
        $this->model->delete();

        $clientes = $this->model->findAll();
        return $this->render('pages/cliente/index', ['clientes' => $clientes]);
    }
    public function edit()
    {
        $idCliente = intval($_POST['cliente_id']);
        return $this->render('pages/cliente/edit', ['idCliente' => $idCliente]);
    }
    public function update()
    {
        $this->model->id = $_POST['cliente_id'];
        $this->model->nomeCliente = $_POST['name'];
        $this->model->cpf = $_POST['cpf'];
        $this->model->email = $_POST['email'];
        $this->model->save();

        header('Location: /cliente');
    }
    public function ordenar()
    {
        if($_POST['select'] === 'name'){
        $clientes = $this->model->orderBY('nomeCliente', 'ASC');
        return $this->render('pages/cliente/index', ['clientes' => $clientes]);
        }

        $clientes = $this->model->orderBY('email', 'ASC');
        return $this->render('pages/cliente/index', ['clientes' => $clientes]);
    }
}