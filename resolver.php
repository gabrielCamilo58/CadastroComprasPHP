<?php

$resolver = new CadastroCompras\Resolver;

$resolver['PDO'] = function ($r) {
    return new PDO('mysql:host=localhost;dbname=testecompras', 'root', '12345', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
};

return $resolver;