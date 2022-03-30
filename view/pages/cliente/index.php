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
<a href="/criar/cliente" class="btn btn-outline-success ml-2">Adicionar Cliente</a>
</div>
</div>
</nav>
</header>

<body>
    <h1></h1>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>CPF</th>
                <th>EMAIL</th>
                <th style="width: 200px">Ações</th>

            </tr>
        </thead>

        <tbody>

        <?php
            foreach($clientes as $cliente){
            ?>
            
            <br>
            <tr>
                <td><?php echo $cliente['nomeCliente'] ?></td>
                <td><?php echo $cliente['cpf'] ?></td>
                <td><?php echo $cliente['email'] ?></td>
                <td>
                    <form action="{{route('delete_produto', $produto->id)}}" method="POST" onsubmit=" return confirm('tem certeza que deseja deletar o produto: {{$produto->name}}') ">
                        <a href="{{route('edit_produto', $produto->id)}}" class="btn btn-info">Editar</a>

                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
            <?php }; ?>
        </tbody>
    </table>
</body>

</html>