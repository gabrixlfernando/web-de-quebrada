<?php

require_once('class/avaliacoes.php');

$id = $_GET['id'];

$avaliacao = new AvaliacoesClass($id);

$avaliacao->idAvaliacao = $id;


$avaliacao->Desativar();
