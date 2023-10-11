<?php

require_once('class/sobre.php');

$id = $_GET['id'];

$sobre = new SobreClass($id);

$sobre->idSobre = $id;


$sobre->Desativar();