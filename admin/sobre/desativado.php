<?php

require_once('class/sobre.php');
$listaSobre = new SobreClass();
$listar = $listaSobre->Listardes();
//var_dump($listar); 

?>

<h2><a href="index.php?p=sobre" class="btn btn-dark">Sobre Ativos</a></h2>

<div class="container">
    <div class="table-responsive">
    <table class="table table-light table-borderless">
        <caption>LISTAR SERVIÇOS</caption>
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>TEXTO</th>
                <th>STATUS</th>
                <th> ATIVAR</th>
                
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idSobre'] ?></td>
                    <td><?php echo $linha['tituloSobre'] ?></td>
                    <td><?php echo $linha['textSobre'] ?></td>
                    <td><?php echo $linha['statusSobre'] ?></td>
                    <td><a href="index.php?p=sobre&sb=ativar&id=<?php echo $linha['idSobre'] ?>" class="btn btn-outline-success"> ATIVAR</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>