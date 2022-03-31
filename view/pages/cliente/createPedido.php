<?php
include __DIR__ . '/../../inicio-html.php'; ?>




<!--Toda a na-->
</ul>
<form action="/pesquisar/pedido" class="d-flex" method="POST">
    <input type="text" name="filtro" placeholder="Pesquisar por produto:" class="form-control">
    <button class="btn btn-outline-success">Pesquisar</button>
</form>
<form action="/pedido/orderby" class="form form-inline ml-2" method="POST">
    <select class="form-select form-control" aria-label="Default select example" name="select">
        <option selected>Ordenar produto por</option>
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
    <h1>Produtos</h1>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Preço</th>
                <th style="width: 200px">Ações</th>

            </tr>
        </thead>

        <tbody>

            <?php
            foreach ($produtos as $produto) {
            ?>
                <br>
                <tr>
                    <td><?php echo $produto['nomeProduto']; ?></td>
                    <td><?php echo $produto['valorUnitario']; ?></td>
                    <td>

                        <div class="d-flex justify-content-between">
                            <form action="/salvar/pedido" method="POST">
                                <input style="display:none" type="text" name="cliente_id" value=<?php echo $idCliente; ?>>
                                <input style="display:none" type="text" name="produto_id" value=<?php echo $produto['id']; ?>>
                                <button type="submit" class="btn btn-info">Comprar</button>
                            </form>
                        </div>

                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</body>

</html>