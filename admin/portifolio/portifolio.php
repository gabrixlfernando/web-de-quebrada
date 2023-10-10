<?php

$pagina = @$_GET['po'];

// require_once('listar.php');

if ($pagina == NULL) {
    require_once('listar.php');
} else {
    if ($pagina == 'inserir') {
        require_once('inserir.php');
    }
    if ($pagina == 'atualizar') {
        require_once('atualizar.php');
    }
    if ($pagina == 'desativar') {
        require_once('desativar.php');
    }
}