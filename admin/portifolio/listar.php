<?php

require_once('class/portifolio.php');
$listaPortifolio = new PortifolioClass();
$listar = $listaPortifolio->Listar();
//var_dump($listar); 

?>

<!-- <h1>PG Listar</h1>

<ul>
    <li><a href="index.php?p=servico&s=inserir">INSERIR</a></li>
    <li><a href="index.php?p=servico&s=desativar">DESATIVAR</a></li>
    <li><a href="index.php?p=servico&s=atualizar">ATUALIZAR</a></li>
</ul> -->


<h2><a href="index.php?p=portifolio&po=inserir" class="btn btn-dark">Novo Portifólio</a></h2>

<div class="container">
    <div class="table-responsive">
    <table class="table table-light table-borderless">
        <caption>LISTAR SERVIÇOS</caption>
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
                    <td><?php echo $linha['idPortifolio'] ?></td>
                    <td style="width: 10%;"><?php echo '<img src="../img/' . $linha['imgPortifolio'] . '" alt="' . $linha['altPortifolio'] . '">' ?></td>
                    <td><?php echo $linha['altPortifolio'] ?></td>
                    <td><?php echo $linha['statusPortifolio'] ?></td>
                    <td><a href="index.php?po=portifolio&s=atualizar" class="btn btn-outline-success"> ATUALIZAR</td>
                    <td><a href="index.php?po=portifolio&s=desatiizar" class="btn btn-outline-danger"> DESATIVAR</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>