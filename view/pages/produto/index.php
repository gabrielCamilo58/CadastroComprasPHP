<?php
include __DIR__ . '/../../inicio-html.php'; ?>




<!--Toda a na-->

<form action="{{route('search_produto')}}" class="d-flex" method="POST">
    <input type="text" name="filtro" placeholder="Pesquisar por produto:" class="form-control">
    <button class="btn btn-outline-success">Pesquisar</button>
</form>
<form action="{{route('index_produto')}}" class="form form-inline ml-2" method="POST">
    <select class="form-select form-control" aria-label="Default select example" name="select">
        <option selected>Ordenar produto por</option>
        <option value="name">Nome</option>
        <option value="preco">Preço</option>
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
            foreach($produtos as $produto){
            ?>
            <br>
            <tr>
                <td><?php echo $produto['nomeProduto']; ?></td>
                <td><?php echo $produto['valorUnitario']; ?></td>
                <td><?php echo $produto['quatidade']; ?></td>
                <td>
                    <form action="{{route('delete_produto', $produto->id)}}" method="POST" onsubmit=" return confirm('tem certeza que deseja deletar o produto: {{$produto->name}}') ">
                        <a href="{{route('edit_produto', $produto->id)}}" class="btn btn-info">Editar</a>

                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
                <?php };?>
        </tbody>
    </table>
</body>

</html>