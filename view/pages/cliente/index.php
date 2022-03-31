<?php
include __DIR__ . '/../../inicio-html.php'; ?>
<!--Toda a na-->
</ul>
<form action="/pesquisar/cliente" class="d-flex" method="POST">
    <input type="text" name="filtro" placeholder="Pesquisar por cliente:" class="form-control">
    <button class="btn btn-outline-success">Pesquisar</button>
</form>
<form action="/ordenar/cliente" class="form form-inline ml-2" method="POST">
    <select class="form-select form-control" aria-label="Default select example" name="select">
        <option selected>Ordenar cliente por</option>
        <option value="name">Nome</option>
        <option value="email">Email</option>
    </select>
    <button class="btn btn-outline-success">Ordenar</button>
</form>
<a href="/criar/cliente" class="btn btn-outline-success ml-2">Adicionar Cliente</a>
</div>
</div>
</nav>
</header>
<body>
    <h1>Clientes</h1>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>CPF</th>
                <th>EMAIL</th>
                <th style="width: 340px">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($clientes as $cliente) {
            ?>

                <br>
                <tr>
                    <td><?php echo $cliente['nomeCliente'] ?></td>
                    <td><?php echo $cliente['cpf'] ?></td>
                    <td><?php echo $cliente['email'] ?></td>
                    <td>
                    
                        <div class="d-flex justify-content-between">
                            <form action="/editar/cliente" method="POST">
                                <input style="display:none" type="text" name="cliente_id" value=<?php echo $cliente['id']; ?>>
                                <button type="submit" class="btn btn-info">Editar</button>
                            </form>
                            <form action="/deletar/cliente" method="POST" onsubmit=" return confirm('tem certeza que deseja deletar o produto: {{$produto->name}}') ">
                                <input style="display:none" type="text" name="cliente_id" value=<?php echo $cliente['id']; ?>>
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                            <form action="/criar/pedido" method="POST">
                                <input style="display:none" type="text" name="cliente_id" value=<?php echo $cliente['id']; ?>>
                                <button type="submit" class="btn btn-info">Realizar Pedido</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</body>

</html>