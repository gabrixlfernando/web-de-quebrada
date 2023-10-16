<?php

require_once('class/avaliacoes.php');
$listaAvaliacoes = new AvaliacoesClass();
$listar = $listaAvaliacoes->listaar();
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
                    <!-- <td><?php echo $linha['imgAvaliacao'] ?></td> -->
                    <td style="width: 10%;"><?php echo '<img src="../img/' . $linha['imgAvaliacao'] . '">' ?></td>
                    <td><?php echo $linha['altAvaliacao'] ?></td>
                    <td><?php echo $linha['textAvaliacao'] ?></td>
                    <td><?php echo $linha['statusAvaliacao'] ?></td>
                    <td><a href="index.php?p=avaliacoes&av=atualizar&id=<?php echo $linha['idAvaliacao'] ?>" class="btn btn-outline-success"> ATUALIZAR</td>
                    <td style="text-align: center;"><a href="index.php?p=avaliacoes&av=desativar&id=<?php echo $linha['idAvaliacao'] ?>"> <i class="fa-solid fa-trash-can"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>