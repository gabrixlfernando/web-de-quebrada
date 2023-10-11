<?php

require_once('class/portifolio.php');

$id = $_GET['id'];

$portifolio = new PortifolioClass($id);

$portifolio->idPortifolio = $id;


$portifolio->Desativar();