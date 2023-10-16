<?php

require_once('class/portifolio.php');
$listaPortifolio = new PortifolioClass();
$listar = $listaPortifolio->Listardes();
//var_dump($listar); 

?>

<!-- <h1>PG Listar</h1>

<ul>
    <li><a href="index.php?p=servico&s=inserir">INSERIR</a></li>
    <li><a href="index.php?p=servico&s=desativar">DESATIVAR</a></li>
    <li><a href="index.php?p=servico&s=atualizar">ATUALIZAR</a></li>
</ul> -->


<h2><a href="index.php?p=portifolio" class="btn btn-dark">Portifólios Ativos</a></h2>

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
                <th> ATIVAR</th>
                
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idPortifolio'] ?></td>
                    <td style="width: 10%;"><?php echo '<img src="../img/' . $linha['imgPortifolio'] . '" alt="' . $linha['altPortifolio'] . '">' ?></td>
                    <td><?php echo $linha['altPortifolio'] ?></td>
                    <td><?php echo $linha['statusPortifolio'] ?></td>
                    <td><a href="index.php?p=portifolio&po=ativar&id=<?php echo $linha['idPortifolio'] ?>" class="btn btn-outline-success"> ATIVAR</td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>