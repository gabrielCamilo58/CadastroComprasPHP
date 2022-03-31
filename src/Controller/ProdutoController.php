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
        return $this->render('pages/produto/index', ['produtos' => $produtos]);
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
        return $this->render('pages/produto/index', ['produtos' => $produtos]);
    }
    public function search()
    {
        $filtro = $_POST['filtro'];
        $produtos = $this->model->search($filtro, "nomeProduto");
        return $this->render('pages/produto/index', ['produtos' => $produtos]);
    }
    public function destroy()
    {
        $this->model->id = (intval($_POST['produto_id']));
        $this->model->delete();

        $produtos = $this->model->findAll();
        return $this->render('pages/produto/index', ['produtos' => $produtos]);
        
    }
    public function edit()
    {
        $idProduto = intval($_POST['produto_id']);
        return $this->render('pages/produto/edit', ['idProduto' => $idProduto]);
    }
    public function update()
    {
        $this->model->id = $_POST['produto_id'];
        $this->model->nomeProduto = $_POST['name'];
        $this->model->valorUnitario = $_POST['price'];
        $this->model->quatidade = $_POST['qtd'];
        $this->model->save();

        header('Location: /produtos');
    }
    public function ordenar()
    {
        if($_POST['select'] === 'name'){
            $produtos = $this->model->orderBY('nomeProduto', 'ASC');
            return $this->render('pages/produto/index', ['produtos' => $produtos]);
            
        }
        if($_POST['select'] === 'preco'){
            $produtos = $this->model->orderBY('valorUnitario', 'ASC');
            return $this->render('pages/produto/index', ['produtos' => $produtos]);
            
        }
        $produtos = $this->model->orderBY('quatidade', 'ASC');
        return $this->render('pages/produto/index', ['produtos' => $produtos]);
    }
}