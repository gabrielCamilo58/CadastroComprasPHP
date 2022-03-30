<?php



$rotas = [ 
    '/produtos' => ['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'index'],
    '/criar/produto' =>['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'create'],
    '/salvar/produto' => ['controller' =>  CadastroCompras\Controller\ProdutoController::class, 'metodo' => 'store'],
    '/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'index'],
    '/criar/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'create'],
    '/salvar/cliente' => ['controller' =>  CadastroCompras\Controller\ClienteController::class, 'metodo' => 'store'],
    '/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'index'],
    '/criar/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'create'],
    '/salvar/pedido' => ['controller' =>  CadastroCompras\Controller\PedidoController::class, 'metodo' => 'store'],
];

return $rotas;




