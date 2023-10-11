<?php

require_once('class/sobre.php');
$listaSobre = new SobreClass();
$listar = $listaSobre->Listar();
//var_dump($listar); 

?>

<h2><a href="index.php?p=sobre&sb=inserir" class="btn btn-dark">Novo Sobre</a></h2>

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
                <th> ATUALIZAR</th>
                <th> DESATIVAR</th>
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idSobre'] ?></td>
                    <td><?php echo $linha['tituloSobre'] ?></td>
                    <td><?php echo $linha['textSobre'] ?></td>
                    <td><?php echo $linha['statusSobre'] ?></td>
                    <td><a href="index.php?p=servico&s=atualizar" class="btn btn-outline-success"> ATUALIZAR</td>
                    <td style="text-align: center;"><a href="index.php?p=servico&s=desativar"> <i class="fa-solid fa-trash-can"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>