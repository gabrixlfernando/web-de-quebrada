<?php

require_once('class/usuario.php');

$id = $_GET['id'];

$usuario = new UsuarioClass($id);

$usuario->idUsuario = $id;


$usuario->Desativar();