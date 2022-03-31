<?php include __DIR__ . '/../../inicio-html.php'; ?>
</ul>
</div>
</div>
</nav>
</header>

<form action="/atualizar/produto" method="POST">
    <?php include __DIR__ . '/_partials/form.php'?>; 
    <input style="display:none" type="text" name="produto_id" value=<?php echo $idProduto; ?>>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>