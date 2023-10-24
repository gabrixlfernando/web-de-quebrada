<?php

$pagina = @$_GET['user'];

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
    if ($pagina == 'desativado') {
        require_once('desativado.php');
    }
    if ($pagina == 'ativar') {
        require_once('ativar.php');
    }
}
