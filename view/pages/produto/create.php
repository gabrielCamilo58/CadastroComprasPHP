<?php

use CadastroCompras\Models\Produto;

 include __DIR__ . '/../../inicio-html.php'; ?>
 </ul>
</div>
</div>
</nav>
</header>

<form action="/salvar/produto" method="POST">
       <?php include __DIR__ . '/_partials/form.php';?> 
       <button type="submit" class="btn btn-primary">Enviar</button>
</form>