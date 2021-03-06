<?php
include __DIR__ . '/../../inicio-html.php'; ?>
<form action="/pesquisar/produto" class="d-flex" method="POST">
    <input type="text" name="filtro" placeholder="Pesquisar por produto:" class="form-control">
    <button class="btn btn-outline-success">Pesquisar</button>
</form>
<form action="/ordenar/produto" class="form form-inline ml-2" method="POST">
    <select class="form-select form-control" aria-label="Default select example" name="select">
        <option selected>Ordenar produto por</option>
        <option value="name">Nome</option>
        <option value="preco">Preço</option>
        <option value="qtd">Quantidade</option>
    </select>
    <button class="btn btn-outline-success">Ordenar</button>
</form>
<a href="/criar/produto" class="btn btn-outline-success ml-2">Adicionar Produto</a>
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
                <th>Quantidade</th>
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
                    <td><?php echo $produto['quatidade']; ?></td>
                    <td>

                        <div class="d-flex justify-content-between">
                            <form action="/deletar/produto" method="POST" onsubmit=" return confirm('tem certeza que deseja deletar o produto: {{$produto->name}}') ">
                                <input style="display:none" type="text" name="produto_id" value=<?php echo $produto['id']; ?>>
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                            <form action="/editar/produto" method="POST">
                                <input style="display:none" type="text" name="produto_id" value=<?php echo $produto['id']; ?>>
                                <button type="submit" class="btn btn-info">Editar</button>
                            </form>
                        </div>

                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</body>

</html>