<?php

require_once('class/servico.php');
$listaServico = new ServicoClass();
$listar = $listaServico->Listar();
//var_dump($listar); 

?>

<!-- <h1>PG Listar</h1>

<ul>
    <li><a href="index.php?p=servico&s=inserir">INSERIR</a></li>
    <li><a href="index.php?p=servico&s=desativar">DESATIVAR</a></li>
    <li><a href="index.php?p=servico&s=atualizar">ATUALIZAR</a></li>
</ul> -->


<h2><a href="index.php?p=servico&s=inserir">Novo Serviço</a></h2>

<div>
    <table class="table table-dark table-bordered border-primary">
        <caption>LISTAR SERVIÇOS</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>IMG</th>
                <th>ALT</th>
                <th>TEXTO</th>
                <th>LINK</th>
                <th>STATUS</th>
                <th> ATUALIZAR</th>
                <th> DESATIVAR</th>
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idServico'] ?></td>
                    <td><?php echo $linha['tituloServico'] ?></td>
                    <td><?php echo '<img src="../img/' . $linha['imgServico'] . '" alt="' . $linha['altServico'] . '">' ?></td>
                    <td><?php echo $linha['altServico'] ?></td>
                    <td><?php echo $linha['textServico'] ?></td>
                    <td><?php echo $linha['linkServico'] ?></td>
                    <td><?php echo $linha['statusServico'] ?></td>
                    <td><a href="index.php?p=servico&s=atualizar"> ATUALIZAR</td>
                    <td><a href="index.php?p=servico&s=atualizar"> DESATIVAR</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>