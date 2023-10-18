<?php

require_once('class/banner.php');
$listaBanner = new BannerClass();
$listar = $listaBanner->Listaar();


?>



<h2><a href="index.php?p=banner" class="btn btn-dark">Banners Ativos</a></h2>



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
                <th> ATIVAR</th>
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idBanner'] ?></td>
                    <td style="width: 10%;"><?php echo '<img src="../img/' . $linha['imgBanner'] . '">' ?></td>
                    <td><?php echo $linha['altBanner'] ?></td>
                    <td><?php echo $linha['statusBanner'] ?></td>
                    <td><a href="index.php?p=banner&ban=ativar&id=<?php echo $linha['idBanner'] ?>" class="btn btn-outline-success"> ATIVAR</td>
    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>