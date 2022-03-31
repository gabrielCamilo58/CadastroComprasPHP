<?php

namespace CadastroCompras\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use CadastroCompras\Controller\Controller;
use CadastroCompras\Models\Pedido;
use CadastroCompras\Models\Produto;

class PedidoController extends Controller
{
    protected $model;
    protected $produtoModel;
    public function __construct(Pedido $model, Produto $produtoModel)
    {
        $this->model = $model;
        $this->produtoModel = $produtoModel;
    }
    
    public function index() 
    {
        $pedidos = $this->model->findAll();
        return $this->render('pages/pedido/index', ['pedidos' => $pedidos]);
    }
    public function create()
    {
        $produtos = $this->produtoModel->findAll();
        $idCliente = intval($_POST['cliente_id']);
        return $this->render('pages/cliente/createPedido', ['idCliente' => $idCliente, 'produtos' => $produtos]);
    }
    public function store()
    {
        $numero = $this->criarNumeroPedido();
        
        $this->model->cliente_Id = intval($_POST['cliente_id']); 
        $this->model->produto_Id = intval($_POST['produto_id']);
        $this->model->statusPedido = "Em Aberto";
        $this->model->numeroPedido = $numero;
        $this->model->dtPedido = date("Y-m-d");
        $this->model->save();
    
        $pedidos = $this->model->findAll();
        return $this->render('pages/pedido/index', ['pedidos' => $pedidos]);
        
    }
    public function destroy()
    {
        $this->model->id = intval($_POST['pedido_id']);
        $this->model->delete();

        header('Location: /pedido');
    }
    public function edit()
    {
     
        if($_POST['novoStatus'] === 'cancelado'){
            $this->model->id = $_POST['pedido_id'];
            $this->model->statusPedido = 'Cancelado';
            $this->model->save();
        }
        if($_POST['novoStatus'] === 'pago'){
            $this->model->id = $_POST['pedido_id'];
            $this->model->statusPedido = 'Pago';
            $this->model->save();
        }

        header('Location: /pedido');

    }
    public function criarNumeroPedido($num = 1): int
    {
        $data = date('Y-m-d');
        $pedidoNum = $this->model->search($num, "numeroPedido");
        $pedidoData = $this->model->search($data, "dtPedido");
        
        if((count($pedidoData) != false) && (count($pedidoNum) != false)){
            return $this->criarNumeroPedido($num += 1);
        }

        return $num;
    }

    public function pedidosPagos()
    {
        $pedidos = $this->model->search('Pago', "statusPedido");
        return $this->render('pages/pedido/pedidosPagos', ['pedidos' => $pedidos]);
    }
    public function pedidosCancelados()
    {
        $pedidos = $this->model->search('Cancelado', "statusPedido");
        return $this->render('pages/pedido/pedidosCancelados', ['pedidos' => $pedidos]);
    }
    public function ordenar()
    {
        if($_POST['select'] === 'data'){
            $pedidos = $this->model->orderBY('dtPedido', 'ASC');
            return $this->render('pages/pedido/index', ['pedidos' => $pedidos]);
            }
        
        $pedidos = $this->model->orderBY('numeroPedido', 'ASC');
        return $this->render('pages/pedido/index', ['pedidos' => $pedidos]);
    }
}