<?php

require_once('class/avaliacoes.php');
$listaAvaliacoes = new AvaliacoesClass();
$listar = $listaAvaliacoes->Listar();
//var_dump($listar); 

?>

<h2><a href="index.php?p=avaliacoes&av=inserir" class="btn btn-dark">Nova Avaliação</a></h2>

<div class="container">
    <div class="table-responsive">
    <table class="table table-light table-borderless">
        <caption>LISTAR AVALIAÇÕES</caption>
        <thead class="table-dark">
            <tr>
          
                <th>ID</th>
                <th>IMAGEM</th>
                <th>ALT</th>
                <th>MENSAGEM</th>
                <th>STATUS</th>
                <th> ATUALIZAR</th>
                <th> DESATIVAR</th>
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idAvaliacao'] ?></td>
                    <td><?php echo $linha['imgAvaliacao'] ?></td>
                    <td><?php echo $linha['altAvaliacao'] ?></td>
                    <td><?php echo $linha['textAvaliacao'] ?></td>
                    <td><?php echo $linha['statusAvaliacao'] ?></td>
                    <td><a href="index.php?p=avaliacoes&av=atualizar" class="btn btn-outline-success"> ATUALIZAR</td>
                    <td><a href="index.php?p=avaliacoes&av=desativar" class="btn btn-outline-danger"> DESATIVAR</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>