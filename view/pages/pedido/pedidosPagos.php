<?php

include __DIR__ . '/../../inicio-html.php'; ?>

<li class="nav-item">
    <a class="nav-link" href="/pedidos/pagos">Pedidos Pagos</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/pedidos/cancelados">Pedidos Cancelados</a>
</li>
</ul>
</ul>
<form action="/ordenar/pedido" class="form form-inline ml-2" method="POST">
    <select class="form-select form-control" aria-label="Default select example" name="select">
        <option selected>Ordenar pedido por</option>
        <option value="name">Nome</option>
        <option value="preco">Preço</option>
    </select>
    <button class="btn btn-outline-success">Ordenar</button>
</form>
</div>
</div>
</nav>
</header>

<body>
    <h1>Pedidos Pagos</h1>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Pedido n°</th>
                <th>Data do Pedido</th>
                <th>Status</th>
                <th style="width: 500px;">Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($pedidos as $pedido) {?>
                <br>
                <tr>
                    <td><?php echo $pedido['numeroPedido'] ?></td>
                    <td><?php echo DateTime::createFromFormat('Y-m-d', $pedido['dtPedido'])->format('d-m-Y'); ?></td>
                    <td><?php echo $pedido['statusPedido'] ?></td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <form action="/deletar/pedido" method="POST" onsubmit=" return confirm('tem certeza que deseja deletar o Pedido') ">
                                <input style="display:none" type="text" name="pedido_id" value=<?php echo $pedido['id']; ?>>
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                                <form action="/editar/pedido" method="POST">
                                    <input style="display:none" type="text" name="pedido_id" value=<?php echo $pedido['id']; ?>>
                                    <input style="display:none" type="text" name="novoStatus" value="cancelado">

                                    <button type="submit" class="btn btn-info">Marcar como cancelado</button>
                                </form>
                        </div>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</body>

</html>