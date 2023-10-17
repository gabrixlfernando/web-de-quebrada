<?php

require_once('class/banner.php');

$id = $_GET['id'];

$banner = new BannerClass($id);

$banner->idBanner = $id;


$banner->Desativar();
