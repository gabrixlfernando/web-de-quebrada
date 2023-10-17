<?php

require_once('class/banner.php');
$listaBanner = new BannerClass();
$listar = $listaBanner->Listar();
// var_dump($listar); 

?>

<div class="btno d-flex justify-content-between">
<h2><a href="index.php?p=banner&ban=inserir" class="btn btn-dark">Novo Banner</a></h2>
<h2><a href="index.php?p=banner&ban=desativado" class="btn btn-dark">Banners Desativados</a></h2>
</div>

<div class="container">
    <div class="table-responsive">
        <table class="table table-light table-borderless">
            <caption>LISTAR BANNERS</caption>
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>IMG</th>
                    <th>ALT</th>
                    <th>STATUS</th>
                    <th> ATUALIZAR</th>
                    <th> DESATIVAR</th>
                </tr>
            </thead>



            <tbody>
                <?php foreach ($listar as $linha) : ?>
                    <tr>
                        <td><?php echo $linha['idBanner'] ?></td>
                        <td style="width: 30%;"><?php echo '<img src="../img/' . $linha['imgBanner'] . '">' ?></td>
                        <td><?php echo $linha['altBanner'] ?></td>
                        <td><?php echo $linha['statusBanner'] ?></td>
                        <td><a href="index.php?p=banner&ban=atualizar&id=<?php echo $linha['idBanner'] ?>" class="btn btn-outline-success"> ATUALIZAR</td>
                        <td><a href="index.php?p=banner&ban=desativar&id=<?php echo $linha['idBanner'] ?>"> <i class="fa-solid fa-trash-can"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>