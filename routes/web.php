<?php



$rotas = [ 
    '/produtos' => ['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'index'],
    '/criar/produto' =>['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'create'],
    '/salvar/produto' => ['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'store'],
    '/pesquisar/produto' => ['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'search'],
    '/deletar/produto' => ['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'destroy'],
    '/editar/produto' => ['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'edit'],
    '/atualizar/produto' => ['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'update'],
    '/ordenar/produto' => ['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'ordenar'],
    '/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'index'],
    '/criar/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'create'],
    '/salvar/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'store'],
    '/pesquisar/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'search'],
    '/deletar/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'destroy'],
    '/editar/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'edit'],
    '/atualizar/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'update'],
    '/ordenar/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'ordenar'],
    '/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'index'],
    '/criar/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'create'],
    '/salvar/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'store'],
    '/pesquisar/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'search'],
    '/deletar/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'destroy'],
    '/editar/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'edit'],
    '/pedidos/cancelados' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'pedidosCancelados'],
    '/pedidos/pagos' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'pedidosPagos'],
    '/ordenar/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'ordenar'],


];

return $rotas;




