<?php

require_once('class/login.php');

$id = $_GET['id'];

$usuario = new login($id);

$usuario->idUsuario = $id;


$usuario->Desativar();